<?php
// Connect to MariaDB/MySQL with your credentials
$connection = mysqli_connect("localhost", "fwmsuser", "mhray345");
$db = mysqli_select_db($connection, 'fwmsdb');

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
