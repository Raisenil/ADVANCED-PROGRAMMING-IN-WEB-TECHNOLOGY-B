<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\UserModel;

class AllUserController extends Controller
{
    public function APIList(){
        return UserModel::all();
    }
}
