<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function index() {

        $superAdminSession = Session::get('AdminSession');

        $countvideo = Gallery::where('type', 'video')->count();
        $countimage = Gallery::where('type', 'image')->count();


        return view('admin.gallery', compact('superAdminSession', 'countvideo', 'countimage'));

    }

     // Images Controllers
    public function allImage() {

        $superAdminSession = Session::get('AdminSession');

        $img = Gallery::where('type', 'image')->get();
        $countGallery = Gallery::where('type', 'image')->count();

        return view('admin.allImages', compact('superAdminSession', 'img', 'countGallery'));

    }

    public function imgProcess(Request $request) {

        $superAdminSession = Session::get('AdminSession');

        $img = new Gallery();

        if ($request->file('path')) {

            $imageId = Str::random(21);
            $request->file('path')->move(public_path("assets/Gallery/img"), $imageId . '.' . $request->file('path')->getClientOriginalExtension());
            #save the path
            $poster = "assets/Gallery/img/" . $imageId . '.' . $request->file('path')->getClientOriginalExtension();

        }
        $img->type = 'image';
        $img->user_id = $superAdminSession->id;
        $img->caption = $request->caption;
        $img->path = $poster;

        $img->save();

        Alert::success('Success', 'A New Image Has been Successfully Uploaded.');
        return Redirect::route('admin.gallery-all-images');

    }

    public function imgdelete($id) {

        Gallery::destroy($id);

        Alert::success('Success', 'Image Successfully Deleted.');
        
        return Redirect::route('admin.gallery-all-images');

    }
    // End of Images Controllers


    // Vidoes Controllers
    public function allVideo() {

        $superAdminSession = Session::get('AdminSession');

        $vid = Gallery::where('type', 'video')->get();
        $countGallery = Gallery::where('type', 'video')->count();
        return view('admin.allVideos', compact('superAdminSession', 'vid', 'countGallery'));

    }

    public function vidProcess(Request $request) {

        $superAdminSession = Session::get('AdminSession');

        $img = new Gallery();

        $img->type = 'Video';
        $img->user_id = $superAdminSession->id;
        $img->caption = $request->caption;
        $img->path = $request->path;

        $img->save();

        Alert::success('Success', 'A New Video Has been Successfully Uploaded.');
        return Redirect::route('admin.gallery-all-video');

    }

    public function vidDelete($id) {

        Gallery::destroy($id);

        Alert::success('Success', 'Video Successfully Deleted.');
        return Redirect::route('admin.gallery-all-video');

    }

}
