@extends('admin-lte/app')
@section('title','Data Produk')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Responsive Hover Table</h3>

				<div class="card-tools">
					<div class="input-group input-group-sm" style="width: 150px;">
						<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

						<div class="input-group-append">
							<button type="submit" class="btn btn-default">
								<i class="fas fa-search"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.card-header -->
			<div class="card-body table-responsive p-0">
				<table class="table table-hover text-nowrap">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Harga</th>
							<th>Jenis</th>
							<th>Berat</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($master_data as $data)
						<tr>
							<td>{{ $data->nama }}</td>
							<td>{{ $data->harga }}</td>
							<td>{{ $data->jenis }}</td>
							<td>{{ $data->berat }}</td>
							<td>{{ $data->stok->jumlah }}</td>
						</tr>
						@endforeach	
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
	</div>
</div>


<!-- <ul>
	@foreach ($master_data as $data)
	<li>Nama : {{ $data->nama }}</li>
	<li>Harga : {{ $data->harga }}</li>
	<li>Jenis : {{ $data->jenis }}</li>
	<li>Berat : {{ $data->berat }} Ons</li>
	<li>Jumlah : {{ $data->stok->jumlah }}</li>
	@endforeach
</ul> -->
@endsection