<?php
   include('connection.php');

  
   
   $user_check = $_SESSION['email'];
   $_SESSION['email']=null;

   $ses_sql = mysqli_query($con,"SELECT * FROM `accounts` WHERE `email`='$user_check'");
   
   
   $row = mysqli_fetch_array($ses_sql);
   
   $login_session = $row['email'];
   $type = $row['type'];
   $_SESSION['type']=$type;

   $_SESSION['email']=$login_session;
   if(!isset($_SESSION['email']) || $_SESSION['type']!='admin'){
   	header("location: login.php");
   }

 



 

?>