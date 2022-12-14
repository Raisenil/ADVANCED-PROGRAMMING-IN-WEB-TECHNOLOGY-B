<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\UserModel;
class LogInController extends Controller
{
    public function formLogIn()
    {
        return view('loginpage');
    }

    /*public function formLogInPost(Request $request)
    {
        $user=UserModel::all();
        echo "<pre>";
        print_r($user);
        echo "</pre";
    }*/

    public function formLogInPost(Request $request)
    {
		$newuser = new UserModel();
		$result = $newuser->where('username', $request->username)->where('password', $request->password)->first();
        //$data=compact($result);
        if(!empty($result) && isset($_REQUEST["LogIn"])){
            if($result['type']=="admin"){
                session()->put("username",$request->username);
                session()->put("password",$request->password);
                session()->put("type",$result->type);
                session()->put("email",$result->email);
                session()->put("name",$result->name);
                session()->put("location",$result->location);
                session()->put("phone",$result->phone);
                session()->put("user_id",$result->user_id);
                $data=compact('result');
                return view('/admin/profile')->with($data);
            }
            elseif($result['type']=="manager"){
                session()->put("username",$request->username);
                session()->put("password",$request->password);
                session()->put("type",$result->type);
                session()->put("email",$result->email);
                session()->put("name",$result->name);
                session()->put("location",$result->location);
                session()->put("phone",$result->phone);
                session()->put("user_id",$result->user_id);
                $data=compact('result');
                return view('/manager/profile')->with($data);
            }
            elseif($result['type']=="doctor"){
                session()->put("username",$request->username);
                session()->put("password",$request->password);
                session()->put("type",$result->type);
                session()->put("email",$result->email);
                session()->put("name",$result->name);
                session()->put("location",$result->location);
                session()->put("phone",$result->phone);
                session()->put("user_id",$result->user_id);
                $data=compact('result');
                return view('/doctor/profile')->with($data);
            }
            elseif($result['type']=="patient"){
                return view('/patient/profile')->with($result);
            }
        }else{
            $output1="Wrong info";
            return $output1;
        }
        /*
        if(!empty($result) && isset($_REQUEST["LogIn"])){
            session()->put("username",$request->username);
            session()->put("type",$request->type);
            return view('/profile')->with("username",$request->username)->with("password",$request->password);
		}
        else{
            $output1="Wrong info";
            return $output1;
        }*/
		
    }

    function logout(Request $request)
	{
        session()->forget("password");
        session()->forget("email");
        session()->forget("name");
        session()->forget("location");
        session()->forget("phone");
        session()->forget("user_id");
        session()->forget("username");
        session()->forget("type");
        return redirect('/loginpage');
        
        /*session()->forget('username');
		if(session()->forget('username'))
		{
            session()->flash('status', 'Logout successful!');
			return redirect('/loginpage');
		}*/
	}
}
