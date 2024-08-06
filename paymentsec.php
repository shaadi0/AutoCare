<?php
	$nameoncard = $_POST['cardname'];
	$creditcardnumber = $_POST['cardno'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $cvv = $_POST['cvv'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into payment(CardName, CardNo, Month, Year, CVV) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("siiii", $nameoncard, $creditcardnumber, $month,  $year, $cvv );
		$execval = $stmt->execute();
		echo $execval;
		echo " Payment Successful..";
		header('location: maps1.html');
		$stmt->close();
		$conn->close();
	}
?>
