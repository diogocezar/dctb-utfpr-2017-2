<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class DashboardController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.dashboard');
    }
}
