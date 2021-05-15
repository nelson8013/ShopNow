<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class LoginController extends Controller
{
    public function login(Request $request){
        //Check that the request email and password match the records in the DB
        /* echo '<pre>'; var_dump(DB::table('users')->where('email', $request->email )->first()); echo '</pre>'; exit;*/

        $user = User::where(['email' => $request->email])->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return "Username or Password does not match";
        }else{
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }
}
