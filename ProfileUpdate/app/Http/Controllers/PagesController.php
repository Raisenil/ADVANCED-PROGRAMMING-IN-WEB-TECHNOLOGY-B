<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\UserModel;

class PagesController extends Controller
{
    public function formLogIn()
    {
    	return view('Home');
    }


    public function formLogInPost(Request $request)
    {
		$newuser = new UserModel();
		$result = $newuser->where('firstname', $request->firstname)->where('password', $request->password)->first();
		
if(!empty($result) && isset($_REQUEST["LogIn"])){
		return view('/register')->with("firstname",$request->firstname)->with("password",$request->password);
		}
        else{
            
            $output="wrong info";
            return $output;
        }
		dd('You are successfully LogIn');
    }
}
