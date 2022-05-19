<?php
$name = $_POST['name'];
$country = $_POST['country'];
$Accommodation = $_POST['Accommodation'];

// create suggestion table
//$sql = "CREATE TABLE suggestion (name VARCHAR(30) NOT NULL,email VARCHAR(50),country VARCHAR(50)";
// Data base connection

$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into suggestion(name, country, Accommodation) values(?, ?, ?)");
    $stmt->bind_param("sss", $name, $country, $Accommodation);
    $execval = $stmt->execute();

    echo  '<center><h1> <br> Thanks for your suggestions we will work on it !</h1> <center>';
    $stmt->close();
    $conn->close();
}
