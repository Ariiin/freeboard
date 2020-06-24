<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "free";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
// Check connection

if(!$con){
    die("연결 실패: " . mysqli_connect_error());
}
?>
