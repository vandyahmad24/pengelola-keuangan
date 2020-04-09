<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Session;

class KategoriController extends Controller
{
	public function index()
	{
		$kategori =Kategori::orderBy('id','desc')->paginate(10);
		return view('kategori/index', compact('kategori'));
	}
	public function add()
	{
		return view('kategori/add');
	}
	public function store(Request $request)
	{
		$this->validate($request,[
			'nama_kategori'  => 'required|string|max:30',
			'deskripsi' => 'required|string|',
			'kategori' => 'required|string|',
		]);

		$kategori = new Kategori;
		$kategori->nama_kategori = $request->nama_kategori;
		$kategori->deskripsi = $request->deskripsi;
		$kategori->kategori = $request->kategori;
		$kategori->save();
		Session::flash("success","Data Anda telah tersimpan");
		return redirect('/kategori');
	}
	public function destroy($id)
	{
		$kategori = Kategori::find($id);
		$kategori->delete();
		Session::flash("delete","Data Anda telah dihapus");
		return redirect('/kategori');
	}
	public function edit($id)
	{
		$kategori = Kategori::find($id);
		return view('kategori/edit',compact('kategori'));   
	}
	public function update(Request $request,$id)
	{
		$kategori = Kategori::find($id);
        $kategori->nama_kategori=$request->nama_kategori;
        $kategori->deskripsi=$request->deskripsi;
        $kategori->kategori=$request->kategori; 
        $kategori->save();
        Session::flash("success","Data Anda telah teredit");
        return redirect('/kategori');
	}
}
