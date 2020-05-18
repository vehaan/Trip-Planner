<?php
include("includes/conn.php");
$category = $_POST['category'];
$city = $_POST['city'];
if (isset($_POST['search']))
{
	if (($category == "Hotel") && ($city == "Bengaluru"))
	{
		header("location:hotels.php");
	}
	else
	{
		echo "<script type='text/javascript'>alert('Enter Proper Combination!'); window.location='index.php'</script>";          
	}
}
?>