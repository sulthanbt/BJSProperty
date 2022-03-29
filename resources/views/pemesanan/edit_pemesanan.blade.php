@extends("layout.mainlayout")
@section("page_title","Pemesanan")
@section("title","Data Pemesanan")

@section('breadcrumb')
<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
<li class="breadcrumb-item"><a href="/opd">Pemesanan</a></li>
<li class="breadcrumb-item active">Update Pemesanan</li>
@endsection

@section('content')

<!-- Default box -->
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Edit Pemesanan</h3>

		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
				<i class="fas fa-minus"></i></button>
			<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
				<i class="fas fa-times"></i></button>
		</div>
	</div>
	<div class="card-body">

		<form action="/pemesanan/update_pemesanan" method="post" enctype="multipart/form-data">  
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
            Nama : <input type="text" class="form-control" name="nama" value="{{$pemesanan[0]->nama}}"><br>
            Tempat & Tgl Lahir : <input type="date" class="form-control" name="ttl" value="{{$pemesanan[0]->ttl}}"><br>
            Pekerjaan : <input type="text" class="form-control" name="pekerjaan" value="{{$pemesanan[0]->pekerjaan}}"><br>
            Alamat Lengkap : <input type="text" class="form-control" name="alamat" value="{{$pemesanan[0]->alamat}}"><br>
            Telepon : <input type="text" class="form-control" name="telp" value="{{$pemesanan[0]->telp}}"><br>
            HP : <input type="text" class="form-control" name="hp" value="{{$pemesanan[0]->hp}}"><br>
            Nomor Kavling : <input type="text" class="form-control" name="no_kavling" value="{{$pemesanan[0]->no_kavling}}"><br>
            Type Rumah : <input type="text" class="form-control" name="type" value="{{$pemesanan[0]->type}}"><br>
            Harga Standart : <input type="text" class="form-control" name="harga_standart" value="{{$pemesanan[0]->harga_standart}}"><br>
            Harga Kelebihan Tanah : <input type="text" class="form-control" name="harga_kelebihan_tanah" value="{{$pemesanan[0]->harga_kelebihan_tanah}}"><br>
            Booking Fee : <input type="text" class="form-control" name="booking_fee" value="{{$pemesanan[0]->booking_fee}}"><br>
            Uang Muka : <input type="text" class="form-control" name="uang_muka" value="{{$pemesanan[0]->uang_muka}}"><br>
            KPR : <input type="text" class="form-control" name="kpr" value="{{$pemesanan[0]->kpr}}"><br>
            Biaya Admin : <input type="text" class="form-control" name="biaya_admin" value="{{$pemesanan[0]->biaya_admin}}"><br>
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
	</div>
	<!-- /.card-body -->
	
	<!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection