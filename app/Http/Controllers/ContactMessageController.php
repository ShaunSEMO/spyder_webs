<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    // public function store(Request $request) {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required'
    //     ]);

    //     Mail::send('email.contact-message', [
    //         'msg' => $request->message
    //     ], function($mail) use($request) {
    //         $mail->from($request->email, $request->name);
    //         $mail->to('info@spyderwebs.co.za')->subject('Website enquiry via Spyder Webs');
    //     });

    //     return redirect('/');
    // }
}
