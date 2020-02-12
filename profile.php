<?php
include('connection.php');
session_start();
@include('session.php');

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

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

    <?php 
    include('login_navbar.php'); ?>
      <div id="content-wrapper">

        <div class="container-fluid">

           <!-- Breadcrumbs-->
          <ol class='breadcrumb'>
            <li class='breadcrumb-item'>
              <a href='welcome.php'>Dashboard</a>
            </li>
            <li class='breadcrumb-item active'>View Profile Details</li>
          </ol>




        <?php 
              $email=$_SESSION['email'];

              $result=mysqli_query($con,"select * from accounts where email='$email';");




              $data = mysqli_fetch_assoc($result);


              ?>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Account Details
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
     
      
       <div class="form-group row">
             
                    <div class="panel-body">

                      <div class="form-group row">
<div class="container">

                        <table  class="table">

                          <tr class="">
                            <th >Name Registered to</th>
                            <td> <?php  echo $data['name'] ?></td>
                          </tr>

                          <tr >
                            <th class="black">Email</th>
                            <td> <?php  echo $data['email'] ?></td>
                          </tr>

                          
                          <tr >
                            <th class="black">Cell Phone Number</th>
                            <td> <?php  echo $data['cell phone'] ?></td>
                          </tr>


                      

                          <tr >
                            <th class="black">Account Registered on</th>
                            <td> <?php  echo $data['account_created'] ?></td>
                          </tr>

                          <tr >
                            <th class="black">Account Type</th>
                            <td> <?php  echo $data['type'] ?></td>
                         
                          </tr>
                        </table> 
                      </div>
</div>



                    </div>
                </div>



      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Personal Details
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       




       <div class="form-group row">
             
                    <div class="panel-body">

                      <div class="form-group row">
<div class="container">

                        <table  class="table">

                          <tr class="">
                            <th >Name Registered to</th>
                            <td> <?php  echo $data['name'] ?></td>
                          </tr>

                     
                          
                          <tr >
                            <th class="black">Age</th>
                            <td> <?php  echo $data['age'] ?></td>
                          </tr>


                      

                          <tr >
                            <th class="black">Gender</th>
                            <td> <?php  echo $data['gender'] ?></td>
                          </tr>

                          <tr >
                            <th class="black">Address</th>
                            <td> <?php  echo $data['address'] ?></td>
                         
                          </tr>

                           <tr >
                            <th class="black">City</th>
                            <td> <?php  echo $data['city'] ?></td>
                         
                          </tr>
                        </table> 
                      </div>
</div>



                    </div>
                </div>















      </div>
    </div>
  </div>

       








        </div>
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
