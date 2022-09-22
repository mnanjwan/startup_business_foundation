<?php

namespace App\Http\Controllers;

use App\Models\PublicationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class PublicationCategoryController extends Controller
{
    public function index () {

        $superAdminSession = Session::get('AdminSession');

        $admin = session('AdminSession')->role == '1';
        if(!$admin){

            Alert::info('Info','Sorry you do not have access here');
            return Redirect::back();

        }

        $publication = PublicationCategory::get();

        return view('admin.addCategory')
            ->with(compact('publication'))
            ->with(compact('superAdminSession'));


    }

    public function addCategory (Request $request) {

        $request->validate([
            'name' => 'required'
        ]);

        $publication = new PublicationCategory;


        $publication->name = $request->name;
        $publication->save();

        return redirect()->route('admin-category');
    }

}



