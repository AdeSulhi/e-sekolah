<?php
 	include "../config/koneksi.php";
  include "../config/cek_admin.php";
 	include "../theme/header.php";
 	include "../theme/sidebar-admin.php";
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header"><h1>Dashboard</h1></section>

   <!-- Main content -->
   <section class="content container-fluid">
      <div class="box">
         <!-- /.box-body -->
         <div class="box-body">

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
               <h3>
               <?php 
                  $siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
                  $jml_siswa = mysqli_num_rows($siswa);
                  echo $jml_siswa;
               ?>
               </h3>
              <p>Total Siswa</p>
            </div>
            <div class="icon">
                <img src="<?php echo $domain; ?>/assets/images/icons/siswa.png" alt="Kelas Room" height="100" width="95"/>
            </div>
            <a href="daftar_siswa.php" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
               <h3>
               <?php 
                  $guru = mysqli_query($koneksi, "SELECT * FROM guru");
                  $jml_guru = mysqli_num_rows($guru);
                  echo $jml_guru;
               ?>
               </h3>
              <p>Total Guru</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="daftar_guru.php" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
               <h3>
               <?php 
                  $kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
                  $jml_kelas = mysqli_num_rows($kelas);
                  echo $jml_kelas;
               ?>
               </h3>
              <p>Total Kelas</p>
            </div>
            <div class="icon">
                <img src="<?php echo $domain; ?>/assets/images/icons/classroom1.png" alt="Kelas Room" height="76" width="76"/>
              <!-- <i class="ion ion-ios-albums"></i> -->
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>165</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

         </div><!-- /.box-body -->
      </div><!-- /.box -->
   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->
  
<?php include "../theme/footer.php"; ?>