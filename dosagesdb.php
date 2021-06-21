<?php 
session_start();


$server="localhost";
$username ="root";
$password = "usbw";
$db = "dosages";

$conn=mysqli_connect($server, $username, $password,$db) or die("could not connect");
// mysql_select_db($db) or die("could not find database");


if (isset($_POST['save'])) {
	$medicines =$_POST['Medicine'];
	$dates =date('y-m-d', strtotime($_POST['Dates']));
	$times =$_POST['MedTimes'];



	$query =("INSERT INTO dosagedatas(Medicine, Dates, MedTimes) VALUES ('$medicines', '$dates', '$times')") or die("error in saving query");

	$query_run=mysqli_query($conn, $query);



	if ($query_run) {
		$_SESSION['status'] = "date inserted";
		header("Location: dosages.php");
	}
	else{

		$_SESSION['status'] = "date insertion failed";
		header("Location: dosages.php");
	}

	}



 ?>