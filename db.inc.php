<?php
session_start();
// Create connection
$con=mysqli_connect('localhost','root','','itec75');
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>



