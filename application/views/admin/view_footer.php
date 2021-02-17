		</div>
	</div>

	<script src="<?php echo base_url(); ?>assets/admin/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jscolor.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.inputmask.extensions.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/icheck.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/fastclick.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/jquery.fancybox.pack.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/js/summernote.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/admin/js/demo.js"></script>

	<script type="text/javascript">
		function ik(val){
			document.getElementById('style').value = val;  
		}
	</script>

	<script>
		$(document).ready(function() {
			$('#editor1').summernote({
				height: 300
			});
			$('#editor2').summernote({
				height: 300
			});
			$('#editor3').summernote({
				height: 300
			});
			$('#editor4').summernote({
				height: 300
			});
			$('#editor5').summernote({
				height: 300
			});
			$('#editor_short').summernote({
				height: 100
			});
		});

		$(function () {
	    //Initialize Select2 Elements
	    $(".select2").select2();

	    //Datemask dd/mm/yyyy
	    $("#datemask").inputmask("dd-MM-yyyy", {"placeholder": "dd-MM-yyyy"});
	    //Datemask2 mm/dd/yyyy
	    $("#datemask2").inputmask("MM-dd-yyyy", {"placeholder": "MM-dd-yyyy"});
	    //Money Euro
	    $("[data-mask]").inputmask();

	    //Date picker
	    $('#datepicker').datepicker({
	    	autoclose: true,
	    	format: 'D, dd-M-yyyy',
	    	todayBtn: 'linked',
	    });

	    $('#datepicker1').datepicker({
	    	autoclose: true,
	    	format: 'D, dd-M-yyyy',
	    	todayBtn: 'linked',
	    });

	    //iCheck for checkbox and radio inputs
	    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
	    	checkboxClass: 'icheckbox_minimal-blue',
	    	radioClass: 'iradio_minimal-blue'
	    });
	    //Red color scheme for iCheck
	    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
	    	checkboxClass: 'icheckbox_minimal-red',
	    	radioClass: 'iradio_minimal-red'
	    });
	    //Flat red color scheme for iCheck
	    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
	    	checkboxClass: 'icheckbox_flat-green',
	    	radioClass: 'iradio_flat-green'
	    });

	    $("#example1").DataTable();
	    $('#example2').DataTable({
	    	"paging": true,
	    	"lengthChange": false,
	    	"searching": false,
	    	"ordering": true,
	    	"info": true,
	    	"autoWidth": false
	    });

	    $('#confirm-delete').on('show.bs.modal', function(e) {
	    	$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	    });

	});

</script>

<script type="text/javascript">

	$(document).ready(function () {
		$("#btnAddNew").click(function () {
			var rowNumber = $("#PhotosTable tbody tr").length;
			var trNew = "";              
			var addLink = "<div class=\"upload-btn" + rowNumber + "\"><input type=\"file\" name=\"photos[]\"></div>";
			var deleteRow = "<a href=\"javascript:void()\" class=\"Delete btn btn-danger btn-xs\">X</a>";
			trNew = trNew + "<tr> ";
			trNew += "<td>" + addLink + "</td>";
			trNew += "<td style=\"width:28px;\">" + deleteRow + "</td>";
			trNew = trNew + " </tr>";
			$("#PhotosTable tbody").append(trNew);
		});
		$('#PhotosTable').delegate('a.Delete', 'click', function () {
			$(this).parent().parent().fadeOut('slow').remove();
			return false;
		});
	});

</script>

<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
	});
</script>
</body>
</html>