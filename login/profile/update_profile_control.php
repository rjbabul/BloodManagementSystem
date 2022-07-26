<?php
session_start();
$stat= $_POST['stat'];
$ContNo =  $_POST['cont_no'];
$imag=  $_POST['Upload'];
$age = $_POST['age'];
$dist= $_POST['dist'];
$divi= $_POST['division'];
$occ = $_POST['Occupation'];
$org = $_POST['org'];

$con = new mysqli('localhost', 'root', '', 'blood_management');

 if( $con->connect_error){
 	die('Connection Failed'.$con->connect_error) ;
 }
 else{
 	$st =  "UPDATE profile p, register r   set   p.image='image/$imag' , p.occ ='$occ',
 	   p.con ='$ContNo'  ,p.dist = '$dist', p.org= '$org' ,p.age='$age' ,p.divi = '$divi'  
 	   where p.username= r.user_name and p.username='" . $_SESSION["email"] . "'";

 	if($con->query($st)== TRUE){
 	 
 	  mysqli_close($con);
 	  	echo "<script>location.replace('myprofile.php');</script>";
 	

 	  
 	}
 }


?>