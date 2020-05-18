<?php

if(isset($_POST['loginbtn']))
{
	session_start();
	include("includes/conn.php");

    if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
		}
        $email=$_POST['userEmail'];
    	$p1=$_POST['userPassword'];
    	$sql = "SELECT * FROM user WHERE Email='".$email."' AND Password='".$p1."'";
    	$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==1)
		{
			session_start();
//			$_SESSION['user'] = $_POST['FirstName'];
			$_SESSION['user_email']=$_POST['userEmail'];
			$_SESSION['user_password']=$_POST['userPassword'];			
			$_SESSION['status']="loggedin";
//			header("location:index.php?status=loggedin");
//			if (isset($_SESSION['addplaces']) && $_SESSION['addplaces']== "add places")
//			{
//				header("location:addplaces.php?status=loggedin");
//				unset($_SESSION['addplaces']);
//			}
//			else
			{
				header("location:index.php?status=loggedin");
			}
		}
		else
		{
		    echo "<script type='text/javascript'>alert('Invalid Login Credentials'); window.location='userlogin.html'</script>";          
		}	
 }
?>
