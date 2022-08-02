 <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
      <a href="home.php" class="brand-link">
        <img src="<?=base_url('assets/images/')?>gambarnobg.png" alt="pemilos" class="brand-image img-circle elevation-3" style="opacity: .8; width: 30px; height: 35px">
        <span class="judul" style="color: white; font-weight: bolder; margin-left: 33px;">Pemilos</span>
      </a>
    <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header">Tahun Pemilihan</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Tahun
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="margin-left: 10px">
                <li class="nav-item">
                    <span class="nav-link" style="color: white; float: left; ">2016</span>
                    <div class="custom-control custom-switch">
                      <a href="#">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1"></label>
                      </a>
                    </div>
                </li>
                <li class="nav-item">
                  <a href="index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>2017</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>2018</p>
                  </a>
                </li>
              </ul>
                <li class="nav-item">
                  <a href="lihat_tahun" class="nav-link">
                   <i class="fas fa-atlas" style="margin-left: 7px;"></i>
                    <p style="margin-left: 7px">lihat Tahun</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-plus-circle" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px">Tambah Tahun</p>
                  </a>
                </li>
            </li>
            <li class="nav-header">Anggota</li>
                <li class="nav-item">
                  <a href="Admin/info_admin" class="nav-link">
                    <i class="fa fa-user-circle" aria-hidden="true" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">Info Data Pribadi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="anggota" class="nav-link">
                    <i class="fas fa-list" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">List data Anggota</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="tambah_user" class="nav-link">
                    <i class="fa fa-cart-plus" aria-hidden="true" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">Tambah User Baru</p>
                  </a>
                </li>
            <li class="nav-header">Keluar Aplikasi</li>
           <li class="nav-item">
                  <a href="logout.php" class="nav-link">
                    <i class="fa fa-power-off" aria-hidden="true" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">Log Out</p>
                  </a>
            </li>
     	 </ul>
     
        <!-- /.sidebar-menu -->
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>
  