
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
        <!-- External CSS -->
		<style>
	   div.card{
		background:url(https://t3.ftcdn.net/jpg/03/55/60/70/360_F_355607062_zYMS8jaz4SfoykpWz5oViRVKL32IabTP.jpg);
	}
 
</style>
    </head>
    <body style="background-color:#ffffff;">
        <div>
           <?php
  require "./template/nav.php";
  ?>
</div>

<div class="container mt-5">

 
  <!--Section: Content-->
  <section class="dark-grey-text mb-5">
    
    <style>
      .map-container-section {
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
      }
      .map-container-section iframe {
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
      }
    </style>

    <!-- Section heading -->
  <h3 class="font-weight-bold text-center mb-4"style="color: #202020;">Contact Us</h3>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto pb-5">If You Find Any Issue aur if is there any suggestion plz provide us your review , feedback , aur for any query contact us</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4">

      <!-- Form with header -->
      <div class="card" style="background-color: #F3F3F3">
        <div class="card-body">
          <!-- Header -->
          <div class="form-header blue accent-1">
            <h3 class="mt-2"style="color: #3C1874" ><i class="fas fa-envelope" style="color: #3C1874;"></i> Write to us :</h3>
          </div>
          <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
          <!-- Body -->
          <form action="https://formspree.io/f/xpzkvweq" method="POST">
            <i class="fas fa-user prefix grey-text"></i>
            <label for="form-name">Your name</label>
            <input type="text" id="form-name" name="name" class="form-control" required>
          
          <div class="md-form"style="padding-top:20px">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label for="form-email">Your email</label>
            <input type="text" id="form-email" name="email" class="form-control" required>
          </div>
          <div class="md-form"style="padding-top:20px">
            <i class="fas fa-tag prefix grey-text"></i>
            <label for="form-Subject">Subject</label>
            <input type="text" id="form-Subject" name="subject" class="form-control" required>
          </div>
          <div class="md-form"style="padding-top:20px">
            <i class="fas fa-pencil-alt prefix grey-text"></i>    
            <label for="form-text">Send message</label>
            <textarea id="form-text" class="form-control md-textarea" required rows="3"></textarea>
          </div>
          <div class="text-center"style="padding-top:20px">
            <button class="btn btn-light-blue">Submit</button>
          </div>
          </form>
        </div>
      </div>
      <!-- Form with header -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7">

        <!--Google map-->
        <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
          <iframe src="https://maps.google.com/maps?q=India&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Buttons-->
        <div class="row text-center">
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-map-marker-alt"></i>
            </a>
            <p>Chikhali, 411062</p> 
            <p class="mb-md-0">India</p>
          </div>
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-phone"></i>
            </a>
            <p>+ 91 935 661 2714</p>
            <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
          </div>
          <div class="col-md-4">
            <a class="btn-floating blue accent-1">
              <i class="fas fa-envelope"></i>
            </a>
            <p>mceinfo@gmail.com</p>
            <p class="mb-0">mce@gmail.com</p>
          </div>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->
 
</div>























	 
	