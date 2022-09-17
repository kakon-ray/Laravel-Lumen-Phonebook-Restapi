<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneBookDetails;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use illuminate\support\Facades\DB;


class PhoneBookController extends Controller
{
    function phoneBookDataInsert(Request $request){
       $username = $request->input('username');
       $phone_number = $request->input('phone_number');
       $name = $request->input('name');
       $email = $request->input('email');

         $token = $request->input('access_token');
         $key = env('TOKEN_KEY');
         $decoded = JWT::decode($token, new Key($key, 'HS256'));
         $decoded_array = (array)$decoded;

        $userName =  $decoded_array['username'];


         $result = PhoneBookDetails::insert(['username'=>$username,'phone_number'=>$phone_number,'name'=>$name,'email'=>$email]);
      

         if($result == true){
            return "Data Insert Success";
         }
         else{
            return 'error';
         }
    }
    function phoneBookDataSelect(Request $request){

        $email = $request->input('email');

        $response = PhoneBookDetails::where('email', '=', $email)->get();

             return $response;
       
    }
    function phoneBookDataDelete(Request $request){

        $email = $request->input('email');

         $response = PhoneBookDetails::where('email', '=', $email)->delete();

         if($response == true){
            return "Delete Success";
         }
         else{
            return "Delete Faild tray again";
         }
            
    }
}
