<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    function index()
    {
     return view('mail');
    }

    function send(Request $request)
    {
        $admin="FastCare@test.com";

        $this->validate($request,
        ['name'=>'required', 
        'email' => 'email|required',
        'message' =>  'required']
        );
        if(isset($error))
        {
    return $output;
        }
        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'message'   =>   $request->message
        );

     Mail::to($admin)->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
    
}
