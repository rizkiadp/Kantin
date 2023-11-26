<style>
    /* Gaya-gaya CSS */
  #accordionSidebar {
    background: #8f71a7;
  }

  li.nav-item {
    margin-top: 5px !important;
    margin-bottom: 5px !important;
  }

  span {
    color: white !important;
    font-weight: bold;
  }

  img {
    padding-left: 20px;
    padding-bottom: 10px;
  }

  .sidebar-brand {
    display: flex;
    align-items: center;
    padding-left: 20px;
    padding-bottom: 10px;
  }

  li.nav-item:nth-child(4) {
    margin-top: 20px !important;
  }

  .nav-link {
    padding: 10px 20px;
    color: black !important; /* Change text color to black */
}

.nav-link:hover {
    background-color: #6e5494;
    color: white !important; /* Change text color to white on hover */
}

.active {
    background-color: #6e5494 !important;
    color: black !important; /* Change text color for the active link */
}

  .sidebar-toggler {
    background-color: #ffc107;
    color: black;
    border: none;
    border-radius: 50%;
    padding: 5px;
    margin: 10px;
  }

  .sidebar-toggler:hover {
    background-color: #ffca28;
  }

  /* Animasi saat hover pada sidebar */
  #accordionSidebar:hover {
    width: 250px; /* Sesuaikan lebar saat hover di sini */
  }

  /* Responsif */
  @media (max-width: 768px) {
    #accordionSidebar {
      width: 60px; /* Sesuaikan lebar sidebar untuk layar kecil */
    }
    #content-wrapper {
      width: calc(100% - 60px);
    }
    #content {
      margin-left: 60px;
    }
    .sidebar-brand {
      padding-left: 10px;
    }
    .nav-link {
      padding: 10px;
    }
    li.nav-item {
      margin-top: 3px !important;
      margin-bottom: 3px !important;
    }
  }
  </style>
<?php 
  $kode_login   = $_SESSION['kode_login'];
  $kode_member  = $_SESSION['kode_member'];
  $kode         = $_SESSION['kode'];
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->

  <img src="https://home.amikom.ac.id/media/2020/08/logo-amikom-t.png" alt="logo" width="180px" height="60px">
   
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <hr class="sidebar-divider my-0">

  <?php
  // Login Sebagai Administrator
  if($kode_login==1){?>
    <!-- Master -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-cog"></i>
        <span>Master</span>
      </a>
      <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-black py-2 collapse-inner rounded">
          <!-- Nama Kelas -->
          <a class="collapse-item" href="nama-kelas.php">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Nama Kelas</span>
          </a>
    
          <!-- Jenis Menu -->
          <a class="collapse-item" href="jenis-menu.php">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Jenis Menu</span>
          </a>

          <!-- User Login -->
          <a class="collapse-item" href="login.php" >
            <i class="fas fa-fw fa-user"></i>
            <span>User Login</span>
          </a>
        </div>
      </div>
    </li>
    <hr class="sidebar-divider my-0">

    <!-- Registrasi Member -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-cog"></i>
        <span>Registrasi</span>
      </a>
            
      <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-black py-2 collapse-inner rounded">
          <!-- Registrasi -->
          <a class="collapse-item" href="registrasi-member.php" >
            <i class="fas fa-fw fa-user"></i>
            <span>Registrasi Member</span>
          </a>
          
          <!-- Registrasi Tenant -->
          <a class="collapse-item" href="registrasi-tenant.php" >
            <i class="fas fa-fw fa-user"></i>
            <span>Registrasi Tenant</span>
          </a>

        </div>
      </div>
    </li>
    <hr class="sidebar-divider my-0">

    <!-- Laporan-laporan -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-edit"></i>
        <span>Laporan-laporan</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-black py-2 collapse-inner rounded">
          <!-- Member Siswa -->
          <a class="collapse-item" href="laporan-member-siswa.php">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Member Siswa</span>
          </a>

          <!-- Member Tenant -->
          <a class="collapse-item" href="laporan-member-tenant.php">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Member Tenant</span>
          </a>
          
          <!-- Laporan Jenis Menu -->
          <a class="collapse-item" href="laporan-jenis-menu.php">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Laporan Jenis Menu</span>
          </a>
          
          <!-- Laporan Menu -->
          <a class="collapse-item" href="laporan-menu.php">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Laporan Menu</span>
          </a>

          <!-- Laporan Transaksi -->
          <a class="collapse-item" href="laporan-transaksi.php">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Laporan Transaksi</span>
          </a>

        </div>
      </div>
    </li>
    <?php 

  // Login Sebagai Tenant
  }else if($kode==2){?>
    <li class="nav-item">
      <!-- User Login Tenant-->
      <a class="nav-link" href="login.php" >
        <i class="fas fa-fw fa-user"></i>
        <span>User Login</span>
      </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <!-- Daftar Menu -->
      <a class="nav-link collapsed" href="tenant.php">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Daftar Menu</span>
      </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Laporan Transaksi -->
    <li class="nav-item">
      <a class="nav-link" href="laporan-transaksi.php">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Laporan Transaksi</span>
      </a>
    </li>
    <?php 

  // Login Sebagai Siswa
  }else if($kode==1){?>
    <!-- User Login -->
    <li class="nav-item">
      <a class="nav-link" href="login.php" >
        <i class="fas fa-fw fa-user"></i>
        <span>User Login</span>
      </a>
    </li>
    <hr class="sidebar-divider my-0">
  
    <!-- Transaksi -->
    <li class="nav-item">
      <a class="nav-link" href="transaksi-member.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Transaksi</span>
      </a>
    </li>
    <hr class="sidebar-divider my-0">
  
    <!-- Histori -->
    <li class="nav-item">
      <a class="nav-link" href="history-member.php">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>History</span>
      </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <?php
  }?>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline mt-3">
    <button class="rounded-circle border-0 bg-warning" id="sidebarToggle"></button>
  </div>
</ul>

<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
  