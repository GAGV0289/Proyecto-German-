<?php 
include("db.php");

if (isset($_POST['save_task'])) {
	$firstName = $_POST['first_Name'];
	$lastName = $_POST['last_Name'];
	echo $firstName;
	echo $lastName;

	$query = "INSERT INTO empleados(lastname, firstname) VALUES ('$lastName', '$firstName')";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query Failed");
	}
	echo "saved";
} 
?>