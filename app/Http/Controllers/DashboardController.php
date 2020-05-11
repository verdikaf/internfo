<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function pemagang(Request $request){
        $data['title']    = "Dashboard - internfo";
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email')
        );
        return view('dashboard_pemagang', $data);
    }

    public function admin(Request $request){
        $data['title']    = "Dashboard - internfo";
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email')
        );
        return view('dashboard_admin', $data);
    }

    public function perusahaan(Request $request){
        $data['title']    = "Dashboard - internfo";
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email')
        );
        return view('dashboard_perusahaan', $data);
    }

    public function signOut(Request $request) {
        $request->session()->flush();
        return redirect('/');
   }
}
