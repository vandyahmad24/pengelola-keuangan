@extends('layouts/admin')

@section('title', 'Halaman Tambah Kategori')
@section('judul', 'Tambah Kategori')
@section('content')
<div class="row">
	<div class="col-md-12">
		<!-- BASIC TABLE -->
		<div class="panel">
			<div class="panel-body">
				<form action="/kategori/add/store" method="post" autocomplete="off" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori" required="">
					<br>
					<textarea class="form-control" placeholder="Isikan deskripsi Kategori" name="deskripsi" rows="4" required=""></textarea>
					<br>
					<select class="form-control" name="kategori" required>
						<option value="">Pilih Kategori</option>
						<option value="pemasukan">Pemasukan</option>
						<option value="penggeluaran">Penggeluaran</option>
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