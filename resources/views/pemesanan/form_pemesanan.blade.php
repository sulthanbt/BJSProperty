@extends("layout.mainlayout")
@section("page_title","Pemesanan")
@section("title","Data Pemesanan")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
<li class="breadcrumb-item"><a href="/pemesanan">Pemesanan</a></li>
<li class="breadcrumb-item active">Tambah Pemesanan</li> 
@endsection

@section('custom_css')  
<!-- DataTables -->
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
 <!-- Default box -->
 <div class="card">    
    <div class="card-header">
        <h3 class="card-title">Tambah Pemesanan</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
    <!-- <h1>Tambah Data Temuan</h1> -->
      <form action="/pemesanan/tambah_pemesanan" method="post" enctype="multipart/form-data">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
        Nama : <input type="text" class="form-control" name="nama"><br>
        Tempat & Tgl Lahir : <input type="date" class="form-control" name="ttl"><br>
        Pekerjaan : <input type="text" class="form-control" name="pekerjaan"><br>
        Alamat Lengkap : <input type="text" class="form-control" name="alamat"><br>
        Telepon : <input type="text" class="form-control" name="telp"><br>
        HP : <input type="text" class="form-control" name="hp"><br>
        Nomor Kavling : <input type="text" class="form-control" name="no_kavling"><br>
        Type Rumah : <input type="text" class="form-control" name="type"><br>
        Harga Standart : <input type="text" class="form-control" name="harga_standart"><br>
        Harga Kelebihan Tanah : <input type="text" class="form-control" name="harga_kelebihan_tanah"><br>
        Booking Fee : <input type="text" class="form-control" name="booking_fee"><br>
        Uang Muka : <input type="text" class="form-control" name="uang_muka"><br>
        KPR : <input type="text" class="form-control" name="kpr"><br>
        Biaya Admin : <input type="text" class="form-control" name="biaya_admin"><br>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>

    </div>
    <!-- /.card-body -->

    <div class="card-footer">

    </div>
    <!-- /.card-footer-->
  <!-- </div> -->
  <!-- </div> -->
  <!-- /.card -->
@endsection

@section('custom_script')
<!-- DataTables -->
<script src="{{asset ('asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>

@endsection