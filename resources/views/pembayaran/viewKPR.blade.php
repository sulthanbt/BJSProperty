@extends("layout.mainlayout")

@section("page_title","BJSProperty")

@section("title","KPR")

@section("custom_css")
<!-- DataTables -->
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset ('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section("breadcrumb")
<li class="breadcrumb-item"><a href="/">Home</a></li>
<li class="breadcrumb-item active">KPR</li>
@endsection

@section("content")
<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data KPR</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fas fa-minus"></i></button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
        <i class="fas fa-times"></i></button>
    </div>
  </div>
  <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nama</th>               
                  <th>DP</th>
                  <th>Pembayaran</th>
                  <th>Sisa Pembayaran</th>
                  <th>Opsi</th>
              </tr>
          </thead>
          <tbody>
          @foreach($kpr as $data)
              <tr>
                  <td>{{ $data->id_pembeli }}</td>
                  <td>{{ $data->nama_pembeli }}</td>
                  <td>{{ $data->ktp }}</td>
                  <td>{{ $data->kk }}</td>
                  <td>{{ $data->surat_nikah/cerai }}</td>
                  <td>{{ $data->slip_gaji }}</td>
                  <td>{{ $data->npwp }}</td>
                  <td>{{ $data->rekening_koran }}</td>
                  <td>{{ $data->sk_pns }}</td>
                  <td>{{ $data->sku_wirausaha }}</td>
                  <td>{{ $data->laporan_keuangan_6_bulan_wirausaha }}</td>
                  <td><<td>
                  <!-- <td style="text-align:center">
                    @if ($data->file_path !== null)
                      <img src="{{url('/uploads/'.$data->file_path)}}" width="200" height="150" alt="Image"/> -->
                      <!-- <img src="{{asset('/storage/app/uploads/'.$data->file_path)}}" width="200" height="150" alt="Image"/> -->
                    <!-- @else
                      <img src="{{$data->foto}}" width="200" height="150" alt="Image"/>
                    @endif
                  </td> -->
              </tr>
          @endforeach
          </tbody>
          <!-- <tfoot>
              <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No. Hp</th>
                  <th>NIK</th>
              </tr>
          </tfoot> -->
      </table>
    </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Footer
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection

@section("scripts")
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