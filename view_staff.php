<?php
include('connection.php');
session_start();
@include('session.php');
@include('admin_checker.php'); //check ccazsskljaskldjklas

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>All Staff</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">


    <!-- delete Modal using value from clicking the delete button we will get the accounts id value and then use it to delete--> 
    
   
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" id="deleter">You sure you want to delete? </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" id="delete_true" href="">Delete Staff</a>
          </div>
        </div>
      </div>
    </div>



  <?php 
  include('login_navbar.php'); ?>
  <div id="content-wrapper">

    <div class="container-fluid">

     <!-- Breadcrumbs-->
     <ol class='breadcrumb'>
      <li class='breadcrumb-item'>
        <a href='welcome.php'>Dashboard</a>
      </li>
      <li class='breadcrumb-item active'>Account Management</li>
    </ol>










    <div class="form-group row">




      <?php 


      echo "<!-- DataTables Example -->
      <div class='card mb-3'>
      <div class='card-header'>
      <i class='fas fa-table'></i>
      Staff Details</div>
      <div class='card-body'>
      <div class='table-responsive'>
      <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
      <thead>
      <tr>
      <th class='text-center'>Email</th>
      <th class='text-center'>Name</th>
      <th class='text-center'>Image</th>
      <th>View Full Details</th>

      <th class='text-center'>Delete</th>
      <th class='text-center'>Edit</th>
      </tr>
      </thead>

      <tfoot>
      <tr>
      <th class='text-center'>Email</th>
      <th class='text-center'>Name</th>
      <th class='text-center'>Image</th>
      <th class='text-center'>View Full Details</th>


      <th class='text-center'>Delete</th>
      <th class='text-center'>Edit</th>
      </tr>
      </tfoot>
      <tbody>";



      $result=mysqli_query($con,"SELECT * FROM `accounts` WHERE `type`='staff';");

      while($row=mysqli_fetch_assoc($result)){



  if($row['image']!=null){

  }
                    else{
                      $gender=trim(strtolower($row['gender']));
                      if($gender=="male"){

                      $row['image']="male.png";


                      }
                      else{

                      $row['image']="female.png";

                      }
                    }

//displaying
        echo "  <tr>


        



        <td class='text-center'> ".$row['email']."</td>
        <td class='text-center'> ".$row['name']."</td>


        <td class='text-center'> <img class='img-fluid img-thumbnail' style='size=width:200px; height:200px;' src='img/".$row['image']."''></td>




        <td class='text-center'><a href='view_staff_details.php?id=".$row['id']."'</a>View all details</td>

        <td class='text-center'> <button type=\"button\" data-toggle='modal' data-target='#deleteModal' onclick='document.getElementById(\"deleter\").innerHTML = \"Are You sure you want to delete User ".$row['name']." with email id ".$row['email']." ".$row['id']."\"; document.getElementById(\"delete_true\").href = \"".$row['id']."\"; '>Delete</button></td>
        <td class='text-center'> <a href='delete.php?id=".$row['id']."'>Edit</a></td>";


        echo"

        </tr>";
      }

      echo "</tbody>
      </table>
      </div>
      </div>
      </div>

      ";



      ?>


<a href="#" onclick="one(); two();" >click</a>






    </table>
  </form>
</div>
</div>


</div>

<hr>




</div></div>







<!-- /.container-fluid -->

<?php include('footer_login.php'); ?>


</div>
<!-- /.content-wrapper -->



<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
