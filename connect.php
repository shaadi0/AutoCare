<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
    $message = $_POST['msg'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(Name, Email, Message) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Message Send Successfully...";
		$stmt->close();
		$conn->close();
	}
?>


