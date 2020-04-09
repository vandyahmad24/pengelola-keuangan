@extends('layouts/admin')

@section('title', 'Halaman Transaksi')
@section('judul', 'Tampilkan Semua Transaksi')
@section('content')
<div class="row">
	<div class="col-md-12">
		<!-- BASIC TABLE -->
		<div class="white-box">
			<h2 class="header-title">  @yield('title')</h2>
			<div class="table-responsive">
				@if(Session::has("success"))
				<div class="alert alert-success">
					{{Session::get('success')}}
				</div>
				@endif
				@if(Session::has("delete"))
				<div class="alert alert-danger">
					{{Session::get('delete')}}
				</div>
			</div>
		</div>
		@endif
		<div class="row">
			<div class="container">
				<h4>Filter Transaksi</h4>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="col-md-3">
					<form  action="/transaksi/filter/" method="post">
						@csrf
						start : <input type="date" name="start" id="start" class="form-control" required>
						end : <input type="date" name="end" id="end" class="form-control" required> <br>
						<button class="btn btn-success" type="submit" id="filter">Apply Filter</button>
					</form>
				</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-body">
				<table class="table" id="indextabel">
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
						@foreach($transaksi as $t)
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
							<td colspan="5" class="text-right">total uang bulan {{$namabulan}}</td>
							<td colspan="2">Rp {{number_format($total_uang,0,"",".")}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--  -->
		<!-- END BASIC TABLE -->
	</div>
</div>
	@endsection