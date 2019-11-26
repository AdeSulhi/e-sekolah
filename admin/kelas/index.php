<?php
  include "../../config/koneksi.php";
  include "../../config/cek_admin.php";
  include "../../theme/header.php";
  include "../../theme/sidebar-admin.php";
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header"><h1>Dashboard</h1></section>

   <!-- Main content -->
   <section class="content container-fluid">
      <div class="box">
         <!-- /.box-header -->
         <div class="box-header with-border">
            <h3 class="box-title">Kelas Mahasiswa</h3>
         </div>
         <div class="box-body">
            <div class="col-md-3">
               <table class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th width="6px">NO</th>
                        <th>NAMA KELAS</th>
                        <th class="text-center">JUMLAH SISWA</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php
                      $kelas = mysqli_query($koneksi, "
                        SELECT kelas.nama, COUNT(kelas_siswa.id_kelas) AS jml_siswa, kelas_siswa.id_kelas AS id  
                        FROM kelas
                        INNER JOIN kelas_siswa ON kelas_siswa.id_kelas=kelas.id
                        GROUP BY kelas_siswa.id_kelas
                      ");


                     $no=0;
                     foreach ($kelas as $row){
                     $no++;
                  ?>
                     <tr>
                        <td class="text-center"><?php echo $no ?></td>
                        <td>Kelas <?php echo $row['nama'] ?></td>
                        <td class="text-center"><a href="detail_kelas.php?id=<?php echo $row['id'] ?>"> <?php echo $row['jml_siswa'] ?></a></td>


                     </tr>
                  <?php } ?>
                  </tbody>
               </table>
            </div>
         </div><!-- /.box-body -->
      </div><!-- /.box -->
   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->
  

<?php 
  include "../../theme/footer.php";
?>