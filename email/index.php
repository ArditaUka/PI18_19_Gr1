<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
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

				<form class="form1" method="post" action="index.php">
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
						<a href="../index.php" class="prg">Go back to homepage</a>
					</div>



				</form>

			</div>
		</div>
	</div>

	<?php
	 	 $mailto = $_POST['mail_to'];
	    $mailSub = $_POST['mail_sub'];
	    $mailMsg = $_POST['mail_msg'];
	 	require 'PHPMailer/PHPMailerAutoload.php';

	    $mail = new PHPMailer();
	   $mail ->IsSmtp();
	   $mail ->SMTPDebug = 0;
	   $mail ->SMTPAuth = true;
	   $mail ->SMTPSecure = 'ssl';
	   $mail ->Host = "smtp.gmail.com";
	   $mail ->Port = 465; // porti per EMAIL
	   $mail ->IsHTML(true);
	   $mail ->Username = "exoy.exoy123@gmail.com";
	   $mail ->Password = "111exoy222";
	   $mail ->SetFrom("exoy.exoy123@gmail.com");
	   $mail ->Subject = $mailSub;
	   $mail ->Body =  $mailMsg;
	   $mail ->AddAddress($mailto);

	   if(!$mail->Send())
	   {

			 $message = "Email not sent, try again";
	echo "<script type='text/javascript'>alert('$message');</script>";
	   }
	   else
	   {

			 $message1 = "Email sent";
		 echo "<script type='text/javascript'>alert('$message1');</script>";
		 }
	   ?>

</body>
</html>
