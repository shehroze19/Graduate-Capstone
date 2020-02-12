<?php
include('connection.php');
session_start();
@include('session.php');
@include('admin_checker.php');

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
            <li class='breadcrumb-item active'>Scheduling System</li>
          </ol>




  




  
  <div class="form-group row">
               




              <?php 
              if(count($_POST)>0){
                $student_name=$_POST['student_name'];
               
              

              $Username=$_SESSION['email'];

  


                  $user = $_SESSION['email'];

                  $query="INSERT INTO `students`( `student_name`) VALUES ('$student_name')";


                  $runner=mysqli_query($con,$query);


                  if($runner){
                    echo "<div class='btn btn-block alert-success'>New Student Successfully Added!</div></div><br>";





                  }
                  

                
                
             
              else{
                  echo "<div class='btn btn-block alert-danger'>Error Please try again</div>";


              }
              

}



              ?>



</div>
<div id="accordion">


  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Add a New Student
        </button>
      </h5>
    </div>

 
<div class="container">

  
  <div class="form-group">


                      

                          <table  class="table">
<form action="" method="POST"  >

                            

                                    <tr>
                                      <th >Student Name</th>
                                      <td><input style="color: black;" class="form-control" name="student_name"  placeholder="Student Name"  type="text" required></td>
                                    </tr>

                                 
                            

                                 

                                  


                                    <tr><th></th><td>
          <input class="btn btn-primary btn-block" type="submit" value="Submit" >
                                      </td>
                                    </tr>



                                  </table>
                                  </form>
                      </div>
</div>


                    </div>

  <hr>

  <div class="container row">
<div class="col-md-6">Already Added Students</div>
<div class="col-md-6">
  <select class="form-control" name="to">

                          <?php 


                          $result2=mysqli_query($con,"SELECT student_name FROM `students` ORDER BY LOWER(student_name)");




                          while($data = mysqli_fetch_assoc($result2)){


                            echo "<option>";
                            echo $data['student_name'];
                            echo "";
                            echo  "</option>";


                          }

                          ?>  

                        </select>
<br>
</div>


</div>



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
