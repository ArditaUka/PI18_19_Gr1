<!DOCTYPE html>
<html>
<head>
	<title>Our products</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700&display=swap" rel="stylesheet">
	<style type="text/css">
		table,th, td
		{
			border: 2px solid white;
			border-collapse: collapse;
			width: 30%;
			text-align: center;
			background-color: #00539C;
			color: white;
			margin-left: 35%;
			font-family: 'Mandali', sans-serif;		
		}
	</style>
</head>
<body bgcolor="#223A5E">

	<h1 style="text-align: center; color: white; font-family: 'Mandali', sans-serif;">PRODUCTS</h1>

	<?php 

	$myfile = fopen("produktet.txt", "r") or die("Unable to open file!");

		echo "<table>";

		while(!feof($myfile)) 
		{
			  echo "<tr><td>";
			  echo trim(fgets($myfile)) . "<br>";
			  echo "</td></tr>";
		}
		echo "</table>";
		fclose($myfile);

 ?>
</body>
</html>