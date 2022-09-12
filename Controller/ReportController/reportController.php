<?php 

$dbUsername = "root";
$dbPassword = "";
$dbName = "fkims";



$conn = mysqli_connect("localhost", $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error . "\n");

}
