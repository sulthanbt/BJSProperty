<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{ asset('asset/dist/img/default-user-imge.jpeg') }}" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

    
   
      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      

          <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          @if($menu == 'customer')
          <a href="/pages/viewCustomer" class="nav-link active">
          @else
          <a href="/pages/viewCustomer" class="nav-link">
          @endif
          <i class="nav-icon fas fa-users"></i>
            <p>
              Customer
            </p>
          </a>
        </li>

        <li class="nav-item">
              @if($menu == 'pemesanan')
              <a href="/view_pemesanan" class="nav-link active">
              @else
              <a href="/view_pemesanan" class="nav-link">
              @endif
              <i class="nav-icon fas fa-users"></i>
                <p>
                  Pemesanan
                </p>
              </a>
            </li>


        @if($menu == 'Pembayaran')
        <li class="nav-item has-treeview menu-open">
          <a href="#" class="nav-link active">
        @else
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
        @endif
            <i class="nav-icon far fa-plus-square"></i>
            <p>
              Pembayaran
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item">
              @if($submenu == 'pembayaran')
              <a href="/pembayaran/viewKPR" class="nav-link active">
              @else
              <a href="/pembayaran/viewKPR" class="nav-link ">
              @endif 
                <i class="far fa-circle nav-icon"></i>
                <p>KPR</p>
              </a>
            </li>
            <li class="nav-item">
              @if($submenu == 'pembayaran2')
              <a href="/pembayaran/viewCashBertahap" class="nav-link active">
              @else
              <a href="/pembayaran/viewCashBertahap" class="nav-link ">
              @endif 
                <i class="far fa-circle nav-icon"></i>
                <p>Cash Bertahap</p>
              </a>

            </li>
          </ul>

          
            <li class="nav-item">
              @if($menu == 'hutang')
              <a href="/viewHutang" class="nav-link active">
              @else
              <a href="/viewHutang" class="nav-link">
              @endif
              <i class="nav-icon fas fa-users"></i>
                <p>
                  Hutang
                </p>
              </a>
            </li>
      
        </li>


    </div>