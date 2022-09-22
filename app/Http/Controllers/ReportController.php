<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;



class ReportController extends Controller
{
    public function index() {

        $superAdminSession = Session::get('AdminSession');

        $report = Report::all();

        return view('admin.reports', compact('report', 'superAdminSession'));

    }

    public function postReport(Request $request) {

        $superAdminSession = Session::get('AdminSession');

        $report = new Report();

        // if ($request->file('poster')) {

        //     $imageId = Str::random(21);
        //     $request->file('poster')->move(public_path("assets/Report/img"), $imageId . '.' . $request->file('poster')->getClientOriginalExtension());
        //     #save the path
        //     $poster = "assets/Report/img/" . $imageId . '.' . $request->file('poster')->getClientOriginalExtension();
        // }

        if ($request->file('file')) {

            $imageId = Str::random(21);
            $request->file('file')->move(public_path("assets/Report/file"), $imageId . '.' . $request->file('file')->getClientOriginalExtension());
            #save the path
            $file = "assets/Report/file/" . $imageId . '.' . $request->file('file')->getClientOriginalExtension();
        }
        if ($request->file('poster')) {

            $imageId = Str::random(21);
            $request->file('poster')->move(public_path("assets/Report/poster"), $imageId . '.' . $request->file('poster')->getClientOriginalExtension());
            #save the path
            $poster = "assets/Report/poster/" . $imageId . '.' . $request->file('poster')->getClientOriginalExtension();
        }

        $report->title = $request->title;
        $report->user_id = $superAdminSession->id;
        $report->poster = $poster;
        $report->file = $file;

        // dd($report);

        $report->save();

        Alert::success('Success', 'A new Report has been added successfully.');
        return Redirect::back();


    }



    public function deleteReport($id) {

        Report::destroy($id);

        Alert::success('Success', 'Report Successfully Deleted.');
        return Redirect::back();

    }
}
