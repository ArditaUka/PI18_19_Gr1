<?php 

define("HOST", 'mysql: host=localhost;dbname=exoy');
define("USER", 'root');
define("Password", 'fiek123');
$conn = mysqli_connect(HOST,USER,Password);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>
