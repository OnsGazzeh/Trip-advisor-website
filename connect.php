<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$country = $_POST['country'];
$Accommodation = $_POST['Accommodation'];
$gender = $_POST['gender'];
// Data base connection

$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(name, email, gender, mobile, country, Accommodation) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $name, $email, $gender, $mobile, $country, $Accommodation);
    $execval = $stmt->execute();

    echo  '<center><h1> <br> Registration successfully</h1> <center>';
    $stmt->close();
    $conn->close();
    
}
