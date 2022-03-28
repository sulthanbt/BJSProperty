@extends("layout.mainlayout")

@section("page_title","Pemesanan")

@section("title","Pemesanan")

@section("breadcrumb")
<li class="breadcrumb-item"><a href="dashboard">Home</a></li>
<li class="breadcrumb-item active">Pemesanan</li> 
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
	  <h3 class="card-title"> DATA PEMESANAN</h3>
	  <div class="card-tools">
		  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
			<i class="fas fa-minus"></i></button>
		  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
			<i class="fas fa-times"></i></button>
	  </div>
  </div>

<!--   
@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session()->get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif 

@if(session()->has('failed'))
<div class="alert alert-info" role="alert">
{{ session()->get('failed') }}
</div>
@endif  -->

  <div class="card-body">
  <div class="card-body">
    <div class="card">
			<div class="card-header">
				<a href="/pemesanan/form_pemesanan">
				<button type="button" class="btn btn-info float-right" style="float: right;"><i class="fas fa-plus"></i>  Tambah Data</button>
				</a>
			</div>
      <div class="card-body">
      	<table id="example1" class="table table-bordered table-striped">
          <thead>
              <tr>
                <th style="text-align:center">No.</th>
                <th style="text-align:center">Nama</th>
                <th style="text-align:center">Tempat & Tgl Lahir</th>
                <th style="text-align:center">Pekerjaan</th>
                <th style="text-align:center">Alamat Lengkap</th>
                <th style="text-align:center">Telepon</th>
                <th style="text-align:center">HP</th>
                <th style="text-align:center">Nomor Kavling</th>
                <th style="text-align:center">Type Rumah</th>
                <th style="text-align:center">Harga Standart</th>
                <th style="text-align:center">Harga Kelebihan Tanah</th>
                <th style="text-align:center">Booking Fee</th>
                <th style="text-align:center">Uang Muka</th>
                <th style="text-align:center">KPR</th>
                <th style="text-align:center">Biaya Admin</th>
                <th style="text-align:center">Aksi</th>
              </tr>
          </thead>
          <tbody>
          @foreach($pemesanan as $data)
              <tr>
                  <td style="text-align:center">{{ $data->nama }}</td>
                  <td style="text-align:center">{{ $data->ttl }}</td>
                  <td style="text-align:center">{{ $data->pekerjaan }}</td>
                  <td style="text-align:center">{{ $data->alamat }}</td>
                  <td style="text-align:center">{{ $data->telp }}</td>
                  <td style="text-align:center">{{ $data->hp }}</td>
                  <td style="text-align:center">{{ $data->no_kavling }}</td>
                  <td style="text-align:center">{{ $data->type }}</td>
                  <td style="text-align:center">{{ $data->harga_standart }}</td>
                  <td style="text-align:center">{{ $data->harga_kelebihan_tanah }}</td>
                  <td style="text-align:center">{{ $data->booking_fee }}</td>
                  <td style="text-align:center">{{ $data->uang_muka }}</td>
                  <td style="text-align:center">{{ $data->kpr }}</td>
                  <td style="text-align:center">{{ $data->biaya_admin }}</td>
                  <td>
                  <a href='/pemesanan/edit_pemesanan/{{ $data->id_pemesanan }}'>
                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
                    </a>
                  <button onclick="confirmDelete('{{ $data->id_pemesanan }}')" class="btn btn-danger">
                  <i class="fas fa-trash"></i> Hapus</button>
                  </td>     
              </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>

			<!-- /.card-body -->
		</div>
		<!-- /.card -->
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->


<!-- penomoran-otomatis -->
<script type="text/javascript">
var addNumeration = function(cl){
  var table = document.querySelector('table.' + cl)
  var trs = table.querySelectorAll('tr')
  var counter = 1
  
  Array.prototype.forEach.call(trs, function(x,i){
    var firstChild = x.children[0]
    if (firstChild.tagName === 'TD') {
      var cell = document.createElement('td')
      cell.textContent = counter ++
      x.insertBefore(cell,firstChild)
    } else {
      firstChild.setAttribute('colspan',1)
    }
  })
}

addNumeration("table")
</script>
<!-- /.penomoran-otomatis -->


<div class="modal fade" id="deletepemesanan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin mengahpus data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
		<a id="deleteLink">
		<button type="button" class="btn btn-danger">Hapus</button>
		</a>
	</div>
    </div>
  </div>
</div>

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

@section('scripts')
<script>
	function confirmDelete(id)
	{
		var link = document.getElementById('deleteLink')
		link.href="/pemesanan/hapus/" + id
		$('#deletepemesanan').modal('show')
	}


</script>
@endsection