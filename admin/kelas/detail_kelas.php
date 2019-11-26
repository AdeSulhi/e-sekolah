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
            <div class="col-md-6">
               <table class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th width="6px">NO</th>
                        <th>NIS</th>
                        <th>NAMA LENGKAP</th>
                        <th>JENIS KELAMIN</th>
                        <th>TEMPAT LAHIR</th>
                        <th>TGL LAHIR</th>
                     </tr>
                  </thead>
                  <tbody>
                  <?php
                      $id_kelas = $_GET['id'];
                      $kelas_siswa = mysqli_query($koneksi, "
                        SELECT kelas_siswa.id_kelas, siswa.*  
                        FROM kelas_siswa 
                        INNER JOIN siswa ON kelas_siswa.nis=siswa.nis
                        WHERE kelas_siswa.id_kelas= $id_kelas");
                      // Buat nomor urut
                     $no=0;
                     // extract data kelas siswa 
                     foreach ($kelas_siswa as $row){
                     $no++;
                  ?>
                     <tr>
                        <td class="text-center"><?php echo $no ?></td>
                        <td><?php echo $row['nis'] ?></td>
                        <td><?php echo $row['nama'] ?></td>
                        <td><?php echo $row['jenis_kelamin'] ?></td>
                        <td><?php echo $row['tempat_lahir'] ?></td>
                        <td><?php 
                            $tgl = $row['tgl_lahir'];
                            $date = date_create($tgl);
                            echo date_format($date, 'j F Y'); 
                            ?>
                        </td>


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