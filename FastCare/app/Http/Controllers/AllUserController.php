<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\RequestModel;

class AllUserController extends Controller
{
    public function allpaitient(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search != ""){
            $users=RequestModel::where('name', 'LIKE', "%$search%")->orWhere('phone', 'LIKE', "%$search%")->get();
        }else{
        $users= RequestModel::all();
        }
        $data = compact('users','search');
        return view('admin/allpaitient')->with($data); 
    }

    public function alluser(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search != ""){
            $users=UserModel::where('username', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->get();
        }else{
        $users= UserModel::all();
        }
        $data = compact('users','search');
        return view('admin/alluser')->with($data);
        
    }
    
    public function pdelete($id)
    {
        $user=RequestModel::find($id)->delete();
        return redirect()->back();
    }

    public function pedit($id)
    {
        $user=RequestModel::find($id);
        if(is_null($user)){
            return redirect('allpaitient');
        }
        else{
            $url=url("/patient/update/")."/".$id;
            $data =compact('user','url');
            return view('admin/pupdate')->with($data);
        }
    }

    public function edit($id)
    {
        $user=UserModel::find($id);
        if(is_null($user)){
            return redirect('alluser');
        }
        else{
            $url=url("/user/update/")."/".$id;
            $data =compact('user','url');
            return view('admin/update')->with($data);
        }
    }

    

    public function adminprofile()
    {
        return view('admin/profile');
    }

    public function doctorprofile()
    {
        return view('doctor/profile');
    }

    public function managerprofile()
    {
        return view('manager/profile');
    }

    public function delete($id)
    {
        $user=UserModel::find($id)->delete();
        return redirect()->back();
    }

    

    public function update(Request $request){
        $user=UserModel::find($request->id);
        $user->username= $request->username;
		$user->password= $request->password;
		$user->email= $request->email;
		$user->name= $request->name;
		$user->location= $request->location;
		$user->phone= $request->phone;
        $user->type= $request->type;
		$user->save();
        return redirect('alluser');
    }

    public function pupdate(Request $request){
        $user=RequestModel::find($request->id);
        $user->name= $request->name;
		$user->phone= $request->phone;
		$user->type= $request->type;
		$user->location= $request->location;
        $user->prescription= $request->prescription;
		$user->save();
        return redirect('alluser');
    }

    public function APIlist(){
        return UserModel::all();
    }

    public function APIPost(Request $req){
        $newuser = new UserModel();
		$newuser->username= $req->username;
		$newuser->password= $req->password;
		$newuser->email= $req->email;
		$newuser->name= $req->name;
		$newuser->location= $req->location;
		$newuser->phone= $req->phone;
        $newuser->type= $req->type;
		$newuser->save();
        return $req;
    }
}
