 <?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/short.jpg" />
        <title>Medicive</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Font Awesome -->
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
    <link rel="stylesheet" href="css/Style.css" />
    <script src="js/mdb.min.js"></script>
    
    </head>
    <body>
        <div>
            <?php
  //require "./template/header.php";
  ?>

<nav class="navbar navbar-expand-lg ">
  <!-- Container wrapper Begin -->
  <div class="container-fluid">
    <a class="navbar-brand" href="/">OMS</a>
    

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarRightAlignExample"
      aria-controls="navbarRightAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <!-- <i class="fas fa-bars"></i> -->
    </button>

    <!-- Collapsible wrapper Begin -->
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
     
      <!-- Navigation links Begin -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="admin.php">Admin</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
        </li>
      </ul>
      <!-- Navigation links -->
    </div>
    <!-- Collapsible wrapper End -->
  </div>
  <!-- Container wrapper End-->
</nav>
            <br><br>
            <!-- <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1> -->
                        <!-- <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true" pattern=".{10,10}">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                        </form> -->


                        <!-- Section heading -->
    <h3 class="font-weight-bold text-center mb-4"style="color: #202020;padding-top: 20px;">Register Urself</h3>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto pb-5">To Become Part of Ours Family Join Us and be a family Member</p>

    <!-- Grid row -->
    <!-- <div class="row" > -->

      <!-- Grid column -->
      <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4" style="margin-left:30%;margin-right: 30%;">


        <!-- Form with header -->
        <div class="card" style="background-color: #F3F3F3" ">
        <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
            <!-- Header -->
            <div class="form-header blue accent-1">
              <h3 class="mt-2"style="color: #3C1874" ><i class="fas fa-envelope" style="color: #3C1874;"></i> Join Us Register :</h3>
            </div>
            <p class="dark-grey-text">Join Us and be a family Member.</p>
            <!-- Body -->
            <form method="post" action="user_registration_script.php">
              <i class="fas fa-user prefix grey-text"></i>
              <label for="form-name">Name</label>
              <input type="text" id="form-name" name="name" class="form-control"required="true">
            
            <div class="md-form">
              <i class="fas fa-envelope prefix grey-text"></i>
              <label for="form-email">Email</label>
              <input type="text" id="form-email" name="email" class="form-control"required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </div>

            <div class="md-form">                
              <i class="fas fa-lock prefix grey-text"></i>
              <label class="form-label" for="typePassword">Password</label>
              <input type="password" id="typePassword" class="form-control" name="password"  required="true" pattern=".{6,}" />
            </div>
            <div class="md-form">                
            <i class="fas fa-phone prefix grey-text"></i>
            <label class="form-label" for="typePhone">Phone number</label>
            <input type="tel" id="typePhone" class="form-control"name="contact"  required="true" pattern=".{10,10}" />
            </div>
            <div class="md-form">  
            <i class="fas fa-city prefix grey-text"></i>
              <label for="form-name">City</label>
              <input type="text" id="form-name" name="city" class="form-control"required="true"name="city" required="true">
            </div>
               <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                <label for="form-text">Address</label>
                <textarea id="form-text" class="form-control md-textarea" rows="3" name="address" required="true"></textarea>
              </div>

                          
            <div class="text-center" style="padding-top:10px">
              <input class="btn btn-success" type="submit" value="Sign Up" style="color: #ffffff;">
              <input class="btn btn-danger"  type="reset"   value="Reset" style="color: #ffffff;">
            </div>
            <p class="text-center text-muted mt-5 mb-0">Aldready Have an account?<u><a href="login.php">Log In</a></u></p>

          </div>
        </div>

        <!-- Form with header -->
      </form>
      </div>


                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
          
        </div>
    </body>
</html>
