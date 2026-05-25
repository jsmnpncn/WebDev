<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log as FacadesLog;

class UserController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function index(){
        return "REMOVE USER";
    }

    public function userInput($id, $name){
        $inputParameter = $id;

        return $name . " Input Parameter is: " . $inputParameter;
    }

    public function home(){
        return "<h1>HOME PAGE</h1>";
    }

    public function edit($id, $name){
        return "<a href='" . route('userDisplay', [$id, $name]) . "'>Edit User</a>";
    }

    public function show($id){
        return "User ID: ". $id;
    }

    public function create(){
        return view('addUser');
    }

    public function addUser(Request $request){
        $request->validate([
            'FirstName'=> ['required'],
            'Surname'=>['required'],
            'email'=>['required','email','ends_with:@yahoo.com'],
            'password'=>['required']
        ], [
            'FirstName.required'=>'Wala kang first name. Pakilagyan po.',
            'Surname.required'=>'Surname ngani. Pakilagyan pu hehe.',
            'email.required'=>'email fls langch',
            'password.required'=>'Nasaan password mo? pakilagyan.'
        ]);
        FacadesLog::info($request->FirstName);
        FacadesLog::info($request->MiddleName);
        FacadesLog::info($request->Surname);
        FacadesLog::info($request->email);
        FacadesLog::info($request->password);
        $result = DB::table('users')->get();
        return $result;
    }

    public function fallback(){
        return "
        <img src='" . asset('fallback_img.jpg') . "' style='width:300px; height:auto;' alt='Not Found'>
        <p>Wonbin says: Cannot be found. Try again ˙◠˙</p>
        ";
    }

}
