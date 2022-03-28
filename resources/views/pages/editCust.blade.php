@extends("layout.mainlayout")

@section("page_title","BJSProperty")

@section("title","Edit Customer")

@section("custom_css")

@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blank_Page</li>
@endsection


@section('konten')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Customer</h3>

        </div>
        <div class="card-body">
        
        <form  action="/pages/viewCustomer/updateCustomer" method="post">
             @csrf

                <div class="card-body">

                    <label style="color: black">Status Customer</label>
                    <select class="form-control" name="status_customer"  id="input_status">
                    <option value="0">Booking</option>
                    <option value="1">DP</option>
                    <option value="2">Masa Pembayaran</option>
                    <option value="3">Lunas</option>
                    </select>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
        
        
        <!-- /.card-footer-->
</div>
      <!-- /.card -->
@endsection
