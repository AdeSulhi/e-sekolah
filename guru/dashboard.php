<?php
	$url = $_SERVER['DOCUMENT_ROOT'];
 	include "../system/config.php";
   include "../system/cek_guru.php";
 	include "../theme/header.php";
 	include "../theme/sidebar-guru.php";
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header"><h1>Dashboard</h1></section>

   <!-- Main content -->
   <section class="content container-fluid">
      <div class="box">
         <!-- /.box-header -->
         <div class="box-header"><h3 class="box-title">Daftar Guru</h3></div>
         <!-- /.box-body -->
         <div class="box-body">
            <table id="example" class="table table-bordered table-striped">
               <thead>
                  <tr>
                     <th width="6px">NO</th>
                     <th>NAMA</th>
                     <th>NIP</th>
                     <th>TEMPAT LAHIR</th>
                     <th>TANGGAL LAHIR</th>
                     <th>JENIS KELAMIN</th>
                  </tr>
               </thead>
               <tbody>
               <?php
                  $users = mysqli_query($koneksi, "SELECT * FROM guru");
                  $no=0;
                  foreach ($users as $row){
                  $no++;
               ?>
                  <tr>
							<td class="text-center"><?php echo $no ?></td>
			            <td><?php echo $row['nama'] ?></td>
                     <td><?php echo $row['nip'] ?></td>
                     <td><?php echo $row['tempat_lahir'] ?></td>
                     <td><?php echo $row['tgl_lahir'] ?></td>
                     <td><?php echo $row['jenis_kelamin'] ?></td>
						</tr>
               <?php } ?>
               </tbody>
            </table>
         </div><!-- /.box-body -->
      </div><!-- /.box -->
   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->
  

<!-- page script -->
<script type="text/javascript" charset="utf-8">
  $('#example').DataTable( {
    //paging: false
  } );
</script>

<?php include "../theme/footer.php"; ?>