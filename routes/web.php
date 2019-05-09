<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AnasayfaController@index')->name('anasayfa');
Route::get('/kategori/{slug_kategoriadi}', 'KategoriController@index')->name('kategori');
Route::get('/urun/{slug_Urunadi}', 'UrunController@index')->name('urun');
Route::post('/ara','UrunController@ara')->name('urun_ara');
Route::get('/ara','UrunController@ara')->name('urun_ara');

Route::group(['prefix'=>'sepet'],function (){
    Route::get('/', 'SepetController@index')->name('sepet');
    Route::post('/ekle','SepetController@ekle')->name('sepet.ekle');
});

Route::group(['middleware'=>'auth'],function (){
    Route::get('/odeme', 'OdemeController@index')->name('odeme');
    Route::get('/siparisler', 'SiparisController@index')->name('siparisler');
    Route::get('/siparisler/{id}', 'SiparisController@detay')->name('siparis');
});
Route::group(['prefix'=>'kullanici'],function(){
    Route::get ('/oturumac','UyeController@giris_form')->name('kullanici.oturumac');
    Route::post('/oturumac','UyeController@giris');
    Route::get ('/kaydol','UyeController@kaydol_form')->name('kullanici.kaydol');
    Route::post ('/kaydol','UyeController@kaydol');
    Route::post('/oturumukapat','UyeController@oturumuKapat')->name('kullanici.oturumukapat');
});