@extends('layouts/admin')

@section('title', 'Halaman Tambah Transaksi')
@section('judul', 'Tambah Transaksi')
@section('content')
<div class="row">
	<div class="col-md-12">
		<!-- BASIC TABLE -->
		<div class="panel">
			<div class="panel-body">
				<form action="/transaksi/add/store" method="post" autocomplete="off" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="text" class="form-control" placeholder="Nama Transaksi" name="nama_transaksi" required>
					<br>
					<textarea class="form-control" placeholder="Isikan deskripsi Transaksi" name="deskripsi" rows="4" required></textarea>
					<br>
					<select class="form-control" name="kategori" name="kategori" id="carikategori" required>
						<option value="">Pilih Kategori</option>
						<option value="pemasukan">Pemasukan</option>
						<option value="penggeluaran">Penggeluaran</option>
					</select>
					<br>
					<select class="form-control" name="kategori_id" id="pilihkategori" required>
						<option value="" id="pilihkebutuhan">Pilih kebutuhan</option>
					</select>
					<br>
					<input type="number" class="form-control" placeholder="Jumlah Transaksi" name="jumlah_transaksi" required>
					<br>
					<button type="submit" class="btn btn-success" id="btncoba">Tambah Transaksi</button>
				</form>
			</div>
		</div>
		<!-- END BASIC TABLE -->
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#carikategori").change(function(){
			var kategori = $(this).val();
			$.ajax({
				type:'get',
				dataType:'json',
				url:'{{url("/transaksi/add/")}}'+'/'+kategori,
				success: function(data){
					{
						$('.daftarkategori').remove();
						data.forEach(function (item)
						{
							$('<option>').val(item.id).text(item.nama_kategori).addClass('daftarkategori').insertAfter($('#pilihkebutuhan'));
						});
					}
				}

			});
		});
	});
</script>


@endsection