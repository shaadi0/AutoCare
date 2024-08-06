<?php
	$stype = $_POST['stype'];
	$type = $_POST['type'];
    $type1 = implode(",",$type);
    
   
	
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booking(ServiceType, OtherServices) values(?, ?)");
		$stmt->bind_param("ss", $stype, $type1);
		$execval = $stmt->execute();
		echo $execval;
		echo "Successful..";
		header('location: dselect.html');
		$stmt->close();
		$conn->close();   
	}
?>


