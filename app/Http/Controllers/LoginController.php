<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function loginAction(Request $request) {
        $method = $request->method();
        if($method == "POST") {
            echo $request->input('email');
            echo $request->input('password');

            if ($request->input('hak_akses') == 1) {
                $result = DB::selectOne("SELECT id, nama, email FROM pelamar WHERE email=? AND password=?", [
                    $request->input('email'),
                    $request->input('password')
                ]);
            } elseif ($request->input('hak_akses') == 2) {
                $result = DB::selectOne("SELECT id, nama, email FROM perusahaan WHERE email=? AND password=?", [
                    $request->input('email'),
                    $request->input('password')
                ]);
            } elseif ($request->input('hak_akses') == 3) {
                $result = DB::selectOne("SELECT id, nama, email FROM admin WHERE email=? AND password=?", [
                    $request->input('email'),
                    $request->input('password')
                ]);
            }

            if($result != null) {
                $request->session()->put('s_id', $result->id);
                $request->session()->put('s_nama', $result->nama);
                $request->session()->put('s_email', $result->email);

                echo $request->session()->put('s_id', $result->id);

                if ($request->input('hak_akses') == 1) {
                    return redirect('/dashboard/pemagang');
                } elseif ($request->input('hak_akses') == 2) {
                    return redirect('/dashboard/perusahaan');
                } elseif ($request->input('hak_akses') == 3) {
                    return redirect('/dashboard/admin');
                }
            }else {
                // return redirect('/login');
            }
        }else {
            return redirect('/login');
        }
    }

    public function signup(){
        return view('signup');
    }

    public function signupAction(Request $request){
        $method = $request->method();
		if ($method == "POST") {
			$directory = 'assets/images/profil';
            $file = $request->file('file');
            echo $file;
			$file->move($directory, $file->getClientOriginalName());

			DB::insert("INSERT INTO pelamar (foto,nama,tempat_lahir,tgl_lahir,alamat,telp,email,password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", 
			[
				$directory."/".$file->getClientOriginalName(),
				$request->input('nama'),
				$request->input('tempat_lahir'),
                $request->input('tgl_lahir'),
                $request->input('alamat'),
                $request->input('telp'),
                $request->input('email'),
                $request->input('password')
			]);
			return redirect('/login');
		}else {
			return redirect('/login');
        }
    }
    
    public function signupPerusahaan(){
        return view('signup_perusahaan');
    }
}
