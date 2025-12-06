<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminController extends Controller
{
    function login(Request $request){
        $request -> validate([
            'name' => "required",
            'password' => "required"
        ]);
        
        $admin = Admin::where([
            ["name" , $request -> name],
            ["password", $request -> password]
        ])->first();
        if(!$admin){
            $request -> validate([
                'user' => "required",
            ], [
                'user.required' => "User does not exist!!",
            ]);
        }
        Session::put('admin', $admin);
        return redirect('dashbord');
    }

    function dashbord(){
        $admin = Session::get('admin');
        if($admin){
            return view("admin.dashboard", ["name" => $admin -> name]);
        }else{
            return redirect('admin-login');
        }
        
    }
}
