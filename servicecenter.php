<?php
  $NameOfServiceCenter  = $_POST['servicecentername'];
  $RegistrationNumberOfBusines  = $_POST['registrationnumber'];
  $OwnerName  = $_POST['owername'];
$OwnerNICNumber  = $_POST['nicnumber'];
$OwnerPhoneNumber  = $_POST['ownerphonenumber'];
$Address  = $_POST['address'];
$City  = $_POST['city'];
$Province  = $_POST['province'];
$ContactNumber  = $_POST['contactnumber'];
$EmailAddress  = $_POST['emailaddress'];
$Password  = $_POST['password'];

  // Database connection
  $conn = new mysqli('localhost','root','','test');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into scdata(NameOfServiceCenter,RegistrationNumberOfBusines,OwnerName,OwnerNICNumber,OwnerPhoneNumber,Address,City,Province,ContactNumber,EmailAddress,Password) values(?, ?, ?, ?, ?,?,?,?,?,?,?)");
    $stmt->bind_param("sisiisssiss", $NameOfServiceCenter,$RegistrationNumberOfBusines , $OwnerName ,$OwnerNICNumber ,$OwnerPhoneNumber,$Address ,$City ,$Province ,$ContactNumber ,$EmailAddress ,$Password );
    $execval = $stmt->execute();
    echo $execval;
    echo "Register Successful..";
    header('location: index.html');
    $stmt->close();
    $conn->close();
  }
?>