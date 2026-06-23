<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
  id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0 text-center" href="{{ url('/') }}">
      <img src="{{ asset('assets/img/logo1.png') }}" class="navbar-brand-img h-100"
        style="max-height: 38px; width: auto;" alt="main_logo">
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <!-- Dashboard -->
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>

      <!-- Data Master (Collapsible) -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#menu-master" role="button" aria-expanded="false"
          aria-controls="menu-master">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-folder-17 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Data Master</span>
          <i class="ni ni-bold-down ms-auto text-xs opacity-5"></i>
        </a>
        <div class="collapse" id="menu-master">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidenav-normal">Data Barang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidenav-normal">Data Supplier</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidenav-normal">Data Pelanggan</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Transaksi (Collapsible) -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#menu-transaksi" role="button"
          aria-expanded="false" aria-controls="menu-transaksi">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Transaksi</span>
          <i class="ni ni-bold-down ms-auto text-xs opacity-5"></i>
        </a>
        <div class="collapse" id="menu-transaksi">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidenav-normal">Transaksi Masuk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidenav-normal">Transaksi Keluar</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Laporan (Collapsible) -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#menu-laporan" role="button" aria-expanded="false"
          aria-controls="menu-laporan">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-paper-diploma text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Laporan</span>
          <i class="ni ni-bold-down ms-auto text-xs opacity-5"></i>
        </a>
        <div class="collapse" id="menu-laporan">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidenav-normal">Laporan Stok</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="sidenav-normal">Laporan Transaksi</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pengaturan Akun</h6>
      </li>

      <!-- Profil Saya -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <div
            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-02 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Profil Saya</span>
        </a>
      </li>

    </ul>
  </div>
</aside>