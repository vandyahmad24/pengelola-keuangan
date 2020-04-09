<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {

    	$kategori_pemasukan = DB::table('transaksis')->where('kategori','pemasukan')->orderBy('id','desc')->get();
    	
    	$total_pemasukan = [];
    	foreach ($kategori_pemasukan as $key => $value) {
    		array_push($total_pemasukan,$value->jumlah_transaksi);
    	}
    	$deskripsi = [];
    	foreach ($kategori_pemasukan as $key => $value) {
    		array_push($deskripsi,$value->nama_transaksi);
    	}

    	
    	$kategori_pengeluaran = DB::table('transaksis')->where('kategori','penggeluaran')->orderBy('id','desc')->get();
    	// dd($kategori_pengeluaran);
    	$total_pengeluaran = [];
    	foreach ($kategori_pengeluaran as $key => $value) {
    		array_push($total_pengeluaran,$value->jumlah_transaksi);
    	}
    	// dd($total_pengeluaran);
    	$deskripsi_pengeluaran = [];
    	foreach ($kategori_pengeluaran as $key => $value) {
    		array_push($deskripsi_pengeluaran,$value->nama_transaksi);
    	}
    	


    	return view('home',compact('total_pemasukan','deskripsi','deskripsi_pengeluaran','total_pengeluaran'));
    }
}
