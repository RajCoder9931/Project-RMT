<?php
$servername = "localhost"; 
$username = "root"; 
$password = " "; 
$database = "food_db"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$phone_number = $_POST['phone_number']; 
$password = $_POST['password']; 

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO login (phone_number, password) VALUES ('$phone_number', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>