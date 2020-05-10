<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PemagangController extends Controller
{
    
    public function index(){
        return view('pemagang_index');
    }

    public function detail(){
        return view('pemagang_detail');
    }

    public function requirements(){
        return view('pemagang_requirements');
    }
    
    public function notification(){
        return view('pemagang_notifikasi');
    }
    public function notificationDetail(){
        return view('pemagang_notifikasi_detail');
    }
    public function notificationRejectDetail(){
        return view('pemagang_notifikasi_detail_tolak');
    }
    
}
