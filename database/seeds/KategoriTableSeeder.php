<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('kategori')->insertGetId(['kategori_adi'=>'Anasayfa','slug'=>'Anasayfa']);
        $id=DB::table('kategori')->insertGetId(['kategori_adi'=>'Mobiya','slug'=>'Mobilya']);
        DB::table('kategori')->insert(['kategori_adi'=>'Tv Ünitesi','slug'=>'Tv Ünitesi','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Sehpa','slug'=>'Sehpa','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Kitaplık','slug'=>'Kitaplık','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Yatak Odası','slug'=>'Yatak Odası','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Oturma Odası','slug'=>'Oturma Odası','ust_id'=>$id]);
        $id=DB::table('kategori')->insertGetId(['kategori_adi'=>'Mutfak','slug'=>'Mutfak']);
        DB::table('kategori')->insert(['kategori_adi'=>'Servis Ürünleri','slug'=>'Servis Ürünleri','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Çatal Kaşık','slug'=>'Çatal Kaşık','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Yemek Takımları','slug'=>'Yemek Takımları','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Bardak ve Sürahiler','slug'=>'bardak ve Sürahiler','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Saklama Kapları','slug'=>'Saklama Kapları','ust_id'=>$id]);
        $id=DB::table('kategori')->insertGetId(['kategori_adi'=>'Ev Dekorasyon','slug'=>'Ev Dekorasyon']);
        DB::table('kategori')->insert(['kategori_adi'=>'Tablo','slug'=>'Tablo','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Saat','slug'=>'Saat','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Dekoratif Obje','slug'=>'Dekoratif Obje','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Kapı Önü Aksesuarları','slug'=>'Kapı Önü Aksesuarları','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Aynalar','slug'=>'Aynalar','ust_id'=>$id]);
        $id=DB::table('kategori')->insertGetId(['kategori_adi'=>'Aydınlatma','slug'=>'Aydınlatma']);
        DB::table('kategori')->insert(['kategori_adi'=>'Sarkıtlar','slug'=>'Sarkıtlar','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Avizeler','slug'=>'Avizeler','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Ampüller ve Led Ürünleri','slug'=>'Ampüller ve Led Ürünleri','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Spot Lambaları','slug'=>'Ampüller ve Led Ürünleri','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Led Aydınlatmalar','slug'=>'Ampüller ve Led Ürünleri','ust_id'=>$id]);
    }
}
