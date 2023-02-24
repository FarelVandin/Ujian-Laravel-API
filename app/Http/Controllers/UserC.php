<?php

namespace App\Http\Controllers;

use App\Models\UserM;
use Illuminate\Http\Request;
use App\Http\Resources\UserR;

class UserC extends Controller
{
    public function index(){
        $user = UserM::all();
       // return response()->json($posts);
       return UserR::collection($user);
    }

    public function detail($id){
        $user = UserM::findOrFail($id);
        return new UserR($user);
    }
}