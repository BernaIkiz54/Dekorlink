<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urun;
use App\Models\Kategori;

class UrunController extends Controller
{
    public function index($slug_Urunadi){
        $urun=Urun::where('slug',$slug_Urunadi)->firstOrFail();
        $kategori=Kategori::where('id',$urun->kategori_id)->firstOrFail();
        return view('urun',compact('urun','kategori'));
    }
}
