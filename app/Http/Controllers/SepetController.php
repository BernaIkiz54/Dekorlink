<?php

namespace App\Http\Controllers;
use App\models\Urun;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class SepetController extends Controller
{
    public function index(){
        return view('sepet');
    }
    public function ekle(){
        $urun=Urun::find(request('id'));
        Cart::add($urun->id,$urun->urun_adi,1,$urun->fiyat,['slug'=>$urun->slug]);

        return redirect()->route('sepet')
            ->with('mesaj_tur','success')
            ->with('mesaj','Ürün Sepete Eklendi.');
    }
}
