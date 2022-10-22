<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;
class RegisterControllers extends Controller
{
    public function formValidation()
    {
    	return view('register');
    }


    public function formValidationPost(Request $request)
    {
    	$this->validate($request,[
    			'firstname' => 'required|min:5|max:35',
    			'lastname' => 'required|min:5|max:35',
    			'email' => 'required|email|unique:users',
    			'mobileno' => 'required|numeric',
    			'password' => 'required|min:3|max:20',
    			'confirm_password' => 'required|min:3|max:20|same:password',
    			'details' => 'required'
    		],[
    			'firstname.required' => ' The first name field is required.',
    			'firstname.min' => ' The first name must be at least 5 characters.',
    			'firstname.max' => ' The first name may not be greater than 35 characters.',
    			'lastname.required' => ' The last name field is required.',
    			'lastname.min' => ' The last name must be at least 5 characters.',
    			'lastname.max' => ' The last name may not be greater than 35 characters.',
    		]);

		if(isset($error)){
			$output= $request->firstname;
		$output= $request->lastname;
		$output= $request->email;
		$output= $request->mobileno;
		$output= $request->password;
		$output= $request->details;
		return $output;
		}
			elseif(isset($_REQUEST["Insert"])){
		$newuser = new UserModel();
		$newuser->firstname= $request->firstname;
		$newuser->lastname= $request->lastname;
		$newuser->email= $request->email;
		$newuser->mobileno= $request->mobileno;
		$newuser->password= $request->password;
		$newuser->details= $request->details;
		$newuser->save();
		return view('Register');
		}
		elseif(isset($_REQUEST["Update"])){
			$newuser =UserModel::where('firstname', $request->firstname)->first();
			$newuser->firstname= $request->firstname;
			$newuser->lastname= $request->lastname;
			$newuser->email= $request->email;
			$newuser->mobileno= $request->mobileno;
			$newuser->password= $request->password;
			$newuser->details= $request->details;
			$newuser->save();
			return view('Register');
			}
		dd('You are successfully added all fields.');
    }

	
		
}
