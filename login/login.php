

<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="loginstyle.css"  type="text/css">
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

        <li><a href="http://localhost/bloodmanagementsystem/index.php">Home</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/registration/reg_page.php">Donor Registration</a> </li> 
        <li><a href="http://localhost/bloodmanagementsystem/search/search.php">Search For Donor</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/login/login.php">Log In</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/result/result.php">All Donor</a> </li>
        <li><a href="http://localhost/bloodmanagementsystem/request/request.php">Request For Blood</a> </li>
   </ul>

   </div>

   </div>
 
    </div>
    <!-- End Head  -->

    <!-- Start Body -->

    <div class ="container"> 
       <div class="row">
         
         <div class="col-6 left_block">
          
         </div>

         <div class="col-6">
           
         <div class="log_area">
          <form action="login_submit.php" method="post"">
         <h1 class="text-center"><u>Donor Log in</u></h1>
              <hr>
         <p><b>User Name : </b><br><br>
         <input type="text"   name="user_name"></p>

         <p><b>Password : </b><br><br>
         <input type="password"  name="pass"></p> 
        <br>
         <p><button type="submit" name= "LogIn" class="btn btn-outline-dark  " style="margin-left:100px; padding: 6px 23px; font-size:18px;"><b>LogIn</b></button>
          <p><a href="#" style="text-decoration: none; color:blue;">Forgotter Passowd</a></p>
          <p>No Account ? <a  style="text-decoration: none; color:blue; "href="http://localhost/blood%20management%20system/registration/reg_page.php" >Registration</a></p>
       
         </form>
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