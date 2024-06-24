<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
function index(){
    $name = "“Donal Trump”";
    $age = "“75”" ;
    return view ('profile', compact('name','age'));
    

    $data = [
  
        'id' => "1",
        
        'name' => "“Donal Trump”",

        'age' => "“75”"
   
           ];
   
$cookie_name = "access_token";;
$cookie_value = "123-XYZ";
$minutes = 1;
$path = "/";
$domain = "http://127.0.0.1:8000/profile";

$secure = false;
$httponly = true;
return response()->json($data, 200)->cookie($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httponly);

}
}
