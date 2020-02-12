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





  
  <div class="form-group row">
               




              <?php 
              if(count($_POST)>0){
                $fname=$_POST['fname'];
                $age=$_POST['age'];
                $gender=$_POST['gender'];
                $address=$_POST['address'];
                $city=$_POST['city'];

              $Username=$_SESSION['email'];

  


                  $user = $_SESSION['email'];

                  $query="UPDATE `accounts` SET 
`name`='$fname',`age`='$age',`address`='$address',`city`='$city',`gender`='$gender'
                   where `email`='$user';";


                  $runner=mysqli_query($con,$query);


                  if($runner){
                    echo "<div class='btn btn-block alert-success'>Personal Details Changed</div></div><br>";





                  }
                  

                
                
             
              else{
                  echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";

                  echo "<a href='edit_profile.php'>'<div class='btn btn-block alert-info'>Click here to go back</div></a>";

              }
              

}



              ?>



</div>
<div id="accordion">


  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Edit Account Details
        </button>
      </h5>
    </div>

 

  
  <div class="form-group row">
                <div class="panel-heading">
                  <h4 class="panel-title">
                      <h3>></h3>
                    </h4>
                  </div>

                      <div class="form-group row">
<div class="container">

                      

                          <table  class="table">
<form action="" method="POST"  >

                            <tr class="">
                              <th >Your Picture</th>
                              <td>
                               


                                      </td>
                                    </tr>

                                    <tr class="">
                                      <th >Full Name</th>
                                      <td><input style="color: black;" name="fname" value="<?php  echo $data['name'] ?>" type="text" required></td>
                                    </tr>

                                    <tr >
                                      <th class="black">Age</th>
                                      <td>
                                      <input style="color: black;" name="age" value="<?php  echo $data['age'] ?>" type="text" required> </td>
                                    </tr>

                                    <tr >
                                      <th class="black">Gender</th>

                                      
                                      <td><select class="form-control" value='<?php  echo $data['gender'] ?>' name="gender" required><?php  echo $data['address'] ?>

        <option name="gender" value="male">male</option>
        <option name="gender" value="female">female</option>
          ?>  

        </select></td>
                                    </tr>

                                    <tr >
                                      <th class="black">Address</th>

                                      
                                      <td><input style="color: black;" name="address" value="<?php  echo $data['address'] ?>" type="text" required> </td>
                                    </tr>

                                    <tr >
                                      <th class="black">City</th>

                                    
                                      <td>  

                                      <input class="form-control" value='<?php  echo $data['city'] ?>' name="city" required>
        

        </select></td>
                                    </tr>

                                  


                                    <tr><th></th><td>
          <input class="btn btn-primary btn-block" type="submit" value="Update" name="upload">
                                      </td>
                                    </tr>



                                  </table>
                                  </form>
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
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
