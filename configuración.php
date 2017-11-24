<?php
/* Database connection start */
$s = "localhost";
$u  = "root";
$p = "";
$db = "ligacundinamarca";
$conn = mysqli_connect($s, $u, $p, $db) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
?>