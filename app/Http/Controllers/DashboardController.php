<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function pemagang(){
        return view('dashboard_pemagang');
    }
    public function perusahaan(){
        return view('dashboard_perusahaan');
    }
    public function admin(){
        return view('dashboard_admin');
    }
}
