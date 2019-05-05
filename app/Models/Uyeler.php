<?php

namespace App\models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Uyeler extends Authenticatable
{
    use SoftDeletes;
    protected $table="uyeler";
    protected $fillable = [
        'ad_soyad', 'sifre','email', 'TelNo','aktivasyon_anahtari','aktif_mi'
    ];

    protected $hidden = [
       'uyeID','sifre', 'aktivasyon_anahtari'
    ];
    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT='silinme_tarihi';

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getAuthPassword(){
        return $this->sifre;
    }
}
