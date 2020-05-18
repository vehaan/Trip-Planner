<!doctype html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/contact.css">
<meta charset="utf-8">
<title>Contact Us</title>
</head>

<body>
	<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<form action="#" method="post">
				<div class="form-group">
					
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" onblur="return checkname(this);" required><span id="fn">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Last Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" onblur="return checkmail();" required><span id="eid">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment/Query:</label>
					
				  <div class="col-sm-10">
					<textarea name="comment" class="form-control" rows="5" id="comment" required></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name="submits" value="comment saved" class="btn btn-default">Submit</button>
				  </div>
				</div>
					</form>
			</div>
		</div>
	</div><br>
		<center><a href="index.php" class="btn btn-large btn-danger"><i class="icon-home icon-white"></i> Take Me Home</a></center>
		<?php
		include("includes/conn.php");
			if (isset($_POST['submits']) && $_POST['submits']=="comment saved")
			{
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$email = $_POST['email'];
				$comment = $_POST['comment'];
				$sql = "INSERT INTO contactus (fname,lname, email, comment) VALUES ('".$fname."','".$lname."','".$email."','".$comment."')";
    	 		if ($conn->query($sql) === TRUE) 
				{
//                    echo "<script type='text/javascript'>alert('We received your query. We will get back to you soon!');</script>";
				   echo "<script type='text/javascript'>alert('We received your query. We will get back to you soon!'); window.location='index.php'</script>"; 

				} 
				else 
				{
    				echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		?>
</div>
	<script type="text/javascript" src="js/validation.js"></script>
</body>
</html>