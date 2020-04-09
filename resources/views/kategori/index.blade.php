@extends('layouts/admin')

@section('title', 'Halaman Kategori')
@section('judul', 'Tampilkan Semua Kategori')
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
		<div class="panel">
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Deskripsi</th>
							<th>Kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($kategori as $k)
						<tr>
							
							<td>{{$loop->iteration}}</td>
							<td>{{$k->nama_kategori}}</td>
							<td>{{$k->deskripsi}}</td>
							<td class="@if($k->kategori == 'penggeluaran')  text-danger @else text-success @endif	">{{$k->kategori}}</td>
							<td><a href="/kategori/edit/{{$k->id}}" class="btn btn-warning">Edit</a>
								<a href="/kategori/delete/{{$k->id}}" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		{{ $kategori->links() }}
		<!-- END BASIC TABLE -->
	</div>
</div>

@endsection