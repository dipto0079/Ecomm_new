<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Http\Requests;
use Session;
session_start();

class SuperAdminController extends Controller
{
    public function index(){
        $this->AdminAuthCheck();
        return view('admin.dashboard');
    }
    public function logout(){

        Session::flush();
        return redirect('/admin');
    }
    public function AdminAuthCheck(){
        $admin_id=Session::get('admin_id');
        if ($admin_id){
            return;
        }else{
            return redirect("/admin")->send();
        }
    }
}
