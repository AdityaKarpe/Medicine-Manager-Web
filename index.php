<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/short.jpg" />
        <title>Medicive</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="css/style.css" type="text/css">

</head>
    <body style="background-color:#">
        <div>
           <?php
           require "./template/nav.php";
           ?>
         </div>           
           <div id="bannerImage">
               <div class="container">
                   <center>
                    
                   <div id="bannerContent">
                     <marquee behavior="" direction=""><h1>Welcome to Medicive</h1></marquee>  
                       <p>An online medicine shop!</p>
 
                       <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <a href="medicines.php" class="btn btn-danger">Shop</a>
                           <?php
                           }else{
                            ?>
                             
                       <!-- <a href="signup.php">  <button type="button" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="success">SignUp</button></a> -->
                       <a href="signup.php">  <button type="button" class="btn btn-light btn-rounded">SignUp</button></a>
                       <a href="login.php">  <button type="button" class="btn btn-light btn-rounded">Login</button></a>
                           <?php
                           }
                           ?>
                    
                   </div>
                   </center>
               </div>
           </div>
           
                      
        </div>
    </body>
</html>