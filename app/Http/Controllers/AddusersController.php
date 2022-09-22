<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AddusersController extends Controller
{
    public function index (Admin $admin) {

        // Using gates could not give me the best so i swithed to this method i Hope to correct it well
        // if (! Gate::allows($admin) ) {

        //     Alert::info('Info','Sorry you do not have access here');
        //     return Redirect::back();

        // } 

        $superAdminSession = Session::get('AdminSession');

        $admin = session('AdminSession')->role == '1';
        if(!$admin){

            Alert::info('Info','Sorry you do not have access here');
            return Redirect::back();

        }

        $user = Admin::all();
        return view('admin.addUser')
               ->with('user', $user)
               ->with('superAdminSession', $superAdminSession);

    }

    public function processAdmin (Request $request) {

        $pass = bcrypt($request->password);
        $user = new Admin();

        $request['password'] = $pass;
        $user = $request->except('_token');

        Admin::create($user);

        Alert::success('Success','A new Admin has been created.');
        return Redirect::back();

    }

}
