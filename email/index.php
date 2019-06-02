<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Customers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

	<div class="bg-contact100" style="background-image: url('images/bg-01.jpg');">
		<div class="contact">
			<div class="wrap-contact100">
				<div class="imgdiv js-tilt" data-tilt>
					<img src="images/exoy.png" alt="IMG">
				</div>

				<form class="form1" method="post" action="sendemail.php">
					<span class="prg">
						We care about our customers
					</span>

					<div class="div-input">
						<input class="input" type="text" name="mail_to" placeholder="Customer email">
					</div>

					<div class="div-input">
						<input class="input" type="text" name="mail_sub" placeholder="Subject of the email">
					</div>

					<div class="div-input">
						<textarea class="input" name="mail_msg" placeholder="Message"></textarea>
					</div>

					<div class="btndiv">
						<input class="btn" type="submit" value="Send Email" name="sub">
						<a href="../index.php" class="prg" style="padding-top:20px;">HOMEPAGE</a>
					</div>



				</form>

			</div>
		</div>
	</div>
</body>
</html>
