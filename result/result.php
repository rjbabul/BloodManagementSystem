<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="search_style.css"  type="text/css">
        <link rel="stylesheet" href="stelex.css"  type="text/css">

        
      <title>Blood management system</title>
    </head>

    <body  class="body">

    <!-- Start Head -->
     <div class="headd">
    
    </div>
     <div class ="tp wrap nav_bg ">
   <div class="container wrap">
      <ul class="nav">

          <li><a href="http://localhost/bloodmanagementsystem/index.php">Home</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/registration/reg_page.php">Donor Registration</a> </li> 
        <li><a href="http://localhost/bloodmanagementsystem/search/search.php">Search For Donor</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/login/login.php">Log In</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/result/result.php">All Donor</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/request/request.php">Request For Blood</a> </li>
   </ul>

   </div>

   </div>
    <!-- End Head  -->

    <!-- Start Body -->
  <div class="container">
  <div class="row">
      
       <?php
 
 $con = new mysqli('localhost', 'root', '', 'blood_management');
 
 if( $con->connect_error){
  die('Connection Failed'.$con->connect_error) ;
 }
 else{
     $sql = "SELECT  r.user_name ,r.name , r.blood_group, p.org ,p.con, p.occ,p.image,r.stat FROM register r, profile p where  r.user_name= p.username and r.stat='1'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    ?>
     
    <div class="col-sm">
       <div class="card" style="width: 220px;">
  <img  src="<?php echo  $row['image'];?>"   height="190" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['name'];?></h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Phone: </b><b style="color: blue;"><?php echo '0'.$row['con'];?></b></li>
    <li class="list-group-item"><b>BloodGroup: </b><b style="color: blue;"><?php echo  $row['blood_group'];?></b></li>
    <li class="list-group-item"><b>Email: </b><b style="color: blue;"><?php echo $row['user_name'];?></b></li>
    <li class="list-group-item"><b>Occupation: </b><b style="color: blue;"><?php echo $row['occ'];?></b> </li>
  </ul>
  
</div>
    
</div>
   
<?php
         
    }
} else {
    echo "0 results";
}
$con->close();
 }

?>
</div>
</div>

    <!-- End Body  -->

    <!-- Start Footer -->
  <div class="foot" >
       
     <div class="row">
       
       <div class="col-2  foot_left wrap" >
          
       </div>
       <div class="col-10 foot_right ">
           <h1>Blood Donor , Life Saver</h1>
       </div>

     </div>
   
    </div>
    <!-- End Footer  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>