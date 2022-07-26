<?php
session_start();
/*Name :	
Donate Status:	
Age :	
Gender:	 Male  Female
ContNo:	
Upload Image*/
 
$pass= $_POST['stat'];
$con = new mysqli('localhost', 'root', '', 'blood_management');

 if( $con->connect_error){
 	die('Connection Failed'.$con->connect_error) ;
 }
 else{
  
 	if($_POST['stat']){
 		$st =  "UPDATE register set   stat ='$pass' where user_name='" . $_SESSION["email"] . "'" ;
 	if($con->query($st)== TRUE){
 	 
 	  mysqli_close($con);
 	   
 	      
 	  	echo "<script>location.replace('stat.php');</script>";
 	

 	  
 	}
 	}
 	else {
 		echo "<script>location.replace('stat.php');</script>";
 	}
 }


?>