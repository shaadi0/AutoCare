<?php

$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("select * from customer where email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['Password'] == $password){
            echo "Login Successfully";
            header('location: Customer interface.html');
        }else {
            echo "Invalid Email or Password";
        }

    }else {
        echo "Invalid Email or Password";
    }
}



?>