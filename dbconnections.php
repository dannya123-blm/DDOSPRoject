<?php
$servername = "localhost";
$username = "root";
$password = "Jesuloba65&";
$dbname = "ddosdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Successfully Connected to Database<br/><br/>";
}

?>