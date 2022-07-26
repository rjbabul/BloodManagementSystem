<?php


 $name = $_POST['name'];
 $user_name = $_POST['user_name'];
 $age = $_POST['age'];
 $gender= $_POST['gender'];
 $pass = $_POST['pass'];
 $ContNo = $_POST['cont_no'];
 $blood_g = $_POST['blood_g'];
 $dist = $_POST['dist'];
 $division = $_POST['division'];
 $Occupation= $_POST['Occupation'];
 $org = $_POST['org'];
 $stat=1;

 $con = new mysqli('localhost', 'root', '', 'blood_management');

 if( $con->connect_error){
 	die('Connection Failed'.$con->connect_error) ;
 }
 else{

 	$stmt = $con->prepare("INSERT Into register(user_name, pass,name, gender,blood_group,Cont_No,stat,district, division,Occupation, organization ) VALUES(?,?,?,?,?,?,?,?,?,?,?)");

 	$stmt->bind_param('sssssiissss', $user_name,$pass, $name, $gender, $blood_g,$ContNo, $stat, $dist, $division, $Occupation, $org);

 	$stmt->execute();
    
 	$stmt->close();
 	$con->close();
 }

?>