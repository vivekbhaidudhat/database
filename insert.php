<?php
	$con = mysqli_connect("localhost","root","","testt");
	
	$name = $_POST['name'];
	$vi = $_POST['viv'];
	
	$sql="insert into user(name,email) value('$name','$vi')";
	
	mysqli_query($con,$sql);

?>
<center><h1>login</h1></center>