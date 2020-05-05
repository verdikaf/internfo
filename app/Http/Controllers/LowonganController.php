<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LowonganController extends Controller
{
    
    public function index(Request $request){
        $data['lowongan'] = DB::table('lowongan')->get();
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        return view('lowongan_index', $data);
    }

    public function add(Request $request){
        $data['bid_profesi'] = DB::table('bidang_profesi')->get();
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        return view('lowongan_add', $data);
    }

    public function addProses(Request $request){
        $method = $request->method();
        if($method == "POST") {

            DB::insert("INSERT INTO lowongan (job_title, deskripsi, lokasi, perusahaan_id, bidang_profesi_id) VALUES ( ?, ?, ?, ?, ?)", [
                $request->input('job_title'),
                $request->input('deskripsi'),
                $request->input('lokasi'),
                $request->session()->get('s_id'),
                $request->input('bidang_profesi_id')
            ]);
            return redirect('/perusahaan/lowongan');
        } else {
            return redirect('/perusahaan/lowongan/add');
        }
    }

    public function detail(Request $request, $id){
        $data['lowongan'] = DB::table('lowongan')
                            ->join('bidang_profesi', 'lowongan.bidang_profesi_id', '=', 'bidang_profesi.id')
                            ->join('perusahaan', 'lowongan.perusahaan_id', '=', 'perusahaan.id')
                            ->select(DB::raw('lowongan.*, bidang_profesi.nama as bid_profesi, 
                                perusahaan.foto AS foto'))
                            ->where('lowongan.id',$id)->get();
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        return view('lowongan_detail', $data);
    }
    
    public function pendaftar(Request $request){
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        return view('lowongan_pendaftar', $data);
    }
    public function pendaftarDetail(Request $request){
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        return view('lowongan_data_apply', $data);
    }
    public function pendaftarLolos(){
        return view('lowongan_pendaftar_lolos');
    }
    
}
