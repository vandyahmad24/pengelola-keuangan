<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use Carbon\Carbon;
use Session;
use App\Kategori;

class TransaksiController extends Controller
{
    public function index()
    {
         $date = Carbon::now();
         $namabulan = $date->format('F');
         $pemasukan = Transaksi::where('kategori','pemasukan')->whereMonth('updated_at', $date->month)->sum('jumlah_transaksi');
         $penggeluaran = Transaksi::where('kategori','penggeluaran')->whereMonth('updated_at', $date->month)->sum('jumlah_transaksi');
         $total_uang = $pemasukan-$penggeluaran;
         $transaksi = Transaksi::whereMonth('updated_at', $date->month)->get();
         return view('transaksi/index',compact('transaksi','total_uang','namabulan'));
     }
     public function add()
     {
       $kategori = Kategori::all();
       return view('transaksi/add',compact('kategori'));
   }
   public function idkategori($id)
   {
    $pilihkategori = Kategori::where('kategori',$id)->get();
    return response()->json($pilihkategori);
    }
    public function store(Request $request)
    {
       $transaksi =  new Transaksi;
       $transaksi->nama_transaksi = $request->nama_transaksi;
       $transaksi->deskripsi = $request->deskripsi;
       $transaksi->kategori = $request->kategori;
       $transaksi->kategori_id = $request->kategori_id;
       $transaksi->jumlah_transaksi = $request->jumlah_transaksi;
       $transaksi->save();
       Session::flash("success","Data Anda telah tersimpan");
       return redirect('/transaksi');
    }
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        Session::flash("delete","Data Anda telah dihapus");
        return redirect('/transaksi');
    }
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi/edit',compact('transaksi'));   
    }
    public function update(Request $request, $id)
    {
       $transaksi =  Transaksi::find($id);
       $transaksi->nama_transaksi = $request->nama_transaksi;
       $transaksi->deskripsi = $request->deskripsi;
       $transaksi->kategori = $request->kategori;
       $transaksi->kategori_id = $request->kategori_id;
       $transaksi->jumlah_transaksi = $request->jumlah_transaksi;
       $transaksi->save();
       Session::flash("success","Data Anda telah tersimpan");
       return redirect('/transaksi'); 
    }
    public function filter(Request $request)
    {
        $from = $request->start;
        $to = $request->end;

        $coba = Transaksi::whereBetween('updated_at', [$from, $to])->get();
        $pemasukan = $coba->where('kategori','pemasukan')->sum('jumlah_transaksi');
        $penggeluaran = $coba->where('kategori','penggeluaran')->sum('jumlah_transaksi');
        $total_uang = $pemasukan-$penggeluaran;
        if (count($coba) > 0) {

            return view('transaksi/load',compact('coba','from','to','total_uang'));   
        } else{
            dd('kosong');
        }
        
    }
}