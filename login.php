<?php 
include("connection.php");
 session_start();

if(@isset($_SESSION['email'])){

  $sessionuser=$_SESSION['email'];
  $query="SELECT * FROM `accounts` where email='$sessionuser';";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result);

  $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {


  

    header("location: welcome.php");




  }


}


if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

  $myemail = mysqli_real_escape_string($con,$_POST['email']);
  $mypass = mysqli_real_escape_string($con,$_POST['password']); 
  $mypassword=md5($mypass);
  $query="SELECT * FROM `accounts` where `email`='$myemail' AND `password`='$mypassword';";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result);

  $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {

    

   $query_update="UPDATE `accounts` SET `tries`='5' WHERE `email`='$sessionuser';";
  mysqli_query($con,$query_update);



    $runner=mysqli_query($con,$query);

    if($runner){
      session_start();

    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['user_type'] = $row['type'];
 
    $ip=$_SERVER['REMOTE_ADDR'];
    $email=$_SESSION['email']; 
mysqli_query($con,"INSERT INTO `log_stats`(`email`, `ip`) VALUES ('$email','$ip');");




if (isset($_REQUEST['remember'])){

 $cookie_time = 60 * 60 * 24 * 30; // 30 days
  $cookie_time_Onset=$cookie_time+ time();
    /*
     * Set Cookie from here for one hour
     * */
    setcookie("email", $myemail, $cookie_time_Onset);
    setcookie("password", $mypass, $cookie_time_Onset);  

}


    header("location: welcome.php");
      
    }
    else{
      


    }

  }else {
       $message ="<div class='text-center btn btn-block btn-danger'>Wrong Email or Password!</div>";
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

    <title>Schedule System</title>

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

        <div class="card card-signin my-5">
          <div class="card-body">
              <?php  if(isset($message)){echo @$message;} ?>

            <h2 class="text-center" style="color: black;">Sign In</h2>
             <hr>
            <form action="" method="post" class="form-signin">

              <div class="form-label-group">

                <input type="email" name="email" class="form-control text-center" placeholder="Email address or Username" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['email']; ?>"  required autofocus>
              </div>


              <div class="form-label-group">

                <input type="password" name="password" class="form-control text-center" placeholder="Password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>"  autocomplete="on" required>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" <?php if(isset($_COOKIE['email'])){echo "checked='checked'"; } ?>  name="remember" id="customCheck1">
                <label class="custom-control-label" for="customCheck1" style="color: gray;">Remember password</label>
              </div>

              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Sign in</button>
              <hr  class="my-4">
              <button class="btn btn-lg btn-danger btn-block text-uppercase" > Forgot Password? Click here</button>
              <button class="btn btn-lg btn-info btn-block text-uppercase" > Not Registered? Click here</button>
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
