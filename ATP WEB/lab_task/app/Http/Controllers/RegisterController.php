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
            'address'=>'regex:/^[a-zA-Z,]+$/',
            'occupation'=>'required',
            'gender'=>'required|string',
            'language'=>'required|string',
            'zipcode'=>'required|regex:/^[0-9]{4,4}$/'
        ],

        [
            'address'=>'Your address is not correct,you can start your address with letter(Dhaka)',
            'occupation'=>'Please insert your occupation',
            'gender'=>'Choose your gender',
            'language'=>'Choose any language',
            'zipcode'=>'Insert Correct zip code with four digits'
        ],

    );
    $output=$request->address;
    return $output;

}
}