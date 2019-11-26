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
         <div class="box-header with-border"><h3 class="box-title">Form Tambah Data Siswa</h3></div>
         <!-- /.box-body -->
         <div class="box-body">
            <div class="col-sm-8">

               <form action="siswa_proses_tambah.php" method="POST" class="form-horizontal">
                  <div class="form-group">
                     <label for="nis" class="col-sm-3 control-label">NIS</label>
                     <div class="col-sm-4">
                        <input type="text" class="form-control" name="nis">
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
                     <div class="col-sm-4">
                        <label class="radio-inline">
                           <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                        </label>
                        <label class="radio-inline">
                           <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </label>
                     </div>
                  </div>
                                    
                  <div class="form-group">
                     <label for="angkatan" class="col-sm-3 control-label">Tahun Angkatan</label>
                     <div class="col-sm-2">
                        <input class="form-control" id="txtNumber" placeholder="contoh: 2015" onkeypress="return isNumberKey(event)" type="text" name="angkatan" maxlength="4">                        
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="col-sm-3 control-label">Status Siswa</label>
                     <div class="col-sm-5">
                        <label class="radio-inline">
                           <input type="radio" name="status_siswa" value="Aktif"> Aktif
                        </label>
                        <label class="radio-inline">
                           <input type="radio" name="status_siswa" value="DO"> Drop Out
                        </label>
                        <label class="radio-inline">
                           <input type="radio" name="status_siswa" value="Lulus"> Lulus
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
<script type="text/javascript">
      function isNumberKey(evt)
      {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31 
        && (charCode < 48 || charCode > 57))
        return false;
        return true;
      } 
</script>
 
<?php include "../theme/footer.php"; ?>