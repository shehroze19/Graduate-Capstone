<?php 
include('connection.php');
session_start();
@include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stats</title>
	



  <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

	

</head>

<?php 

    include('login_navbar.php');
 ?>

<body  style="color:black" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner">
		<div class="bg-color">
			
			<div class="container">
					<div class="banner-info">
						
						
<div class="container">


Search for a selected Date
		<input style="color:black;" type="date" id="myInput" onchange="myFunction()" placeholder="Search by names" title="Type in a name">



												<table id="myTable"   class="table" border="2">
<tr>
											<th class='bg-primary text-center' >ID</th>
											<th class='bg-primary text-center'>Email</th>
											<th class='bg-primary text-center'>Ip Address</th>
											<th class='bg-primary text-center'>Time</th>

													</tr>
							<?php 
							$Username=$_SESSION['email'];

							$result=mysqli_query($con,"select * from log_stats where email='$Username' ORDER BY time DESC;");



while($row=$data = mysqli_fetch_assoc($result)){
							
echo "	<tr>
														<td> ".$row['id']."</td>
														<td> ".$row['email']."</td>
														<td> ".$row['ip']."</td>
														<td> ".$row['time']."</td>
													</tr>";

}
							?>

							


												</table> 
											</div>
											<br><br><br>




													
												</div>
											</div>
										
								</section>


<script>
					function myFunction() {
						var input, filter, table, tr, td, i;
						input = document.getElementById("myInput");
						filter = input.value.toUpperCase();
						table = document.getElementById("myTable");
						tr = table.getElementsByTagName("tr");
						for (i = 0; i < tr.length; i++) {
							td = tr[i].getElementsByTagName("td")[3];
							if (td) {
								if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
									tr[i].style.display = "";
								} else {
									tr[i].style.display = "none";
								}
							}       
						}
					}
				</script>


   <?php include('footer_login.php'); ?>
				

   <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

							</body>

							</html>
