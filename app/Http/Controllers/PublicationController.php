<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\PublicationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class PublicationController extends Controller
{
    public function index()
    {

        $category = PublicationCategory::get();
        $publication = Publication::get();
        return view('admin.publications')
            ->with(compact('category'))
            ->with(compact('publication'));
    }


    public function postPublication(Request $request)
    {

        $request->validate([
            'publication_category' => 'required',
            'title' => 'required',
            'poster' => 'required',
            'file' => 'required'
        ]);


        $publication = new Publication();

        if ($request->publication_category == 1) {
            $type = 'AGRO';
        } else {
            $type = 'TRADE';
        }

        if ($request->file('poster')) {

            $posterID = Str::random(21);
            $request->file('poster')->move(public_path("assets/publications/posters"), $posterID . '.' . $request->file('poster')->getClientOriginalExtension());
            #save the path
            $poster = "assets/publications/posters/" . $posterID . '.' . $request->file('poster')->getClientOriginalExtension();
        }

        if ($request->file('file')) {

            $fileID = Str::random(21);
            $request->file('file')->move(public_path("/assets/publications/$type/"), $fileID . '.' . $request->file('file')->getClientOriginalExtension());
            #save the path
            $file = "assets/publications/$type/" . $fileID . '.' . $request->file('file')->getClientOriginalExtension();
        }

        $publication->publication_category_id = $request->publication_category;
        $publication->title = $request->title;
        $publication->poster = $poster;
        $publication->file = $file;


        $publication->save();

        return Redirect::back();


    }
}
