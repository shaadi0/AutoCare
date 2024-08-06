<?php
	$name = $_POST['name'];
	$location = $_POST['location'];
    $cno = $_POST['cno'];
    $date = $_POST['date'];
    $time = $_POST['time'];
	$stype = $_POST['stype'];
	$type = $_POST['type'];
    $type1 = implode(",",$type);
   
	
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booking(FullName, Location, PhoneNumber, Date, Time,ServiceType, OtherServices) values(?, ?, ?, ?, ?,?,?)");
		$stmt->bind_param("ssissss", $name, $location, $cno, $date, $time,$stype, $type1);
		$execval = $stmt->execute();
		echo $execval;
		echo "Booking Successful..";
		header('location: paymentsec.html');
		$stmt->close();
		$conn->close();
	}
?>
