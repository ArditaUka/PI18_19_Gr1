<?php

require_once('config.php');

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';

?>

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
        
		include_once 'database.php';
					$errormsg = '';
                if (isset($_POST['login'])) {

                    $email = $_POST['email'];
                    $pass = $_POST['password'];
                    $password = md5($_POST['password']);
                    $query = $conn->query("SELECT * FROM user where email = '$email' and password = '$password'");
                    $row = mysqli_num_rows($query);
                    if ($row == 1) {

                        $_SESSION['name'] =mysqli_fetch_row($query)[1] ;
                        header("Location: index.php");
                    }
                    else{
                        $errormsg = "*Email or Password is invalid!*";
                    }
                    if(isset($_POST['rememberme']) == true)

                    {
                    	 setcookie("email",$email,time()+(86400*30));

       					 setcookie("password",$pass,time()+(86400*30));

                    }
                }
            
        
        
		 ?>
		
		<form action="#" method="GET">
			<span style="margin-left: 55px; margin-bottom: 10px; font-size: 25px; font-family: 'Roboto Condensed', sans-serif;">Login</span>
			<a href="<?= $login_url ?>" class="btn-login-with bg1 m-b-10" style="margin-top: 20px;">Login with Google</a><br>			
			<a href="#" class="btn-login-with bg2">Login with Twitter</a>

		</form>

		<form action="login.php" method="post" style="margin-top: -10px;">
			
			<div>
			<span style="margin-left: 6px; font-size: 25px; font-family: 'Roboto Condensed', sans-serif;">Login with email</span>
			<input type="email" name="email" value="<?php echo @$_COOKIE['email'];?>" placeholder="Email" class="inp"><br><br>
			<input type="password" name="password" value="<?php echo @$_COOKIE['password'];?>" placeholder="Password" class="inp"><br><br>
			<button name="login" style="margin-bottom: 0px; margin-left: 45px;"> LOG IN</button><br><br>
			<input type="checkbox" name="rememberme"><label style="font-family: 'Roboto Condensed', sans-serif;">Remember Me</label>
			</div>
					
				<?php 

				if ($errormsg !== '') {
					$berrormsg = str_replace("$errormsg","<b>$errormsg<b>",$errormsg);
					echo "<p style = 'color:red;'><i>".$berrormsg."</i></p>"; 
					echo "<br>";	
					}

				?>
			<div>
				<span style="font-family: 'Roboto Condensed', sans-serif; opacity: 0.7;" >Don't have an account?</span><br>
				<a href="signup.php" style="margin-left: 25px;">SIGN UP NOW</a>
			</div>
			
		</form>

	</body>