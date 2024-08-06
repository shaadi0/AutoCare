<?php
  $name  = $_POST['name'];
  $description  = $_POST['description'];
  $cno  = $_POST['cno'];
$link  = $_POST['link'];
$body  = $_POST['body'];
$normal  = $_POST['normal'];
$full  = $_POST['full'];
$aircondition  = $_POST['aircondition'];
$scan  = $_POST['scan'];
$tuneup  = $_POST['tuneup'];
$brake  = $_POST['brake'];

  // Database connection
  $conn = new mysqli('localhost','root','','test');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    $stmt = $conn->prepare("insert into post(ServiceCenterName,Description,ContactNumber,LocationLink,BodyWash,NormalService,FullService,Autoairconditionrepair,Vehiclescanning,Enginetuneups,Brakepadchange) values(?, ?, ?, ?, ?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssss", $name,$description , $cno ,$link ,$body,$normal ,$full ,$aircondition ,$scan ,$tuneup ,$brake );
    $execval = $stmt->execute();
    echo $execval;
    echo "Posted....";
    
    $stmt->close();
    $conn->close();
  }
?>