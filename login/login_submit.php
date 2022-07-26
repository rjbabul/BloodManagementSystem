<?php

 session_start();
 if(isset($_POST["LogIn"])){
 	$user_name = $_POST['user_name'];
    $pass = $_POST['pass'];
  
  
 $con = new mysqli('localhost', 'root', '', 'blood_management');

 if( $con->connect_error){
 	die('Connection Failed'.$con->connect_error) ;
 }
 else{
    $count = 0;
    $res = mysqli_query($con,"SELECT * from register where user_name='$user_name' && pass='$pass'");

    $count = mysqli_num_rows($res);
  if($count==0){
  	 
    ?>
    <div class="alert alert-danger ">
    	<string> Invalid</string>User UserName or Password.
    </div>
    <?php
  }
  else{

      
  	    	$_SESSION["email"]= $_POST["user_name"];
           
           echo "<script>location.replace('profile/myprofile.php');</script>";
  	 
  	 
  }


 } 

 }

?>