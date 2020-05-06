<?php

namespace App\Http\Controllers;

use App\BidangProfesi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BidangProfesiController extends Controller
{

    // public function index()
    // {
    //     $bidangProfesi = BidangProfesi::all()->toArray();
    //     return array_reverse($bidangProfesi);
    // }


    // public function add(Request $request)
    // {
    //     $bidangProfesi = new BidangProfesi([
    //         'nama' => $request->input('nama')
    //     ]);
    //     $bidangProfesi->save();

    //     return response()->json('The book successfully added');
    // }


    // public function store(Request $request)
    // {
    //     //
    // }

    // public function show(BidangProfesi $bidangProfesi)
    // {
    //     //
    // }


    // public function edit($id)
    // {
    //     $bidangProfesi = BidangProfesi::find($id);
    //     return response()->json($bidangProfesi);
    // }


    // public function update($id, Request $request)
    // {
    //     $bidangProfesi = BidangProfesi::find($id);
    //     $bidangProfesi->update($request->all());

    //     return response()->json('The book successfully updated');
    // }


    // public function delete($id)
    // {
    //     $bidangProfesi = BidangProfesi::find($id);
    //     $bidangProfesi->delete();

    //     return response()->json('The book successfully deleted');
    // }





    public function all()
    {
        return BidangProfesi::all();
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
    public function update($id, Request $request)
    {
        $bidangProfesi = BidangProfesi::find($id);
        $bidangProfesi->update($request->all());
        return $bidangProfesi;
    }

    // menghapus data
    public function delete($id)
    {
        $bidangProfesi = BidangProfesi::find($id);
        $bidangProfesi->delete();
        return 204;
    }

}
