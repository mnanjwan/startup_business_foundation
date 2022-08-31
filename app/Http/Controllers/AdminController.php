<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Publication;
use App\Models\PublicationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function dashboard () {

        $countPublishcation = Publication::count();
        $countPublishcationCategory = PublicationCategory::count();


        return view('admin.index')
                ->with('countPublishcation', $countPublishcation)
                ->with('countPublishcationCategory', $countPublishcationCategory);

    }


    public function login () {

        return view('admin.login');

    }

    public function loginProcess (Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);

        $admin = Admin::where('email', '=', $request->email)->first();
        if($admin){

            if(Hash::check($request->password, $admin->password)) {

                // if password matches then redirect to password
                Session::put('AdminSession', $admin);
                $superAdminSession = session::get('AdminSession');

                return redirect()->route('admin-dashboard');

            }else{

                return back()->with('fail', 'Invalid password');
            }
        }else{

            return back()->with('fail', 'No account found for this email');
        }

    }

    public function logout() {

        Session()->pull('AdminSession');
        Session::flush();
        return redirect()->route('admin-login');
    }
}
