<?php
echo ' <link rel="stylesheet" href="style.css">';
$con = mysqli_connect("localhost", "root", "");

$db = mysqli_select_db($con, "test");

$country = $_POST['country'];
$email = $_POST['email'];
$Accommodation = $_POST['Accommodation'];

$req1 = (" UPDATE registration set country='$country'  , Accommodation='$Accommodation' where email='$email'");
$res1 = mysqli_query($con, $req1);


echo '<center><h1> <br> your contact details are modified !</h1> <center>';

$req2 = ("SELECT * FROM registration where email='$email'");
$res2 = mysqli_query($con, $req2);



if (false !== $res1) {
    if (mysqli_num_rows($res2) > 0) {
        echo '<table cellpadding="7" border="1">';

        $row = mysqli_fetch_assoc($res2);

        echo '<tr><th class="tit">', implode('</th><th class="tit">', array_keys($row)), '</th></tr>';

        do {
            echo '<tr><td>', implode('</td><td>', $row), '</td></tr>';
        } while ($row = mysqli_fetch_row($res2));

        echo '</table>';
    }

    mysqli_free_result($res2);
}
echo '</center>';
