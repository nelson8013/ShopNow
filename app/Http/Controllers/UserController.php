<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //

    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    public function login(Request $request){
        //Check that the request email and password match the records in the DB

        $user = User::where(['email' => $request->email])->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return "Username or Password does not match";
        }else{
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }



    public function register(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/login');

    }
}
