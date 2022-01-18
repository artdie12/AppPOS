<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('AdminLTE-2/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
   
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
            <a href="{{route('dashboard')}}">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
          </li>
        <li class="header">MASTER</li>
        <li>
            <a href="{{route('kategori.index')}}">
              <i class="fa fa-cubes" aria-hidden="true"></i> <span>Kategori</span>
            </a>
        </li>
        <li>
            <a href="#">
              <i class="fa fa-cube" aria-hidden="true"></i> <span>Produk</span>
            </a>
        </li>
        <li>
            <a href="#">
              <i class="fa fa-address-card-o" aria-hidden="true"></i> <span>Mamber</span>
            </a>
        </li>
        <li>
            <a href="#">
              <i class="fa fa-archive" aria-hidden="true"></i> <span>Suplier</span>
            </a>
        </li>
        <li class="header">Transaksi</li>
        <li>
            <a href="#">
              <i class="fa fa-money" aria-hidden="true"></i> <span>Pengeluaran</span>
            </a>
        </li>
        <li>
            <a href="#">
              <i class="fa fa-usd" aria-hidden="true"></i> <span>Penjualan</span>
            </a>
        </li>
        <li>
            <a href="#">
              <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> <span>Pembelian</span>
            </a>
        </li>
        <li>
            <a href="#">
              <i class="fa fa-book" aria-hidden="true"></i> <span>Transaksi Lama</span>
            </a>
        </li>
        <li>
            <a href="#">
              <i class="fa fa-book" aria-hidden="true"></i> <span>Transaksi Baru</span>
            </a>
        </li>
        <li class="header">Laporan</li>
        <li>
            <a href="#">
              <i class="fa fa-flag" aria-hidden="true"></i> <span>Laporan</span>
            </a>
        </li>
        <li class="header">Sistem</li>
        <li>
            <a href="#">
              <i class="fa fa-user" aria-hidden="true"></i> <span>User</span>
            </a>
        <li>
            <a href="#">
              <i class="fa fa-wrench" aria-hidden="true"></i> <span>Pengaturan</span>
            </a>
        </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
