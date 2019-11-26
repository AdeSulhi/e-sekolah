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
   <div class="row">
   <div class="col-md-4">      
      <div class="box">
         <!-- /.box-header -->
         <div class="box-header with-border">
            <h3 class="box-title">Setting Tahun Pelajaran</h3>
            <span class="pull-right"><a class="btn btn-xs btn-info" href="<?php echo $domain;?>/admin/setting_tp_form.php" title="Tambah Data" role="button"><i class="fa fa-plus-circle"></i> Tambah</a></span>
         </div>
            <!-- Pesan opersasi CRUD -->
            <div class="col-md-12">
               <?php  
                 if (empty($_GET['alert'])) {
                   echo "";
                 } elseif ($_GET['alert'] == 1) {
                   echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                             <span aria-hidden='true'>&times;</span>
                           </button>
                           <strong><i class='glyphicon glyphicon-alert'></i> Gagal!</strong> Terjadi kesalahan.
                         </div>";
                 } elseif ($_GET['alert'] == 2) {
                   echo "<div class='alert alert-success alert-dismissible' role='alert'>
                           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                             <span aria-hidden='true'>&times;</span>
                           </button>
                           <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Setting Pelajaran berhasil disimpan.
                         </div>";
                 } elseif ($_GET['alert'] == 3) {
                   echo "<div class='alert alert-success alert-dismissible' role='alert'>
                           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                             <span aria-hidden='true'>&times;</span>
                           </button>
                           <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Setting Pelajaran berhasil diubah.
                         </div>";
                 } elseif ($_GET['alert'] == 4) {
                   echo "<div class='alert alert-success alert-dismissible' role='alert'>
                           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                             <span aria-hidden='true'>&times;</span>
                           </button>
                           <strong><i class='glyphicon glyphicon-ok-circle'></i> Sukses!</strong> Setting Pelajaran berhasil dihapus.
                         </div>";
                 }
               ?>
            </div>

         <!-- /.box-body -->
         <div class="box-body">
            <table id="data-tp" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th width="6px">NO</th>
                     <th>TAHUN PELAJARAN</th>
                     <th style="text-align: center; width: 50px;">STATUS</th>
                     <th style="text-align: center; width: 50px;">EDIT</th>
                     <th style="text-align: center; width: 50px;">DELETE</th>
                  </tr>
               </thead>
               <tbody>
               <?php
                  $tp = mysqli_query($koneksi, "SELECT * FROM tahun_pelajaran");
                  $no=0;
                  foreach ($tp as $row){
                  $no++;
               ?>
                  <tr>
                     <td class="text-center"><?php echo $no ?></td>
                     <td><?php echo $row['nama'] ?></td>
                     <td>
                        <?php
                           if ( $row['status'] == 'Aktif') {
                              echo  '<span class="label label-success text-label"><i class="fa fa-check"></i>  '.$row["status"].'</span>';
                           }
                           else { 
                              echo '<span class="label label-warning text-label"><i class="fa fa-check"></i> '.$row["status"].'</span>';
                           }
                        ?>
                     </td>
                     <td><a href="guru_form_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-xs btn-primary" title="Edit dosen"><i class="glyphicon glyphicon-edit"></i> Edit</a></td>
                     <td><a href="guru_proses_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger" title="Delete Guru" onclick="return confirm('Anda yakin ingin menghapus data <?php echo $row['nama']; ?>?');"><i class="glyphicon glyphicon-trash"></i> Delete</a></td>
						</tr>
               <?php } ?>
               </tbody>
            </table>
         </div><!-- /.box-body -->
      </div><!-- /.box -->
   </div><!-- /.col-md -->
   </div><!-- /.row -->
   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->
  

<!-- page script -->
<script type="text/javascript" charset="utf-8">
  $('#data-tp').DataTable( {
    paging: false
    search: false
  } );
</script>

<?php include "../theme/footer.php"; ?>