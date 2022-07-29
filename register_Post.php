<?php 
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$mess=$_POST['mess'];

	
	echo $name."".$phone." ".$mess;
	$con=new mysqli ("localhost","root","","base");
	if(!$con){
		die($con->error);
	}
	$sql="INSERT INTO staff VALUES(null, '$name', '$phone', '$mess')";
	if($con->query($sql)){
		echo "ok";	
	} else{
		echo $con->error;
	}
?>
