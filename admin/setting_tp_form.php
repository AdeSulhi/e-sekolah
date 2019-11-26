<?php
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
    <div class="col-sm-4">
      <div class="box box-primary">
         <!-- /.box-header -->
         <div class="box-header with-border"><h3 class="box-title">Tahun Pelajaran</h3></div>
         <!-- /.box-body -->
         <div class="box-body">

               <form action="setting_tp_proses_tambah.php" method="POST" class="form-horizontal">
                  <div class="form-group">
                     <label for="nama" class="col-sm-2 control-label">Nama TP</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="nama" placeholder="2017/2018"> 
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-sm-2 control-label">Status</label>
                     <div class="col-sm-4">
                        <label class="radio-inline">
                           <input type="radio" name="status" value="Aktif"> Aktif
                        </label>
                        <label class="radio-inline">
                           <input type="radio" name="status" value="Pasif"> Pasif
                        </label>
                     </div>
                  </div>  
               
                  <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="simpan" class="btn btn-xs btn-info">TAMBAH</button>
                        <button type="reset" value="Reset" class="btn btn-xs btn-danger">RESET</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div><!-- /.box -->
    </div><!-- /.col-sm-4 -->
    </div><!-- /.row -->
   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->

<?php include "../theme/footer.php"; ?>