
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
<style>
  b{
    color:red;
  }
  h6{
    color: #002140;

  }
  div.card{
    margin-top:20px;
    padding-top:30px
  }
</style>
              
          
          <?php
  session_start();
  $count = 0;
  // connect to database
  require_once "./functions/database_functions.php";

  $conn = db_connect();

  $query = "SELECT med_id, med_image,med_name,med_price FROM medicines";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "OMS";
  require_once "./template/header.php";
?>
</head>
<body>
  <p class="lead text-center text-muted">Medicines</p>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3">
            <a href="medicine.php?medid=<?php echo $query_row['med_id']; ?>">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top"  src="./bootstrap/img/<?php echo $query_row['med_image']; ?>"></br>
              <div class="card-body">
              <b> <?php
              echo $query_row['med_name']; ?></b>
              <h6> <?php echo "Rs."?>
              <?php echo$query_row['med_price']; ?></h6>
               </div>

             </div>
                          
            </a>
          </div>
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      </div>

      <?php
      }
  if(isset($conn)) { mysqli_close($conn); }
?>
<div class="card-group">

  <div class="card">
    <img src="https://www.netmeds.com/images/product-v1/600x600/886490/4_quin_brom_eye_drops_5ml_0_0.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
    <div class="card-body">
      <h5 class="card-title">QUIN BROM Eye Drops 5ml</h5>
     <h5 class="card-title">Rs:130</h5>
    <a href="https://rzp.io/l/tpdzLVfRxE"> <button type="button" class="btn btn-success">Buy</button></a> 

     
    </div>
  </div>
  <div class="card">
<img src="https://www.netmeds.com/images/product-v1/600x600/332796/acamprol_333mg_tablet_6_s_0.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
    <div class="card-body">
      <h5 class="card-title">Acamprol 333mg Tablet 6'S</h5>
     <h5 class="card-title">Rs:78</h5>
    <a href="https://rzp.io/l/qEuCRq3OQw"> <button type="button" class="btn btn-success">Buy</button></a>
    </div>
    </div>
    <div class="card">
 <img src="https://www.netmeds.com/images/product-v1/600x600/22010/actibile_300mg_tablet_10s_0_1.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
    <div class="card-body">
      <h5 class="card-title">Actibile Tablet 10'S</h5>
     <h5 class="card-title">Rs:85</h5>
    <a href="https://rzp.io/l/md2NUY0om"> <button type="button" class="btn btn-success">Buy</button></a>
    </div>
    </div>
    
</div>

    </div>


</body>
</html>