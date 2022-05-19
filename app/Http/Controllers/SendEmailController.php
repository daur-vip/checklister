<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class SendEmailController extends Controller
{
    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'phone'  =>  'required',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'phone'     =>  $request->phone,
            'message'   =>   $request->message
        );
        Mail::to('mail@daur.vip')->send(new SendMail($data));
        return redirect()->back()->with('success', 'Thanks for contacting us!');
    }
}
