<?php

namespace App\Http\Controllers;

use App\BidangProfesi;
use App\Pelamar;
use App\Perusahaan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        
        // mengambil semua data
        public function all()
        {
            return BidangProfesi::all();
            $bidangProfesi = BidangProfesi::all()->toArray();
            return array_reverse($bidangProfesi);
        }
    
        // mengambil data by id
        public function show($id)
        {
            return BidangProfesi::find($id);
        }
    
        // menambah data
        public function store(Request $request)
        {
            return BidangProfesi::create($request->all());
        }
    
        // mengubah data
        // public function update($id, Request $request)
        // {
        //     $person = BidangProfesi::find($id);
        //     $person->update($request->all());
        //     return $person;
        // }
    
        // menghapus data
        // public function delete($id)
        // {
        //     $person = BidangProfesi::find($id);
        //     $person->delete();
        //     return 204;
        // }
    


    public function pelamar()
    {
        return Pelamar::all();
        $pemagang = Pelamar::all()->toArray();
        return array_reverse($pemagang);
    }
    public function index_perusahaan()
    {
        return Perusahaan::all();
        $perusahaan = Perusahaan::all()->toArray();
        return array_reverse($perusahaan);
    }

    public function index()
    {
        return BidangProfesi::all();
        $bidangProfesi = BidangProfesi::all()->toArray();
        return array_reverse($bidangProfesi);

    }


    public function add(Request $request)
    {
        $bidangProfesi = new BidangProfesi([
            'nama' => $request->input('nama')
        ]);
        $bidangProfesi->save();

        return response()->json('The book successfully added');
    }

    public function edit($id)
    {
        $bidangProfesi = BidangProfesi::find($id);
        return response()->json($bidangProfesi);
    }


    public function update($id, Request $request)
    {
        $bidangProfesi = BidangProfesi::find($id);
        $bidangProfesi->update($request->all());

        return response()->json('The book successfully updated');
    }


    public function delete($id)
    {
        $bidangProfesi = BidangProfesi::find($id);
        $bidangProfesi->delete();

        return response()->json('The book successfully deleted');
    }

    public function signOut(Request $request) {
        $request->session()->flush();
        return redirect('/login');
   }



}
