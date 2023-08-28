<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EmployeeController extends Controller
{
    public function construct(){

    }

    public function index(){
        return view('index');
    }

    public function login_validate(){

    }

    public function register_user(){
        return view('reg-form');
    }

    public function add_user(Request $request){
       
        $data = array(
            'user_id'        => 'E003',
            'name'           => $request->input('name'),
            'email'          => $request->input('email'),
            'role_id'        => 'Dev1',//$request->input(''),
            //'login_id'       => $request->input(''),
            'login_password' => $request->input('password'),
            'status'        => 'Active',

            //'phone'     => $request->,
            // 'userid'      => Auth::user()->userid ?? '',
            // 'adddate'     => Carbon::now()->format('m-d-Y')
          );
    
          User::AddUser($data);
          

    }
}
