<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="welcome.php">Welcome <?php echo  $_SESSION['name']; ?></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <div class="input-group-append">
          
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        

      

  <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="btn btn-block btn-danger">  View etc</div>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="">etc</a>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="">etc</a>
           
          </div>
        </li>

       
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">0</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Check Inbox</a>
           
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="login_activity.php">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="welcome.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <! –– drop down button for account settings -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Account Settings</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Profile</h6>
            <a class="dropdown-item" href="profile.php">View Profile</a>
            <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Password</h6>
            <a class="dropdown-item" href="update_password.php">Change Password</a>
            <a class="dropdown-item" href="logout.php">Log Out</a>
          </div>
        </li>


        <! –– drop down button for Scheduling System -->


<?php 


    $total_staff_query=mysqli_query($con,"SELECT * FROM accounts where type='staff'");
    $total_staff = mysqli_num_rows($total_staff_query);



    $total_courses_query=mysqli_query($con,"SELECT * FROM meeting_type");
    $total_courses = mysqli_num_rows($total_courses_query);


    $total_subjects_query=mysqli_query($con,"SELECT * FROM subject_name");
    $total_subjects = mysqli_num_rows($total_subjects_query);


    $total_room_query=mysqli_query($con,"SELECT * FROM rooms");
    $total_rooms = mysqli_num_rows($total_room_query);


    $total_room_students=mysqli_query($con,"SELECT * FROM students");
    $total_students = mysqli_num_rows($total_room_students);

    $total_working_days=mysqli_query($con,"SELECT * FROM working_days");
    $total_days = mysqli_num_rows($total_working_days);

 

 



 ?>


  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Scheduling System</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header text-center">Schedule Options</h6>
            <hr>
            
            <a class="dropdown-item text-center" href="profile.php">View Staff <span class="badge badge-primary"><?php echo $total_staff; ?></span></a>



            <hr>
            <a class="dropdown-item text-center" href="view_schedule.php">View Schedule</a>


           <hr>
            <a class="dropdown-item text-center" href="view_schedule.php">View Calender</a>

            <hr>
            <a class="dropdown-item text-center" href="add_schedule.php">Add a New Schedule</a>


            <hr>

            <a class="dropdown-item text-center" href="add_new_course.php">Add Meeting Type <span class="badge badge-primary"><?php echo $total_courses; ?></span></a>

            <hr>


            <a class="dropdown-item text-center" href="add_new_subject.php">Add a New Subject <span class="badge badge-primary"><?php echo $total_subjects; ?></span></a>

            <hr>

            <a class="dropdown-item text-center" href="add_room.php">Add a New Room <span class="badge badge-primary"><?php echo $total_rooms; ?></span></a>

            <hr>

            <a class="dropdown-item text-center" href="add_student.php">Add a New Student <span class="badge badge-primary"><?php echo $total_students; ?></span></a>

            <hr>


            <a class="dropdown-item text-center" href="add_day.php">Add a Day <span class="badge badge-primary"><?php echo $total_days; ?></span></a>

            <hr>

            <a class="dropdown-item text-center" href="timing.php">Add Timing</a>



        




          </div>
        </li>


     
      </ul>
<?php 
include('session.php');
 ?>
     


    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>





    <!-- Search Modal-->
    <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Search</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
           
          </div>
        </div>
      </div>
    </div>