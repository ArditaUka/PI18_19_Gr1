
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
                <div class="btndiv">
						<p class="prg"></p>
					</div>
					<div class="btndiv">

						<a href="../index.php" class="prg">Go back to Homepage</a>
					</div>
                <div class="btndiv">
						<a href="index.php" class="prg">Go back to Contact Customer</a>
					</div>
           >
            </div>
        </div>
    </div>



</body>

</html>

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
