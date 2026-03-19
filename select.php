<?php
	$con = mysqli_connect("localhost","root","","testt");
	$sql="select * from user";
	$data=mysqli_query($con,$sql);
?>
<table>
	<tr>
		<td>id</td>
		<td>name</td>
		<td>email</td>
	</tr>
<?php
	while($row=mysqli_fetch_assoc($data)){
?>
<tr>
	<td> <?php echo $row['id']?> </td>
	<td> <?php echo $row['name']?> </td>
	<td> <?php echo $row['email']?> </td>
</tr>
<?php } ?>