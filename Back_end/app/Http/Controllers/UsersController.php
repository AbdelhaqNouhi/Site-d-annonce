<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function getuser()
    {
        //  select specific columns
        $users = User::select('id', 'email', 'password')->get();
        return $users;
    }
    public function addUser(Request $request)
    {
        if(User :: create($request -> all())){
            return "User created";
        }else{
            return "User not created";
        }

    }
}
