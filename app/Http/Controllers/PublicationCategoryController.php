<?php

namespace App\Http\Controllers;

use App\Models\PublicationCategory;
use Illuminate\Http\Request;

class PublicationCategoryController extends Controller
{
    public function index () {

        $publication = PublicationCategory::get();

        return view('admin.addCategory')
            ->with(compact('publication'));

    }

    public function addCategory (Request $request) {

        $publication = new PublicationCategory;

        $publication->name = $request->name;
        $publication->save();

        return redirect()->route('admin-category');
    }

}



