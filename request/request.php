<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="reqstyle.css"  type="text/css">
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

    <div class ="container"> 
       <div class="row">
         
         <div class="col-6 left_block">
          
         </div>

         <div class="col-6">
          <form action="requ_control.php" method="post">
             <div class="log_area">
             <h1 class="text-center"><u>Request For Blood</u></h1>
                  <hr>
            <table ">  
                 <tr>
                    <td><b>Name : </b></td>
                    <td><input type="text"  name="name" required></p></td>
                 </tr>

                  <tr>
                   <td><p><b>BloodGroup : </b></td>
                   <td><select name="blood_g" required>
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

                  <tr><td></td></tr>
                  <tr><td></td></tr>
                
 
                 <tr>
                   <td><b>ContNo: </b></td>
                    <td><input type="text" name="cont_no" required> </td>
                 </tr>
  
                 <tr>
                   <td><b>Email: </b></td>
                    <td><input type="text" name="email" required> </td>
                 </tr>
                 <tr>
                   <td><b>Place: </b></td>
                    <td><input type="text" name="place" required> </td>
                 </tr>
  
  

            </table>

             <p>
              <button type="submit" class="btn btn-outline-dark  " style="margin-left:120px;margin-top: 30px; padding: 6px 23px; font-size:18px;"><b>Request</b>

              </button>
             
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