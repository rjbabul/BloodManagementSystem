    

<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
       
        <link rel="stylesheet" href="stelex.css"  type="text/css">
         <link rel="stylesheet" href="profilestyle.css"  type="text/css">
  

      <title>Blood management system</title>
    </head>

     <!-- Start Head -->

    <body  class="body">
    <div class="headd">
    
    </div>
   
    <div class ="head box"> 
      <div class ="tp wrap nav_bg ">
   <div class="container wrap">
     <ul class="nav">

       <li><a href ="http://localhost/bloodmanagementsystem/login/profile/myprofile.php">Profile</a></li>
        <li><a href="http://localhost/bloodmanagementsystem/login/profile/update_profile.php">Update Profile</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/login/profile/stat.php">Donor Status</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/login/profile/change.php">change Password</a> </li> 
        <li><a href="http://localhost/bloodmanagementsystem/login/profile/request.php">See Request</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/index.php">Log Out</a> </li>
   </ul>

   </div>

   </div>
 
    </div>
    <!-- End Head  -->

    <!-- Start Body -->
    
    <div class="container tbl">
 
    
        <table border="1" style="text-align: center;" >
       <tr> 
        <th>name</th>
        <th>BloodGroup</th>
        <th>contact no</th>
        <th>email</th>
        <th>place</th>
       </tr>
       <?php
 
 $con = new mysqli('localhost', 'root', '', 'blood_management');
 
 if( $con->connect_error){
  die('Connection Failed'.$con->connect_error) ;
 }
 else{
    $sql = "SELECT * FROM request  ";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    ?>
     
     <tr>
       <td><?php echo $row['name']?></td>
       <td><?php echo $row['BloodGroup']?></td>
       <td><?php echo $row['cont']?></td>
       <td><?php echo $row['email']?></td>
       <td><?php echo $row['place']?></td>
     </tr>
   
<?php
         
    }
} else {
    echo "0 results";
}
$con->close();
 }

?>
</table>
 
   
</div>
   
    <!-- End Body  -->
    <!-- Start Foot -->
    <div class="foot">
       
     <div class="row">
       
       <div class="col-2  foot_left wrap" >
          
       </div>
       <div class="col-10 foot_right ">
           <h1>Blood Donor , Life Saver</h1>
       </div>

     </div>
   
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>