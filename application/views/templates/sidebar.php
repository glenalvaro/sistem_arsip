<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>/assets/img/3.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>SISTEM INFORMASI 
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('level'); ?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      <?php
      if ($this->session->userdata('level')=='admin') { ?>
        <li class="header">Administrator</li>
        <li>
          <a href="<?php echo base_url('admin'); ?>">
            <i class="fa fa-dashboard"></i> <span> Dashboard</span>
          </a>
        </li>
      <?php }; ?>
      <?php
      if ($this->session->userdata('level')=='pegawai') { ?>
        <li class="header">Administrator</li>
        <li>
          <a href="<?php echo base_url('pegawai'); ?>">
            <i class="fa fa-home"></i> <span> Home</span>
          </a>
        </li>
      <?php }; ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i>
            <span>Manajemen Arsip</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('surat_masuk'); ?>"><i class="fa fa-envelope-o"></i> Surat Masuk</a></li>
            <li><a href="<?php echo base_url('surat_keluar'); ?>"><i class="fa fa-envelope-open-o"></i> Surat Keluar</a></li>
          </ul>
        </li>
<!-- 
        <?php
        if ($this->session->userdata('level')=='admin') { ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-desktop"></i>
            <span>Data Master / Aplikasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-gears"></i> Pengaturan</a></li>
            <li><a href="#"><i class="fa fa-print"></i> Laporan</a></li>
          </ul>
        </li>

      <?php }; ?> -->
         <?php
        if ($this->session->userdata('level')=='admin') { ?>
        <li>
          <a href="<?= base_url('pengguna'); ?>">
            <i class="fa fa-users"></i> <span> Data Pengguna</span>
          </a>
        </li>
        <?php }; ?>

        <li class="header">User</li>
        <li>
          <a href="<?= base_url('profil'); ?>">
            <i class="fa fa-user"></i> <span>My Profile</span>
          </a>
        </li>

        <hr class="sidebar-divider">

         <li>
          <a href="<?php echo base_url('auth/logout'); ?>">
            <i class="glyphicon glyphicon-log-out"></i> <span> Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>