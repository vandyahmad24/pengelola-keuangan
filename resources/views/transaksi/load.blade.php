@extends('layouts/admin')

@section('title', 'Halaman Transaksi')
@section('judul', 'Tampilkan Semua Transaksi')
@section('content')
	<table class="table" id="loadtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Deskripsi</th>
							<th>Kategori</th>
							<th>Nama Kategori</th>
							<th>Jumlah</th>
							<th>Dibuat Tanggal</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($coba as $t)
						<tr>
							
							<td>{{$loop->iteration}}</td>
							<td>{{$t->nama_transaksi}}</td>
							<td>{{$t->deskripsi}}</td>
							<td class="@if($t->Kategori->kategori == 'penggeluaran')  text-danger @else text-success @endif	">{{$t->Kategori->kategori}}</td>
							<td>{{$t->Kategori->nama_kategori}}</td>
							<td>Rp {{number_format($t->jumlah_transaksi,0,"",".")}}</td>
							<td>{{$t->updated_at}}</td>
							<td><a href="/transaksi/edit/{{$t->id}}" class="btn btn-warning">Edit</a>
								<a href="/transaksi/delete/{{$t->id}}" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						@endforeach
						<tr>
							<td colspan="5" class="text-right">total uang dari tanggal {{$from}} sampai {{$to}}</td>
							<td colspan="2">Rp {{number_format($total_uang,0,"",".")}}</td>
						</tr>
					</tbody>
				</table>
				@endsection