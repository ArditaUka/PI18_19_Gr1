<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<title>Log In</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/loginSignup.css">
	</head>
	<body>
		<?php 

			session_start();
        
            $output = NULL;
           
			if(isset($_POST['login'])){
				
				include_once 'database.php';
				$email = mysqli_real_escape_string($conn, $_POST['email']);
				$password = mysqli_real_escape_string($conn, $_POST['password']);

                //validimi
                if (empty($email)) {
                   $output = "Email Required";
                    
                }
                if (empty($password)) {
                   $output = "Password Required";               
                }


                $password = md5($password);
                $query = $conn->query("SELECT * FROM user where username = '$username' AND password='$password'");
                $result = mysql_query($query);
                if (mysql_num_rows($result) == 1) {
                    
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['password'] = $user['password'];
                    $output = "Successfully logged in";    }
                else{
                    $output = "There was a problem, please try again";
                }
                   echo $output;     
                }
        ?>

		<form action="#" method="post">

			<span style="margin-left: 55px; font-size: 25px; font-family: 'Roboto Condensed', sans-serif;">Login</span>
			<br><br>
			<a href="#" class="btn-login-with bg1 m-b-10">Login with Facebook</a><br>
			<a href="#" class="btn-login-with bg2">Login with Twitter</a><br>

			<div>
			<span style="font-size: 25px; font-family: 'Roboto Condensed', sans-serif;">Login with email</span>
			<input type="email" name="email" placeholder="Email" class="inp"><br><br>
			<input type="password" name="password" placeholder="Password" class="inp"><br><br>
			<button name="login" style="margin-bottom: 0px; margin-left: 45px;"> LOG IN</button>
			</div>

			<div>
				<span style="font-family: 'Roboto Condensed', sans-serif; opacity: 0.7;" >Don't have an account?</span><br>
				<a href="signup.php" style="margin-left: 25px;">SIGN UP NOW</a>
			</div>
			
		</form>
		
	</body>
</html>