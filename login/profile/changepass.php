<?php
session_start();
/*Name :	
Donate Status:	
Age :	
Gender:	 Male  Female
ContNo:	
Upload Image*/
 
$pass= $_POST['pass'];
 

$con = new mysqli('localhost', 'root', '', 'blood_management');

 if( $con->connect_error){
 	die('Connection Failed'.$con->connect_error) ;
 }
 else{
  
 	$st =  "UPDATE register set   pass ='$pass' where user_name='" . $_SESSION["email"] . "'" ;
 	if($con->query($st)== TRUE){
 	 
 	  mysqli_close($con);
 	   
 	      
 	  	echo "<script>location.replace('myprofile.php');</script>";
 	

 	  
 	}
 }


?>