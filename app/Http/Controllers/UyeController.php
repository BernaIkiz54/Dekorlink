<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\models\Uyeler;

class UyeController extends Controller
{
    public function kaydol_form()
    {
        return view('uye.kaydol');
    }
    public function giris_form()
    {
        return view('uye.oturumac');
    }

    public function giris()
    {
        Uyeler::table('uyeler', function ($table)  {

        $this->validate(request(),[
            'email'=>'required|email',
            'sifre'=>'required'
        ]);
        if(auth()->attempt(['email'=>request('email'),'password'=>request('sifre')],request()->has('benihatırla')))
        {
            request()->session()->regenerate();
            return redirect()->intended('/');
        }
        else{
            $errors=['email'=>'Hatalı giriş'];
            return back()->withErrors($errors);
          }
        });
    }

    public function kaydol()
    {
        $uye = Uyeler::create([
            'ad_soyad' => request('adsoyad'),
            'email' => request('email'),
            'TelNo' => request('telefon'),
            'sifre' => Hash::make(request('sifre')),
            'aktivasyon_anahtari' => Str::random(60),
            'aktif_mi' => 0

        ]);
        auth()->login($uye);
        return redirect()->route('anasayfa');
    }
}
