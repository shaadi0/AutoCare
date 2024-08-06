<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$nic = $_POST['idno'];
$email = $_POST['email'];
$mobno = $_POST['mobileno'];
$password = $_POST['password'];
$cpassword= $_POST['repassword'];
$gender = $_POST['gender'];

  

  // Database connection

  $conn = new mysqli('localhost','root','','test');

  if($conn->connect_error){

    echo "$conn->connect_error";

    die("Connection Failed : ". $conn->connect_error);

  } else {

    $stmt = $conn->prepare("insert into customer(FirstName,LastName,Address,NIC,Email,MobileNumber,Password,ConfirmPassword,Gender	) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("sssssisss", $firstname, $lastname, $address, $nic , $email, $mobno, $password, $cpassword, $gender );

    $execval = $stmt->execute();

    echo $execval;

    echo "Registration Completed...";
    header('location: index.html');

    $stmt->close();

    $conn->close();

  }

?>