<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class EmployeeController extends Controller
{
    public function construct(){

    }

    public function index(){
        return view('main',[
            'page' => 'login'
        ]);
    }

    public function add_role(Request $request){

        $data = array(
            'role_id'        => $request->input('role_id'),
            'name'           => $request->input('role_name'),
          );
    
          Role::AddRole($data);
          
          return view('main',[
            'page' => 'login'
        ]);
    }

    public function role_form(){
        return view('main',[
            'page' => 'role_form'
        ]);
    }

    public function login_validate(){

    }

    public function register_form(){
        
        return view('main',[
            'page' => 'reg_form'
        ]);
    }

    public function add_user(Request $request){
       
        $data = array(
            'user_id'        => $request->input('name').rand(pow(10, 8 - 1), pow(10, 3) -1),
            'name'           => $request->input('name'),
            'email'          => $request->input('email'),
            'role'        => $request->input('role'),
            //'role_id'       => $request->input(''),
            'password' => $request->input('password'),
            'status'        => 'Active',

            //'phone'     => $request->,
            // 'userid'      => Auth::user()->userid ?? '',
            // 'adddate'     => Carbon::now()->format('m-d-Y')
          );
    
          User::AddUser($data);
          return view('main',[
            'page' => 'login'
        ]);       
    }
}
