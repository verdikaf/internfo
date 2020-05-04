<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\bidangProfesi;

class BidangProfesiController extends Controller
{
     // mengambil semua data
     public function all()
     {
         return bidangProfesi::all();
     }
 
     // mengambil data by id
     public function show($id)
     {
         return BidangProfesi::find($id);
     }
 
     // menambah data
     public function create(Request $request)
     {
         return BidangProfesi::create($request->all());
     }
 
     // mengubah data
     public function update($id, Request $request)
     {
         $person = bidangProfesi::find($id);
         $person->update($request->all());
         return $person;
     }
 
     // menghapus data
     public function delete($id)
     {
         $person = bidangProfesi::find($id);
         $person->delete();
         return 204;
     }
}
