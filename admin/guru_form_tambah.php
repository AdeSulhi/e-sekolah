<?php
  include "../config/cek_admin.php";
  include "../theme/header.php";
  include "../theme/sidebar-admin.php";
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header"><h1>Dashboard Admin</h1></section>

   <!-- Main content -->
   <section class="content container-fluid">
      <div class="box">
         <!-- /.box-header -->
         <div class="box-header with-border"><h3 class="box-title">Form Tambah Data Guru</h3></div>
         <!-- /.box-body -->
         <div class="box-body">
            <div class="col-sm-8">

               <form action="guru_proses_tambah.php" method="POST" class="form-horizontal">
                  <div class="form-group">
                     <label for="nip" class="col-sm-3 control-label">NIP</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="nip">
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="nama" class="col-sm-3 control-label">Nama</label>
                     <div class="col-sm-6">
                        <input type="text" class="form-control" name="nama">
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="tempat_lahir">
                     </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                      <div class="input-group">
                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_lahir" autocomplete="off" required>
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                     <label class="col-sm-3 control-label">Jenis Kelamin</label>
                     <div class="col-sm-5">
                        <label class="radio-inline">
                           <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                        </label>
                        <label class="radio-inline">
                           <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </label>
                     </div>
                  </div>                  
               
                  <div class="form-group">
                     <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" name="simpan" class="btn btn-sm btn-info">TAMBAH</button>
                        <button type="reset" value="Reset" class="btn btn-sm btn-danger">RESET</button>

                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div><!-- /.box -->
   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->

 
<?php include "../theme/footer.php"; ?>