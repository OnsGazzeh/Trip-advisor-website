<?php
echo ' <link rel="stylesheet" href="style.css">';
$con = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($con, "test");

$email = $_POST['email'];


$req1 = (" DELETE FROM registration where email='$email'");
$res1 = mysqli_query($con, $req1);
$req1 = (" UPDATE registration SET etat='free' where owner_id=''");
$res1 = mysqli_query($con, $req1);


echo '<center><h1> <br> user deleted !</h1> <center>';
