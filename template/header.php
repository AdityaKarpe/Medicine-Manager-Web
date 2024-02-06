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
    </head>
    <body>
<!-- NavBar Begin -->
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
    <?php
                           if(isset($_SESSION['email'])){
                           ?>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                           <!-- link to manufacturer_list.php -->
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="manufacturer_list.php">&nbsp;Manufacturer</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="medicines.php">&nbsp;Medicines</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contact.php">&nbsp;Contact</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="cart.php">&nbsp; My Cart</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="settings.php">&nbsp; Settings</a>
              </li>  
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">&nbsp; Logout</a>
              </li>         
                           </ul>
                                    <?php
                           }else{
                        ?>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

               <li class="nav-item">
              <a class="nav-link" aria-current="page" href="signup.php">Sign Up</a>
              </li>

              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="login.php">Login</a>
              </li>
                 
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
              </li>
                           </ul>
                           <?php
                           }
                           ?> 


     <!-- Navigation links -->
    </div>
    <!-- Collapsible wrapper End -->
  </div>
  <!-- Container wrapper End-->
</nav>
    <!-- NavBar End -->


</body>
</html>