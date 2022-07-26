<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="stelex.css"  type="text/css">
        <link rel="stylesheet" href="registyle.css"  type="text/css">
        

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

    <div class ="container"> 
       <div class="row">
         
         <div class="col-6 left_block">
          
         </div>

         <div class="col-6">
           <form action="reg_control.php" method="post">
           
             <div class="log_area">
             <h1 class="text-center"><u>Registration</u></h1>
                  <hr>
            <table>  
                 <tr>
                    <td><b>Name : </b></td>
                    <td><input type="text"  name="name" required></p></td>
                 </tr>

                 <tr>
                    <td><b>User Name : </b></td>
                    <td><input type="text"  name="user_name" required></p></td>
                 </tr>
                 <tr>
                   <td><b>Gender : </b></td>
                   <td><input type="radio" name="gender" value="male" checked > <b  >Male </b>
                      <input type="radio" name="gender" value="female"><b  > Female </b>
                    </td>
                 </tr>

                  <tr>
                   <td><p><b>BloodGroup</b></td>
                   <td><select name="blood_g" required >
                     <option value="A+">A+</option>
                     <option value="A-">A-</option>
                     <option value="B+">B+</option>
                     <option value="B-">B-</option>
                     <option value="AB+">AB+</option>
                     <option value="AB-">AB-</option>
                     <option value="O+">O+</option>
                     <option value="O-">O-</option>
                   </select></td>
                 </tr>



                

                 <tr>
                   <td><b>Password : </b></td>
                    <td><input type="text"  name="pass" required></td>
                 </tr>
            </table>

             <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
             </div>
             <p>
              <button type="submit" class="btn btn-outline-dark  " style="margin-left:100px; padding: 6px 23px; font-size:18px;"><b>Registration</b>

              </button>
              <p><a href="#" style="text-decoration: none; color:blue;">Forgotter Passowd</a></p>
              <p>Already Have Account ? <a style="text-decoration: none; color:blue; " href="http://localhost/blood%20management%20system/login/login.php">Log in</a></p></p>
           </div>
       </form>
     
     </div>
    
    </div>
</div>
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