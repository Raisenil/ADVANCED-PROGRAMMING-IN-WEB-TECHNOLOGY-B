<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\RequestModel;

class dAllUserController extends Controller
{
    public function edit($id)
    {
        $user=UserModel::find($id);
        if(is_null($user)){
            return redirect('dalluser');
        }
        else{
            $url=url("/duser/update/")."/".$id;
            $data =compact('user','url');
            return view('doctor/update')->with($data);
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
}
