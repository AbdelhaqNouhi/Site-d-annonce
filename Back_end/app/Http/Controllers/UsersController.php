<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersController extends Controller
{
    public function login(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $User = User::where('email', $login['email'])->first();

        if($User){
            if(hash::check($login['password'], $User->password)){
                return $User;
            }
            else{
                echo json_encode(false);

            }
        }
    }

    public function addUser(Request $request)
    {
        $add = $request->validate([
            'nom' => 'required|string',
            'prenome' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $User = User::create([
            'nom' => $add['nom'],
            'prenome' => $add['prenome'],
            'email' => $add['email'],
            'password' => Hash::make($add['password'])
        ]);

        return $User;
    }
}
