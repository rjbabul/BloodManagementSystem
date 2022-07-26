<?php


 $name = $_POST['name'];
 $user_name = $_POST['user_name'];
  
 $gender= $_POST['gender'];
 $pass = $_POST['pass'];
  
 $blood_g = $_POST['blood_g'];
  
 $stat=1;

 $con = new mysqli('localhost', 'root', '', 'blood_management');

 if( $con->connect_error){
 	die('Connection Failed'.$con->connect_error) ;
 }
 else{

 	$stmt = $con->prepare("INSERT Into register(user_name, pass,name, gender,blood_group,stat ) VALUES(?,?,?,?,?,?)");
	$st = $con->prepare("INSERT Into profile(username ) VALUES(?)");

	$st->bind_param('s', $user_name);
	$st->execute();
    
 	$st->close();
 	$stmt->bind_param('sssssi', $user_name,$pass, $name, $gender, $blood_g, $stat);

 	$stmt->execute();
    
 	$stmt->close();
 	$con->close();
 	 echo "<script>location.replace('http://localhost/bloodmanagementsystem/index.php');</script>";
 }

?>