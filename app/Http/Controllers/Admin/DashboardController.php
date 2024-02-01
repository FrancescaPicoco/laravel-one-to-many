<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DashboardData;

class DashboardController extends Controller
{
    public function index() {
        //$artItems= DashboardData::all();
        //return view('admin.dashboard',compact("artItems"));
        return view('admin.dashboard');
    }
}
