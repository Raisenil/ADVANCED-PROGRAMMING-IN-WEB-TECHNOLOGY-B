<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function submit()
    {
        return view('register');
    }
    public function get_register(Request $request)
    {
        $this->validate($request,
        [
            'name'=> 'required|regex:/^[a-zA-Z,]+$/',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'phone' => 'required|regex:/(01)[0-9]{9}/',
            'psw'=> 'required|string|min:10|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/'
        ],
        [
            'name'=>'Invalid Name',
            'email'=>'Invalid Email',
            'phone'=>'Invalid Phone',
            'psw'=>'Invalid Password'
        ]
        

    );
    $output=$request->name;
    
    return $output;

}
}