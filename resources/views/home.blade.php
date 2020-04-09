@extends('layouts/admin')

@section('title', 'Halaman Home')
@section('judul', 'Grafik Saldo ')
@section('content')
<div class="row">
	<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"> </h3>
								</div>
								<div class="panel-body">
									
										<canvas id="myChart"></canvas>
										<canvas id="pengeluaran"></canvas>
								
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
</div>

<script type="text/javascript">
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: {!! json_encode($deskripsi) !!},
				datasets: [{
					label: 'Grafik Total Pemasukan',
					backgroundColor: 'rgb(0, 0, 255)',
		            borderColor: 'rgb(0, 0, 250)',
		            data:{!! json_encode($total_pemasukan) !!}
		        }]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

		var ctx = document.getElementById("pengeluaran").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: {!! json_encode($deskripsi_pengeluaran) !!},
				datasets: [{
					label: 'Grafik Total Pengeluaran',
					backgroundColor: 'rgb(255, 0, 0)',
		            borderColor: 'rgb(255, 99, 132)',
		            data:{!! json_encode($total_pemasukan) !!}
		        }]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
</script>

@endsection