<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistationModel;
use illuminate\support\Facades\DB;

class RegistationController extends Controller
{
    function OnRegistatio(Request $request)
    {
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $city = $request->input('city');
        $username = $request->input('username');
        $password = $request->input('password');
        $gender = $request->input('gender');


        $userCount = RegistationModel::where('username',$username)->count();

        if($userCount > 0){
            return "User already exit";
        }
        else{
           $result = RegistationModel::insert(['firstname'=>$firstname,'lastname'=>$lastname,'city'=>$city,'username'=>$username,'password'=>$password,'gender'=>$gender]);

           if($result == true){
            return "Registation Success";
           }
           
           else{
            return "Registation Not success";
           }
        }

    }
}
