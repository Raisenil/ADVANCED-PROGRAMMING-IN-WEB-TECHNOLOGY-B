<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;
use App\Models\RequestModel;
use App\Mail\Welcomemail;
use Illuminate\Support\Facades\mail;

class RegisterController extends Controller
{
    public function formValidation()
    {
        return view('register');
    }


    public function formValidationPost(Request $request)
    {
        $this->validate($request,
        [
            'username' => 'required|min:5|max:35',
            'password' => 'required|string|min:10|regex:/[a-z]/|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'email' => 'required|email|unique:users',
            'name' => 'required|min:5|max:35',
            'location' => 'required|min:5',
            'phone' => 'required|numeric|regex:/(01)[0-9]{9}/',
            'type'=>'required',
        ],
        /*[
                'firstname.required' => ' The first name field is required.',
                'firstname.min' => ' The first name must be at least 5 characters.',
                'firstname.max' => ' The first name may not be greater than 35 characters.',
                'lastname.required' => ' The last name field is required.',
                'lastname.min' => ' The last name must be at least 5 characters.',
                'lastname.max' => ' The last name may not be greater than 35 characters.',
        ]*/
        );

		if(isset($error)){
		$output= $request->username;
		$output= $request->password;
		$output= $request->email;
		$output= $request->name;
		$output= $request->location;
        $output= $request->phone;
		$output= $request->type;
		return $output;
		}
			elseif(isset($_REQUEST["Insert"])){
		$newuser = new UserModel();
		$newuser->username= $request->username;
		$newuser->password= $request->password;
		$newuser->email= $request->email;
		$newuser->name= $request->name;
		$newuser->location= $request->location;
		$newuser->phone= $request->phone;
        $newuser->type= $request->type;
        Mail::to($request->email)->send(new WelcomeMail($newuser));
		$newuser->save();
		return view('loginpage');
		}
		return view('loginpage');
    }

    
    public function formValidationRequest()
    {
        return view('requesthelp');
    }


    public function formValidationRequestPost(Request $request)
    {
        
        $this->validate($request,
        [
            'name' => 'required|min:5|max:35',
            'phone' => 'required|numeric|regex:/(01)[0-9]{9}/',
            'type'=>'required',
        ],
        /*[
                'firstname.required' => ' The first name field is required.',
                'firstname.min' => ' The first name must be at least 5 characters.',
                'firstname.max' => ' The first name may not be greater than 35 characters.',
                'lastname.required' => ' The last name field is required.',
                'lastname.min' => ' The last name must be at least 5 characters.',
                'lastname.max' => ' The last name may not be greater than 35 characters.',
        ]*/
        );
        
		if(isset($error)){
            echo $request;
            die();
		$output= $request->name;
        $output= $request->phone;
		$output= $request->type;
		return $output;
		}
            elseif(isset($_REQUEST["Req"])){
                $newuser = new RequestModel();
                $newuser->name= $request->name;
                $newuser->phone= $request->phone;
                $newuser->type= $request->type;
                $newuser->location= "No Data";
                $newuser->prescription= "No Data";
                $newuser->save();
                return view('map');
		}
        return view('map');
    }
}
