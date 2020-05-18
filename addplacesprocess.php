<?php
include("includes/conn.php");
$name = $_POST['name'];
$category = $_POST['category'];
$review = $_POST['review'];
$cost = $_POST['cost'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$status = $_POST['status'];
if (isset($_POST['submit']) && $_POST['submit']=="Submit")
{
	$query = "INSERT INTO restaurant(name, category, review, cost, address, phone, website, status) VALUES ('".$name."','".$category."','".$review."',".$cost.",'".$address."',.".$phone.",'".$website."','".$status."')";
//	$result = mysqli_query($conn,$query);
	if ($conn->query($query) === TRUE) 
	{
		echo "<script type='text/javascript'>alert('Data Successfully Added!');</script>";
					header("location:index.php");
	}
	else 
		{
   			echo "Error: " . $query . "<br>" . $conn->error;
		}
}
if (isset($_POST['back']) && $_POST['back'] == "Take Me Home")
{
	header ("location:index.php");
}
?>