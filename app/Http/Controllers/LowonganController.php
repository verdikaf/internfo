<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LowonganController extends Controller
{
    
    public function index(){
        $lowongan = DB::table('lowongan')->get();
        return view('lowongan_index',['lowongan' => $lowongan]);
    }

    public function add(){
        return view('lowongan_add');
    }

    public function detail($id){
        $lowongan = DB::table('lowongan')->where('id',$id)->get();
        return view('lowongan_detail',['lowongan' => $lowongan]);
    }
    
    public function pendaftar(){
        return view('lowongan_pendaftar');
    }
    public function pendaftarDetail(){
        return view('lowongan_data_apply');
    }
    public function pendaftarLolos(){
        return view('lowongan_pendaftar_lolos');
    }
    
}
