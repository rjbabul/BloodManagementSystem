<?php

 $name = $_POST['name'];
 $ContNo = $_POST['cont_no'];
 $blood_g = $_POST['blood_g'];
 $mail = $_POST['email'];
 $place = $_POST['place'];
  
 $con = new mysqli('localhost', 'root', '', 'blood_management');

 if( $con->connect_error){
 	die('Connection Failed'.$con->connect_error) ;
 }
 else{

 	$stmt = $con->prepare("INSERT Into request( name, BloodGroup,cont, email,place ) VALUES(?,?,?,?,?)");

 	$stmt->bind_param('sssss',$name, $blood_g ,$ContNo,$mail,$place );
      
 	$stmt->execute();
    
 	$stmt->close();
 	$con->close();
 	 echo "<script>location.replace('request.php');</script>"; 
 }

?>