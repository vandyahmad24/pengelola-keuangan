@extends('layouts/admin')

@section('title', 'Halaman Edit Kategori')
@section('judul', 'Edit Kategori')
@section('content')
<div class="row">
	<div class="col-md-12">
		<!-- BASIC TABLE -->
		<div class="panel">
			<div class="panel-body">
				<form action="/kategori/edit/update/{{$kategori->id}}" method="post" autocomplete="off" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="text" class="form-control" value="{{$kategori->nama_kategori}}"  name="nama_kategori" required="">
					<br>
					<textarea class="form-control" name="deskripsi" rows="4" required="">{{$kategori->deskripsi}}</textarea>
					<br>
					<select class="form-control" name="kategori" required>
					
						<option value="pemasukan" @if($kategori->kategori == 'pemasukan') selected @endif>Pemasukan</option>
						<option value="penggeluaran"  @if($kategori->kategori == 'penggeluaran') selected @endif>Penggeluaran</option>
					</select>
					<br>
					<button class="btn btn-success">Tambah Kategori</button>
				</form>
			</div>
		</div>
		<!-- END BASIC TABLE -->
	</div>
</div>

@endsection