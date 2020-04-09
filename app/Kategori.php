<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function transaksi()
    {
    	//SAYA MEMILIKI ANAK DI MODEL TRANSAKSI
    	return $this->hasOne("App\Transaksi");
    }
}
