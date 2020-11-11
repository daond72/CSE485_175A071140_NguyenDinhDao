<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/style2.css">

<section class="content">

	<div class="container-fluid">
		<!-- Exportable Table -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="panel panel-primary">
						<div id="page-wrapper">
							<div class="main-page" style="width: 100%;height: 600px;">
								<h2 class="title1">Sửa thành viên</h2>
								<?php include('edit.php');	?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	function printDiv() {
		//Get the HTML of div
		var divElements = document.getElementById("print").innerHTML;
		//Get the HTML of whole page
		var oldPage = document.body.innerHTML;
		//Reset the page's HTML with div's HTML only
		document.body.innerHTML = "<table></table>" + divElements;
		//Print Page
		window.print();
		//Restore orignal HTML
		document.body.innerHTML = oldPage;

	}
</script>
<script src="plugins/js/jquery-1.js"></script>
<script src="plugins/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>
<?php
include("script.php");
?>