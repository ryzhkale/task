<?php
	$con = mysqli_connect('127.0.0.1', 'root', '');
	if(!$con) {
		echo "not connected to server";
	}

	if(!mysqli_select_db($con, "task")) {
		echo "database not conncted";
	}

	$Name = $_POST['username'];
	$Email = $_POST['email'];

	$sql = "insert into person (Name,Email) VALUES ('$Name','$Email')";

	if(!mysqli_query($con, $sql)) {
		echo "error!!!!!";
	}
	else {
		echo "thank you! You have subscribed this page";
	}

	header ("refresh:2; url=index.html");

?>
