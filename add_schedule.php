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
                $course_name=$_POST['course_name'];
                $course_name=$_POST['course_name'];
                $course_name=$_POST['course_name'];
                $course_name=$_POST['course_name'];
                $course_name=$_POST['course_name'];
                $course_name=$_POST['course_name'];
                $course_name=$_POST['course_name'];
                $course_name=$_POST['course_name'];
                $course_name=$_POST['course_name'];
                $course_name=$_POST['course_name'];
              

              $Username=$_SESSION['email'];

  


                  $user = $_SESSION['email'];

                  $query="INSERT INTO `course_name`( `course_name`, `course_description`) VALUES ('$course_name','$course_description')";


                  $runner=mysqli_query($con,$query);


                  if($runner){
                    echo "<div class='btn btn-block alert-success'>New Course Successfully Added!</div></div><br>";





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
          Add a New Course
        </button>
      </h5>
    </div>

 
<div class="container">

  
  <div class="form-group">


                      

                          <table  class="table">
<form action="" method="POST"  >

                            

















                                    <tr>
                                     

                                      <th >Staff Name</th>
                                      <td>

 <select class="form-control" name="staff_name" required readonly>

                          <?php 


                          $result2=mysqli_query($con,"SELECT * FROM accounts where type='staff'  ORDER BY LOWER(name)");




                          while($data = mysqli_fetch_assoc($result2)){


                            echo "<option value='".$data['name']."' >";
                            echo $data['name'];
                            echo "";
                            echo  "</option>";


                          }

                          ?>  

                        </select>

                                      </td>
                                    </tr>












     <tr>
                                     

                                      <th >Student Name</th>
                                      <td>

 <select class="form-control" name="student_name" required readonly>

                          <?php 


                          $result2=mysqli_query($con,"SELECT * FROM students ORDER BY LOWER(student_name)");




                          while($data = mysqli_fetch_assoc($result2)){


                            echo "<option value='".$data['student_name']."' >";
                            echo $data['student_name'];
                            echo "";
                            echo  "</option>";


                          }

                          ?>  

                        </select>

                                      </td>
                                    </tr>

















                                    <tr>
                                     

                                      <th >Course Name</th>
                                      <td>

 <select class="form-control" name="course_name" required readonly>

                          <?php 


                          $result2=mysqli_query($con,"SELECT `course_name` FROM `course_name`  ORDER BY LOWER(course_name)");




                          while($data = mysqli_fetch_assoc($result2)){


                            echo "<option value='".$data['course_name']."' >";
                            echo $data['course_name'];
                            echo "";
                            echo  "</option>";


                          }

                          ?>  

                        </select>

                                      </td>
                                    </tr>








  
                                    <tr>
                                     

                                      <th >Subject</th>
                                      <td>

 <select class="form-control" name="subject" required readonly>

                          <?php 


                          $result2=mysqli_query($con,"SELECT subject_name FROM `subject_name` ORDER BY LOWER(subject_name)");




                          while($data = mysqli_fetch_assoc($result2)){


                            echo "<option value='".$data['subject_name']."' >";
                            echo $data['subject_name'];
                            echo "";
                            echo  "</option>";


                          }

                          ?>  

                        </select>

                                      </td>
                                    </tr>








   <tr>
                                     

                                      <th >Room</th>
                                      <td>

 <select class="form-control" name="subject" required readonly>

                          <?php 


                          $result2=mysqli_query($con,"SELECT room_name FROM `rooms` ORDER BY LOWER(room_name)");




                          while($data = mysqli_fetch_assoc($result2)){


                            echo "<option value='".$data['room_name']."' >";
                            echo $data['room_name'];
                            echo "";
                            echo  "</option>";


                          }

                          ?>  

                        </select>

                                      </td>
                                    </tr>





               





   <tr>
                                     

                                      <th >Working Day</th>
                                      <td>

 <select class="form-control" name="day" required readonly>

                          <?php 


                          $result2=mysqli_query($con,"SELECT `day` FROM `working_days` ORDER BY LOWER(id) ASC");




                          while($data = mysqli_fetch_assoc($result2)){


                            echo "<option value='".$data['day']."' >";
                            echo $data['day'];
                            echo "";
                            echo  "</option>";


                          }

                          ?>  

                        </select>

                                      </td>
                                    </tr>



                                   



   <tr>
                                     

                                      <th >Working Time From</th>
                                      <td>

 <select class="form-control" name="time_to" required readonly>

                          <?php 


                          $result2=mysqli_query($con,"SELECT `from` FROM `working_time` ORDER BY LOWER(`from`)");




                          while($data = mysqli_fetch_assoc($result2)){


                            echo "<option value='".$data['from']."' >";
                            echo $data['from'];
                            echo "";
                            echo  "</option>";


                          }

                          ?>  

                        </select>

                                      </td>
                                    </tr>


           







   <tr>
                                     

                                      <th >Working Time To</th>
                                      <td>

 <select class="form-control" name="time_to" required readonly>

                          <?php 


                          $result2=mysqli_query($con,"SELECT `to` FROM `working_time` ORDER BY LOWER(`to`)");




                          while($data = mysqli_fetch_assoc($result2)){


                            echo "<option value='".$data['to']."' >";
                            echo $data['to'];
                            echo "";
                            echo  "</option>";


                          }

                          ?>  

                        </select>

                                      </td>
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
