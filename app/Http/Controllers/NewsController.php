<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {

        $superAdminSession = Session::get('AdminSession');

        $admin = session('AdminSession')->role == '1';
        if (!$admin) {

            Alert::info('Info', 'Sorry you do not have access here');
            return Redirect::back();
        }

        $user = Admin::all();
        return view('admin.addNews')
            ->with('user', $user)
            ->with('superAdminSession', $superAdminSession);
    }

    public function postNews(Request $request)
    {

        $superAdminSession = Session::get('AdminSession');

        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required'
        ]);

        $news = new Post();

        if ($request->file('image')) {

            $imageId = Str::random(21);
            $request->file('image')->move(public_path("assets/NewsPost/img"), $imageId . '.' . $request->file('image')->getClientOriginalExtension());
            #save the path
            $poster = "assets/NewsPost/img/" . $imageId . '.' . $request->file('image')->getClientOriginalExtension();
        }

        $news->user_id = $superAdminSession->id;
        $news->title = $request->title;
        $news->body = $request->body;
        $news->image = $poster;
        $news->slug = Str::slug($request->title);

        $news->save();

        Alert::success('Success', 'A new Post has been added successfully.');
        return Redirect::back();
    }

    public function AllNews()
    {

        $superAdminSession = Session::get('AdminSession');
        $post = Post::all();

        return view('admin.viewNews')
            ->with('superAdminSession', $superAdminSession)
            ->with('post', $post);
    }

    public function editNews($id)
    {

        $superAdminSession = Session::get('AdminSession');
        $post = Post::find($id);

        return view('admin.editNews', compact('post', 'superAdminSession'));
    }

    public function processEditNews(Request $request, $id)
    {

        $post = Post::find($id);

        if ($request->file('image')) {

            $imageId = Str::random(21);
            $request->file('image')->move(public_path("assets/NewsPost/img"), $imageId . '.' . $request->file('image')->getClientOriginalExtension());
            #save the path
            $poster = "assets/NewsPost/img/" . $imageId . '.' . $request->file('image')->getClientOriginalExtension();

            $post->title = $request->title;
            $post->image = $poster;
            $post->body = $request->body;

            $post->save();

            Alert::success('Success', 'A Post has been Edited Successfully successfully.');
            return Redirect::route('all-news.admin');

        } else {

            $post->title = $request->title;
            $post->body = $request->body;

            $post->save();

            Alert::success('Success', 'A Post has been Edited Successfully successfully.');
            return Redirect::route('all-news.admin');

        }





    }

    public function deleteNews($id)
    {

        Post::destroy($id);
        Alert::success('Deleted', 'A Post has been deleted successfully.');
        return Redirect::back();
    }
}
