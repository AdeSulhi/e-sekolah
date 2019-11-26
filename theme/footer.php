  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo $domain; ?>/assets/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $domain; ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $domain; ?>/assets/AdminLTE/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo $domain; ?>/assets/DataTables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $domain; ?>/assets/DataTables/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo $domain; ?>/assets/bootstrap/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
	$(function () {
		//datepicker plugin
		$('.date-picker').datepicker({
			autoclose: true,
			todayHighlight: true
		});

		// toolip
		$('[data-toggle="tooltip"]').tooltip();
	})
</script>

</body>
</html>