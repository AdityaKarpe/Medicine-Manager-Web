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
	session_start();
	require_once "./functions/admin.php";
	$title = "Medicive Admin";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
<style>
a	{
	color:#f93154

}
a:hover{
	color:#5dd61a;
}
</style>
</head>
<body>
	<p class="lead"><a href="admin_add.php"><h4 id="clrs"style="color:#5dd61a">!!...Add new medicine...!!</h4></a></p>
	 <a href="admin_signout.php"> <button type="button" class="btn btn-danger"><b id="clr" style="color:white;">Sign out!</b> </button></a>

	<table class="table" style="margin-top: 20px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Supplier</th>
			<th>Image</th>
			<th>Description</th>
			<th>Price</th>
			<th>Manufacturer</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['med_id']; ?></td>
			<td><?php echo $row['med_name']; ?></td>
			<td><?php echo $row['supplier_name']; ?></td>
			<td><?php echo $row['med_image']; ?></td>
			<td><?php echo $row['med_descr']; ?></td>
			<td><?php echo $row['med_price']; ?></td>
			<td><?php echo getManufacturerName($conn, $row['manufacturerid']); ?></td>
			<td><a href="admin_edit.php?medid=<?php echo $row['med_id']; ?>">Edit</a></td>
			<td><a href="admin_delete.php?medid=<?php echo $row['med_id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
		</body>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	// require_once "./template/footer.php";
?>
</html>