<?php 
	//session
	session_start();

	/*$firstname = "";
	$lastname = "";
	$phone = "";
	$email = "";
	$gender = "";
	$id = "0";*/
	$edit_state = false;

//db connection

include('connect.php');

if (isset($_POST['save'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];



	$query = "INSERT INTO form (firstname, lastname, phone, email, gender) VALUES ('$firstname', '$lastname', '$phone', '$email', '$gender')";
	mysqli_query($db, $query);
	$_SESSION ['msg'] = "contact saved";
	header('location: index.php');
}

	if (isset($_POST['update'])) {
		$firstname = mysqli_escape_string($db,$_POST['firstname']);
		$lastname = mysqli_escape_string($db,$_POST['lastname']);
		$phone = mysqli_escape_string($db,$_POST['phone']);
		$email = mysqli_escape_string($db,$_POST['email']);
		$gender = mysqli_escape_string($db,$_POST['gender']);
		$id = mysqli_escape_string($db,$_POST['id']);
		$query 	=	"UPDATE form SET firstname='$firstname', lastname='$lastname', phone='$phone',email='$email', gender='$gender' WHERE id=$id";
		mysqli_query($db, $query);
		$_SESSION ['msg'] = "contact updated";
		header('location: view.php?id='.$id);
	}

	//delete Data
	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		mysqli_query($db, "DELETE FROM form WHERE id=$id");
		//echo $id;
		// $_SESSION ['msg'] = "contact Deleted";
		 header('location: index.php');
	}

	//retrieve records
	$results = mysqli_query($db, "SELECT * FROM form");






?>