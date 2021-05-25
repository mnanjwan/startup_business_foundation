<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendSupportMail;

class SupportController extends Controller
{
    public function supportPost(Request $request)
    {
        request()->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'description' => 'required',
        ]);

        $support = Support::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
            'status' => 1
        ]);

        if($support) {
            // send email to company email
            Mail::to('info@Startupbizfoundation.org')->send(new SendSupportMail($support));
            return redirect()->back()->with('message', 'We have received your message. We will get back to you shortly');
        }

        return redirect()->back()->with('error', 'Error Sending Message, Please try again');
    }
}
