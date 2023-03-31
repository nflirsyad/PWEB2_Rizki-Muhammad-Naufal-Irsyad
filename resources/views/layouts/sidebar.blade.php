<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed{{request()->is('dashboard') ? 'nav-link' : ''}}" href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

  

      <li class="nav-heading">Master Data</li>


      <li class="nav-item">
        <a class="nav-link collapsed{{request()->is('merek') ? 'nav-link' : ''}}" href="{{route('merek')}}">
          <i class="bi bi-person"></i>
          <span>Data Merek</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Data Mobil</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Data Supir</span>
        </a>
      </li>

      <li class="nav-heading">Kelola Sewa</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Data Customer</span>
        </a>
      </li>
   
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Transaksi</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Pengembalian</span>
        </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Pembatalan</span>
        </a>
      </li>

      <li class="nav-heading">Laporan</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Laporan</span>
        </a>
      </li>
      
    </ul>

  </aside>
