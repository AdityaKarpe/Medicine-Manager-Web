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
<?php
	$title = "Administration section";
	require_once "./template/header.php";
?>

<style>
	div.card{
		background:url(https://t3.ftcdn.net/jpg/03/55/60/70/360_F_355607062_zYMS8jaz4SfoykpWz5oViRVKL32IabTP.jpg);
	}
 
</style>
 </head>
 <body> 
 <div class="col-lg-5 mb-lg-0 pb-lg-3 mb-4" style="margin-left:30%;margin-right: 30%;">
 <div class="card" style="margin-top: 20px;">
        <div class="card-body" style="margin-left: 20px; margin-right: 20px;">
            <!-- Header -->
            <div class="form-header blue accent-1">
              <h3 class="mt-2"style="color: #3C1874" ><i class="fas fa-envelope" style="color: #3C1874;"></i> Admin Login :</h3>
            </div>
	<form method="post" action="admin_verify.php">
              <i class="fas fa-user prefix grey-text"></i>
              <label for="form-name">UserName</label>
              <input type="text" id="form-name" name="name" class="form-control"required="true">
            
             <div class="md-form">                
              <i class="fas fa-lock prefix grey-text"></i>
              <label class="form-label" for="typePassword">Password</label>
              <input type="password" class="form-control" name="pass"  required="true" />

            </div>

			<div class="text-center" style="padding-top:10px">
              <input class="btn btn-success" type="submit" name="submit" value="Login" style="color: #ffffff;">
              <input class="btn btn-danger"  type="reset"   value="Reset" style="color: #ffffff;">
            </div>
            </form>
</div>
</div>
</div>


</body>
</html>
