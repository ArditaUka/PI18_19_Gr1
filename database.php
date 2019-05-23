<?php 

	define ( 'HOST', '127.0.0.1:3307' );
   define ( 'USER', 'root' );
   define ( 'PASSWORD', '' );
   define ( 'DB_NAME', 'exoy' );

   $conn = mysqli_connect(HOST,USER,PASSWORD,DB_NAME);

   if (!$conn) 
   {
    die("Connection failed: " . mysqli_connect_error());
	}
?>
