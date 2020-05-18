<?php
include("includes/conn.php");
$query = 'Select Reply from contactus where email = "vehaanskundra@gmail.com"';
$result = mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result)){
	echo  $row[0]; ?>
<br>
<?php }
?>
<!--<h1>Reply from us: </h1>-->




