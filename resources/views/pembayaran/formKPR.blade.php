@extends("layout.mainlayout")

@section("page_title","BJSProperty")

@section("title","Tambah customer")

@section("custom_css")

@endsection

@section("breadcrumb")
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item"><a href="/toko">KPR</a></li>
<li class="breadcrumb-item active">Tambah Toko</li>
@endsection

@section("content")
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Tambah Data Toko</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
    <form method="post" action="/toko/tambahToko" enctype="multipart/form-data">
      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      <div class="container">
        <div class="form-group">
          <label for="barcode">ID Cust</label>
          <input type="text" name="id" class="form-control">
        </div>
        <div class="form-group">
          <label for="nama">Nama Cust</label>
          <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
          <label for="latitude">KTP</label>
          <input type="text" name="ktp" class="form-control" id="lat" value="">
        </div>
        <div class="form-group">
          <label for="longitude">KK</label>
          <input type="text" name="kk" class="form-control" id="lon" value="">
        </div>
        <div class="form-group">
          <label for="accuracy">DP (min10%)</label>
          <input type="text" name="dp" class="form-control" id="acc" value="">
        </div>
        <div class="form-group">
          <label for="accuracy">Pembayaran</label>
          <input type="text" name="pembayaran" class="form-control" id="acc" value="">
        </div>
        <div class="form-group">
          <label for="accuracy">sisa Bayar</label>
          <input type="text" name="sisa" class="form-control" id="acc" value="">
        </div>
        <div class="col-md-12 text-center">
            <br/>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
    <!-- <button class="btn btn-primary" onclick="getLocation()">Geolocation</button>
    <p id="demo"></p> -->
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection

<!-- @section("scripts")
<script>
var x = document.getElementById("demo")
// var x = document.getElementById("lat");
// var y = document.getElementById("lon");
// var z = document.getElementById("accuracy");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  document.getElementById("lat").value = position.coords.latitude;
  document.getElementById("lon").value = position.coords.longitude;
  document.getElementById("acc").value = position.coords.accuracy;
}
</script>
@endsection -->