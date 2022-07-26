 <?php
    session_start();
   $con = new mysqli('localhost', 'root', '', 'blood_management');
  
   

  $s = "SELECT  r.user_name ,r.name , r.blood_group,r.gender,p.dist, p.divi, p.org ,p.con, p.occ,p.image,r.stat FROM register r, profile p where  r.user_name='" . $_SESSION["email"] . "'   and  p.username='" . $_SESSION["email"] . "' ";

  $q=mysqli_query($con,$s);
  $r=mysqli_num_rows($q);
  
  $data=mysqli_fetch_array($q);

   $name = $data['name'];
   $user_name = $data['user_name'];
    
   $gender=$data['gender'];
    
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
        <link rel="stylesheet" href="updatstyle.css"  type="text/css">
        <link rel="stylesheet" href="stelex.css"  type="text/css">


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
    
    <div class ="container"> 
       <div class="row">
         
         <div class="col-6 left_block">
          <img src="<?php echo $img;?>"width="400" height="400">
         </div>

         <div class="col-6 information">
         <form action="update_profile_control.php" method="post">
             <div class="log_area">
             <h1 class="text-center"><u>Upadate</u></h1>
                  <hr>
            <table >  
                  
               
                  <tr><td></td></tr>
                  <tr><td></td></tr>
                  <tr>
                    <td><b>Age : </b></td>
                    <td><input type="number"  name="age" required="no blank box"></td>
                 </tr>
                
                 <tr>
                   <td><p><b>Cont No : </b></td>
                    <td><input type="text" name="cont_no" required="no blank box"> </td>
                 </tr>


                 <tr>
                   <td><p><b>District : </b></td>
                    <td><input type="text" name="dist" required="no blank box"> </td>
                 </tr>

                 <tr>
                   <td><p><b>Division : </b></td>
                      <td><select name="division" required="no blank box">
                       <option value="Barisal">Barisal</option>
                       <option value="Chittagong">Chittagong</option>
                       <option value="Dhaka">Dhaka</option>
                       <option value="Khulna">Khulna</option>
                       <option value="Mymensingh">Mymensingh</option>
                       <option value="Rajshahi">Rajshahi</option>
                       <option value="Rangpur">Rangpur</option>
                       <option value="Sylhet">Sylhet</option>
                     </select></td>
                 </tr>

                 <tr>
                   <td><p><b>Occupation : </b></td>
                    <td><input type="text" name="Occupation" required="no blank box"> </td>
                 </tr>

                 <tr>
                   <td><p><b>Organization : </b></td>
                    <td><input type="text" name="org" required="no blank box"> </td>
                 </tr>                
  
                 <tr>
                   <td><b>Upload Image</b></td>
                   <td><input type="file" name="Upload" id="Upload"  required="no blank box"></td>

                 </tr> 

            </table>

             <p>
              <button type="submit" class="btn btn-outline-dark  " style="margin-left:210px;margin-top: 30px; padding: 6px 23px; font-size:18px;"><b>Update</b>

              </button>
             
           </div>
       </form>

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