<?php 
include("connection.php");

session_start();

if(count($_POST)>0){
     
      $name=$_POST['name'];
      $cell=$_POST['cell'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $pass=md5($password);
      $type=$_POST['type'];

  $code=$_POST['code'];



      $query="INSERT INTO `accounts`(`name`, `email`, `password`, `cell phone`, `type`) VALUES ('$name','$email','$pass','$cell','$type')";


      $runner=mysqli_query($con,$query);




      if($type='employee'  and $runner  ){
      
        $message="<a href='login.php'><div class='text-center btn btn-block btn-success'>Registration Complete! Click here to Log in</div></a>";

            }
      else{
       $message ="<div class='text-center btn btn-block btn-danger'>Error! An account with the same Email already exists</div>";

      }

if($type=='staff' and $code=='1234' and $runner){
  $message="<a href='login.php'><div class='text-center btn btn-block btn-success'>Registration Complete! Click here to Log in</div></a>";

}




    }


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body id="page-top">

      <?php 

    include('navbar.php');
    ?>


    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
      
         <div class="container">

    <div class="row">

      <div class="col-sm-9 col-md-12 col-lg-5 mx-auto">
              <?php if(isset($message)){echo "<button class='btn btn-info'>".@$message."</button>";} ?>

        <div class="card card-signin my-5">
          <div class="card-body">



            <h5 class="card-title text-center" style="color: black;">Register Account</h5>
            <form  action="" method="post"class="form-signin">
              
               <div class="form-label-group">
                <input type="text" name="name"  class="form-control text-center" placeholder="Full Name" required autofocus>
              </div>
              
              

              <div class="form-label-group">
                <input type="email" name="email" class="form-control text-center" placeholder="Email address" required >
              </div>

              <div class="form-label-group">
                <input type="password" name="password" class="form-control text-center" placeholder="Password" required>
              </div>

               <div class="form-label-group">
                <input type="text" name="cell" class="form-control text-center" placeholder="Cell Phone Number" required >
              </div>

               <div >
                <label  style="color: black;">Type</label>

                <select name="type"  class="form-group">
  <option name="type"  value="staff">Staff</option>
  <option name="type"  value="employee">Employee</option>
</select>
              </div>
              <br>

<div class="form-group">
                <label style="color: black;">In case Staff is selected enter the special code</label>

                <input  type="password" name="code" class="form-control" placeholder="code" >
              </div>


       
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Complete Sign Up</button>
              <hr  class="my-4">
              <button class="btn btn-lg btn-info btn-block text-uppercase" >Already a member? click here to sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    </header>




<?php 
  include('contact_us.php');
  include('footer.php');

 ?>





    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
