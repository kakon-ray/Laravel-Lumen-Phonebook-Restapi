<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistationModel;
use illuminate\support\Facades\DB;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;


class LoginController extends Controller
{

    function tokenTest(){
        return 'Token Is Ok';
    }

      function OnLogin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        $key = env('TOKEN_KEY');

        $reponce = RegistationModel::where(['username'=>$username,'password'=>$password])->count();

        if($reponce == true){

            $payload = [
                "username" => $username,
                "password" => $password,
                "company" => 'Khulna it',
                 "iat" => time(),
                 "exp" => time() + 60
            
            ];

         $jwt = JWT::encode($payload, $key, 'HS256');

         return response()->json(['Token'=>$jwt ,'status'=>'Login Success']);
        }

        else{
            return "Login Faild";
        }


      }
}
