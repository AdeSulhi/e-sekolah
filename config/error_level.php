<?php
 	include "../theme/header.php";
 	include "../theme/sidebar-error.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header"><h1><span class="text-red">Forbidden</span></h1></section>

   <!-- Main content -->
   <section class="content container-fluid">
      <p class="lead">Anda tidak berhak akses halaman ini</p>
      <button onclick="history.go(-1);">Kembali </button>

   </section><!-- /.Main content -->
</div><!-- /.content-wrapper -->

<?php include "../theme/footer.php"; ?>