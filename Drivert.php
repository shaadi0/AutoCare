<?php
	$FullName = $_POST['fullname'];
	$DateofBirth = $_POST['dateofbirth'];
    $Address = $_POST['address'];
    $MobileNumber = $_POST['mobilenumber'];
    $Gender = $_POST['gender'];
    $Occupation = $_POST['occupation'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $ConfirmPassword = $_POST['confirmpassword'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into driver(FullName, DateofBirth, Address, MobileNumber, Gender, Occupation, Email, Password, ConfirmPassword) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sisisssss", $FullName, $DateofBirth, $Address, $MobileNumber, $Gender, $Occupation, $Email, $Password, $ConfirmPassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration Successful..";
		header('location: index.html');
		$stmt->close();
		$conn->close();
	}
?>
