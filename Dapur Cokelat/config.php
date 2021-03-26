<?php
	$conn = mysqli_connect("localhost","root","","ujian_praktek");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}else{
		// echo "berahasil connect";
	}
?>