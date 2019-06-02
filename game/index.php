<?php
session_start();
session_unset();
?>


<html>

    <head>

		<title>Millionaire</title>
		<link rel="stylesheet" type="text/css" media="all" href="homestyle.css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700&display=swap" rel="stylesheet">

    </head>

    <body>

        <?php
        $_SESSION["bank"]=0;
        $_SESSION["question"] = 1;
        ?>	


        <img src="milion.svg" width="500px;" style="margin-top: 40px; margin-bottom: 30px;"  >
		<div>
			<h4><a href="mill1.php">Play</a></h4>
		</div>

        
    </body>
</html>
