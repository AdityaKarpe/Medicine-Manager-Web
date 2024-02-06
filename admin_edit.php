<!DOCTYPE html>
<html>
    <head>
		<link rel="shortcut icon" href="img/short.jpg" />
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
	session_start();
	require_once "./functions/admin.php";
	$title = "Edit medicine";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_GET['medid'])){
		$med_id = $_GET['medid'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($med_id)){
		echo "Empty id! check again!";
		exit;
	}

	// get medicine data
	$query = "SELECT * FROM medicines WHERE med_id = '$med_id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<form method="post" action="edit_medicine.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ID</th>
				<td><input type="text" name="id" value="<?php echo $row['med_id'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Name</th>
				<td><input type="text" name="name" value="<?php echo $row['med_name'];?>" required></td>
			</tr>
			<tr>
				<th>Supplier</th>
				<td><input type="text" name="supplier" value="<?php echo $row['supplier_name'];?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"><?php echo $row['med_descr'];?></textarea>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" value="<?php echo $row['med_price'];?>" required></td>
			</tr>
			<tr>
				<th>Manufacturer</th>
				<td><input type="text" name="publisher" value="<?php echo getManufacturerName($conn, $row['manufacturerid']); ?>" required></td>
			</tr>
		</table>
		<input type="submit" name="save_change" value="Change" class="btn btn-success"style="color:white">
		<a href="admin_medicine.php" class="btn btn-danger" style="color:white">Cancel</a>
	</form>
	<br/>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require "./template/footer.php"
?>