<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // properti 1 dengan nama index
    public function index(){
        return view('admin.dashboard');
    }
    // properti 2 dengan nama index_frontend
    public function index_frontend(){
        return view('frontend.dashboard');
    }

    public function logout(){
        $this->middleware('guest')->except('logout');
        return view('home');
    }
}