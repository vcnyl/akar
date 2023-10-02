<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ImageStoreRequest;
use Illuminate\Support\Facades\Validator;

class KaryaController extends Controller
{
    public function input_karya (Request $request){
        $karya=new Karya();
        $karya->deskripsi=$request->deskripsi;
        $karya->dokumentasi = $request->file('dokumentasi')->store('dokumentasi');
        $karya->link_karya=$request->link_karya;
        $karya->nama=$request->nama;
        $karya->bidang=$request->bidang;
        $karya->nim=$request->nim;
        $karya->save();

        return response()->json($karya, 200);
    }

    public function getall_karya(){
        $karya = Karya::all();
        return response()->json($karya, 200);
    }
    function search($nama)
    {
        return Karya::where("nama","like","%".$nama."%")->get();
    }
}
