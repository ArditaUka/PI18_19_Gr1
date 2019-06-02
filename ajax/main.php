<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Produktet</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 style="text-align: center;"> Register your product </h1>
	<div class="wrapper">

		<?php echo $products;  ?>





		<form class="comment_form" action="main.php" method="POST">


			<div>
				<label for="name">Product name:</label>
				<input type="text" name="name" id="name">

			</div>
			<div>
				<label for="comment">Details:</label>
				<textarea name="comment" id="comment" cols="30" rows="5"></textarea>
			</div>
			<button id="submit_btn">POST</button>
			<button type="button" id="update_btn" style="display: none;">UPDATE</button>
		</form>
	</div>

	<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if( isset($_POST['name'])&& isset($_POST['comment'])) 
		    {
		    $data = $_POST['name']. "\r\n". $_POST['comment']. "\r\n";
		    $ret = file_put_contents('produktet.txt', $data, FILE_APPEND | LOCK_EX); //Only a single process may possess an exclusive lock to a given file at a time.


		    if($ret === false) 
		      {
		      die('There was an error writing this file');
		      }
		    }
		      else 
		      {
		      die('no post data to process');
		      }
	}
    
	?>


	
</body>
</html>

<script src="jquery.min.js"></script>
<script src="scripts.js"></script>
