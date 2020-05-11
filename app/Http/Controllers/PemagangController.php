<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PemagangController extends Controller
{
    
    public function index(Request $request){
        $data['lowongan'] = DB::table('lowongan')
                            ->join('bidang_profesi', 'lowongan.bidang_profesi_id', '=', 'bidang_profesi.id')
                            ->join('perusahaan', 'lowongan.perusahaan_id', '=', 'perusahaan.id')
                            ->select(DB::raw('lowongan.*, bidang_profesi.nama as bid_profesi, 
                                perusahaan.foto AS foto, perusahaan.nama AS nama_perusahaan'))->get();
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        return view('pemagang_index', $data);
    }

    public function detail(Request $request, $id){
        $data['lowongan'] = DB::table('lowongan')
                            ->join('bidang_profesi', 'lowongan.bidang_profesi_id', '=', 'bidang_profesi.id')
                            ->join('perusahaan', 'lowongan.perusahaan_id', '=', 'perusahaan.id')
                            ->select(DB::raw('lowongan.*, bidang_profesi.nama as bid_profesi, 
                                perusahaan.foto AS foto, perusahaan.nama AS nama_perusahaan'))
                            ->where('lowongan.id',$id)->get();
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        return view('pemagang_detail', $data);
    }

    public function applyAdd(Request $request){
        $apply = DB::selectOne("SELECT * FROM data_apply WHERE pelamar_id=? AND lowongan_id=?", [
            $request->session()->get('s_id'),
            $request->input('id_lowongan')
        ]);
        if($apply == null) {
            $tgl = date('Y-m-d');
            DB::insert("INSERT INTO data_apply (tanggal, status, pelamar, perusahaan, pelamar_id, lowongan_id) VALUES ( ?, 'menunggu', ?, ?, ?, ?)", [
                $tgl,
                $request->input('pelamar'),
                $request->input('perusahaan'),
                $request->session()->get('s_id'),
                $request->input('id_lowongan')
            ]);
            return redirect('/pemagang/requirements/'.$request->input('id_lowongan'));
        } else {
            return redirect('/pemagang/requirements/'.$request->input('id_lowongan'));
        }
    }

    public function requirements(Request $request, $id){
        $data['lowongan'] = DB::table('lowongan')
                            ->join('bidang_profesi', 'lowongan.bidang_profesi_id', '=', 'bidang_profesi.id')
                            ->join('perusahaan', 'lowongan.perusahaan_id', '=', 'perusahaan.id')
                            ->select(DB::raw('lowongan.*, bidang_profesi.nama as bid_profesi, 
                                perusahaan.foto AS foto, perusahaan.nama AS nama_perusahaan'))
                            ->where('lowongan.id',$id)->get();
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        $data['data_apply'] = DB::table('data_apply')
                            ->select(DB::raw('id'))
                            ->where([
                                'lowongan_id' => $id,
                                'pelamar_id' => $request->session()->get('s_id')
                                ])
                            ->get();
        echo $data['data_apply'];
        return view('pemagang_requirements', $data);
    }

    public function requirementsAdd(Request $request){
        $method = $request->method();
        if($method == "POST") {
            $id_data_apply = $request->input('id_data_apply');
            echo $id_data_apply;
            $resume = $request->file('berkas');
            $resumeName = $resume->getClientOriginalName();
            $resume->move(public_path('/assets/berkas'), $resumeName);
            DB::insert("INSERT INTO upload_berkas (nama, file_berkas, data_apply_id) VALUES ('resume', ?, ?)", [
                '/assets/berkas/' . $resumeName,
                $id_data_apply
            ]);

            $file = $request->file('portofolio');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('/assets/berkas'), $fileName);
            DB::insert("INSERT INTO upload_berkas (nama, file_berkas, data_apply_id) VALUES ('portofolio', ?, ?)", [
                '/assets/berkas/' . $fileName,
                $id_data_apply
            ]);
            return redirect('/pemagang/notification');
        } else {
            return redirect('/pemagang/requirements/'.$request->input('id_lowongan'));
        }
    }
    
    public function notification(Request $request){
        $data['data_apply'] = DB::table('data_apply')
                            ->join('lowongan', 'data_apply.lowongan_id', '=', 'lowongan.id')
                            ->select(DB::raw('data_apply.*, lowongan.job_title as job'))
                            ->where('pelamar_id', $request->session()->get('s_id'))->get();
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        return view('pemagang_notifikasi', $data);
    }

    public function notificationDetail(Request $request, $id, $status){
        $data['session']  = array(
            'id'       => $request->session()->get('s_id'),
            'nama'     => $request->session()->get('s_nama'),
            'email'   => $request->session()->get('s_email'),
            'foto'   => $request->session()->get('s_foto')
        );
        if ($status == "menunggu") {
            return view('pemagang_notifikasi_detail', $data);
        } elseif ($status == "terima") {
            $data['apply'] = DB::table('lowongan')
                            ->select(DB::raw('link as link_lolos'))
                            ->where('id', $id)->get();
            return view('pemagang_notifikasi_detail_terima', $data);
        } else {
            return view('pemagang_notifikasi_detail_tolak', $data);
        }
    }
    
}
