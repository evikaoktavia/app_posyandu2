<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          
        </form>
        <ul class="navbar-nav navbar-right">
          
          <li class="dropdown"><a href="#"  class="nav-link  nav-link-lg nav-link-user">
            
            <div class="d-sm-none d-lg-inline-block">Welcome  <?php echo $this->session->userdata('nama') ?></div></a>
           
          </li>
        </ul>
      </nav>
<!-- sidebar-->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <!--<a href="index.html">SI Posyandu</a>-->
          <a href="index.html"><img alt="image" src="/app_posyandu/logo1.png" width="200" height="75"></a>
          <!--<a href="index.html"><img alt="image" src="../assets/logo1.png" width="200" height="75"></a>-->
          </div>

          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SIP</a>
          </div>

          <ul class="sidebar-menu">
              
          <li>
            <a class="nav-link" href="<?php echo base_url ('admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
              
          <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-list-alt"></i> <span>Pendaftaran</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url ('admin/data_balita') ?>">Balita</a></li>
                  <li><a class="nav-link" href="<?php echo base_url ('admin/data_ibuhamil') ?>">Ibu Hamil</a></li>
                  <li><a class="nav-link" href="<?php echo base_url ('admin/data_lansia') ?>">Lansia</a></li>
                </ul>
          </li>

          <li><a class="nav-link" href="<?php echo base_url ('admin/data_pemeriksaan') ?>"><i class="fas fa-weight"></i> <span>Pemeriksaan</span></a></li>
          
          <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-nurse"></i> <span>Data Petugas</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url ('admin/data_kader') ?>">Kader</a></li>
                  <li><a class="nav-link" href="<?php echo base_url ('admin/data_bidan') ?>">Bidan</a></li>
                </ul>
              </li>
            
          <li><a class="nav-link" href="<?php echo base_url ('admin/data_kegiatan') ?>"><i class="fas fa-calendar-day"></i> <span>Kegiatan</span></a></li>

          <li><a class="nav-link" href="<?php echo base_url ('admin/data_laporan') ?>"><i class="fas fa-file"></i> <span>Laporan</span></a></li>

          <li><a class="nav-link" href="<?php echo base_url ('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Lagout</span></a></li>
          

            <!--<div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>-->
        </aside>
      </div>
