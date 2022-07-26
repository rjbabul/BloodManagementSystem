   <?php
    session_start();
   $con = new mysqli('localhost', 'root', '', 'blood_management');
  
   

  $s = "SELECT  r.user_name ,r.name ,p.age, r.blood_group,r.gender,p.dist, p.divi, p.org ,p.con, p.occ,p.image,r.stat FROM register r, profile p where  r.user_name='" . $_SESSION["email"] . "'   and  p.username='" . $_SESSION["email"] . "' ";

  $q=mysqli_query($con,$s);
  $r=mysqli_num_rows($q);
  
  $data=mysqli_fetch_array($q);

   $name = $data['name'];
   $user_name = $data['user_name'];
    
   $gender=$data['gender'];
  $age = $data['age'];
   $ContNo =  $data['con'];
   $blood_g = $data['blood_group'];
   $dist = $data['dist'];
   $division = $data['divi'];
   $Occupation= $data['occ'];
   $org = $data['org'];
   $img = $data['image'];
   $stat=$data['stat'];
    
  mysqli_close($con);

?> 

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
        <li><a href="http://localhost/bloodmanagementsystem/login/profile/update_profile.php">Donor Status</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/login/profile/change.php">change Password</a> </li> 
        <li><a href="http://localhost/bloodmanagementsystem/login/profile/request.php">See Request</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/index.php">Log Out</a> </li>
   </ul>

   </div>

   </div>
 
    </div>
    <!-- End Head  -->

    <!-- Start Body -->
    
    <div class ="container"> 
       <div class="row">
         
         <div class="col-6 left_block">
          <img src="<?php echo $img;?>"width="400" height="400">
         </div>

         <div class="col-6 information">
         <table>
              <tr>
                  <th>
                     <b>Name: </b>
                  </th>

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo $name; ?> </div>
                  </td>
              </tr>

              <tr>
                  <th>
                     <b>Email: </b>
                  </th>

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo $user_name ;?> </div>
                  </td>
              </tr>

              <tr>
                  <th>
                     <b>Blood Group: </b>
                  </th>

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo $blood_g; ?> </div>
                  </td>
              </tr>

              <tr>
                  <th>
                     <b>Phone no: </b> 

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo  $ContNo; ?> </div>
                  </td>
              </tr>
              <tr>
                  <th>
                     <b>Age: </b>
                  </th>

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo $age; ?> </div>
                  </td>
              </tr>

              <tr>
                  <th>
                     <b>Gender: </b>
                  </th>

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo $gender; ?> </div>
                  </td>
              </tr>


              <tr>
                  <th>
                     <b>Occupation: </b>
                  </th>

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo $Occupation; ?> </div>
                  </td>
              </tr>

              <tr>
                  <th>
                     <b>Organization: </b>
                  </th>

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo $org ;?> </div>
                  </td>
              </tr>

               <tr>
                  <th>
                     <b>District : </b>
                  </th>

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo $dist ;?> </div>
                  </td>
              </tr>

               <tr>
                  <th>
                     <b>Division: </b>
                  </th>

                  <td>
                      <div style="color:blue; margin-left:10px;"> <?php echo $division; ?> </div>
                  </td>
              </tr>





         </table>

     </div>
    
    </div>
</div>
</div>
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