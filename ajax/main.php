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

		

		<form class="comment_form" action="server.php" method="POST">

			
			<div>
				<label for="name">Product name:</label>
				<input type="text" name="name" id="name">
			
			</div>
			<div>
				<label for="comment">Details:</label>
				<textarea name="comment" id="comment" cols="30" rows="5"></textarea>
			</div>
			<button type="button" id="submit_btn">POST</button>
			<button type="button" id="update_btn" style="display: none;">UPDATE</button>
		</form>
	</div>
</body>
</html>

<script src="jquery.min.js"></script>
<script src="scripts.js"></script>