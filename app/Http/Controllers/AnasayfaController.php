<?php

namespace App\Http\Controllers;

use App\Models\UrunDetay;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Urun;
class AnasayfaController extends Controller
{
    public function index()
    {
        $urunler_slider = UrunDetay::with('urun')->where('goster_slider', 1)->take(5)->get();
        $kategoriler = Kategori::whereRaw('ust_id is null')->get();
        $urun_gunun_firsati = Urun::Select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_gunun_firsati',1)
            ->first();
        $urunler_one_cikan = Urun::Select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_one_cikan',1)
            ->take(4)->get();
        $urunler_cok_satan = Urun::Select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_cok_satan',1)
            ->take(4)->get();
        $urunler_indirimli= Urun::Select('urun.*')
            ->join('urun_detay', 'urun_detay.urun_id', 'urun.id')
            ->where('urun_detay.goster_indirimli',1)
            ->take(4)->get();
        return view('Anasayfa', compact('kategoriler', 'urunler_slider','urun_gunun_firsati','urunler_one_cikan','urunler_cok_satan','urunler_indirimli'));
    }
}
