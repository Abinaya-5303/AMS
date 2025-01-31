<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "attendancemsystem";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
