  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
         <div class="logo" ><img src="<?php echo $domain; ?>/assets/images/e_sekolah.png" alt="Logo e-Sekolah" /></div>
         <div class="logo-title">SMP Islam Terpadu</div>
      </div>

     <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="<?php echo $domain; ?>/admin/index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="<?php echo $domain; ?>/admin/daftar_guru.php"><i class="fa fa-graduation-cap"></i> <span>Daftar Guru</span></a></li>
        <li><a href="<?php echo $domain; ?>/admin/daftar_siswa.php"><i class="fa fa-user"></i> <span>Daftar Siswa</span></a></li>
        <li><a href="<?php echo $domain; ?>/admin/kelas/index.php"><i class="fa fa-table"></i> <span>Rekap Kelas</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cogs"></i> <span>Setting</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo $domain; ?>/admin/setting_tp.php/"><i class="fa fa-angle-double-right"></i> Tahun Pelajaran</a></li>
            <li><a href="<?php echo $domain; ?>/admin/kelas/"><i class="fa fa-angle-double-right"></i> Kelas Siswa</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Semester</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>