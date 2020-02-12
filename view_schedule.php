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


  echo "<!-- DataTables Example -->
          <div class='card mb-3'>
            <div class='card-header'>
              <i class='fas fa-table'></i>
              Schedule</div> (Click the name of the person to view their entire schedule individually)
            <div class='card-body'>
              <div class='table-responsive'>
                <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                  <thead>
                    <tr>
                      <th>Staff Name</th>
                      <th>Student Name</th>
                      <th>Course Name</th>
                      <th>Subject Name</th>
                      <th>Room </th>
                      <th>Working Day</th>
                      <th>Time From</th>
                      <th>Time To</th>
                      <th>Delete</th>
                      <th>Edit</th>

                    
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                 <th>Staff Name</th>
                      <th>Student Name</th>
                      <th>Course Name</th>
                      <th>Subject Name</th>
                      <th>Room </th>
                      <th>Working Day</th>
                      <th>Time From</th>
                      <th>Time To</th>
                      <th>Delete</th>
                      <th>Edit</th>
                    </tr>
                  </tfoot>
                  <tbody>";
                   
                   

              $result=mysqli_query($con,"select * from schedule;");

while($row=mysqli_fetch_assoc($result)){
              
echo "  <tr>
                            <td><a href='schedule.php?name= ".$row['id']."'</a>".$row['name']."</td>
                            <td> ".$row['student_name']."</td>
                            <td> ".$row['meeting_type']."</td>
                            <td> ".$row['subject_name']."</td>
                            <td> ".$row['room_name']."</td>
                            <td> ".$row['day']."</td>
                            <td> ".$row['from_time']."</td>
                            <td> ".$row['to_time']."</td>
                            <td> <a href='delete.php?id=".$row['id']."'>Delete</a></td>
                            <td> <a href='delete.php?id=".$row['id']."'>Edit</a></td>";
                            

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
