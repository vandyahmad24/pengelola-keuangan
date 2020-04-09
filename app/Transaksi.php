<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function Kategori()
    {
    	//saya merupakan anak dari model kategori
    	return $this->belongsTo("App\Kategori");
    }
}
