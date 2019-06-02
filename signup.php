<!DOCTYPE html>
<html>
	<head>
		<title>Sign up</title>
		<link rel="stylesheet" type="text/css" href="css/loginSignup.css">
		<link href="https://fonts.googleapis.com/css?family=Mandali&display=swap" rel="stylesheet">
	</head>
	<body class="bgimg">

		<?php 
session_start();
			/**
			* 
			*/

				$output = '';
			if(isset($_POST['submit'])){
				//connect to database
				include_once 'database.php';
				$fullname = mysqli_real_escape_string($conn, ($_POST['name']));
				$email = mysqli_real_escape_string($conn, ($_POST['email']));
				$username = mysqli_real_escape_string($conn, ($_POST['username']));   //mysql injection using $myslqi->real_escape_string
				$password = mysqli_real_escape_string($conn, ($_POST['password']));
				$confirmPassword = mysqli_real_escape_string($conn, ($_POST['password1']));

				$query = $conn->query("SELECT * FROM user where username = '$username'");
				$query1 = $conn->query("SELECT * FROM user where email = '$email'");
				
				$parts = explode(' ', $fullname);
				$length = count($parts);
				$username_array = preg_split("/ /", $username);
				$length1 = count($username_array);
				if ($length>2) {
					$output = "*Please enter only your firstname and lastname*";
				}
				elseif ($length<=1) {
					$output = "*Please enter both: your firstname and lastname*";
				}
				elseif ($length1>1) {
					$output = "*Your username must not contain spaces*";
				}
				elseif (empty($fullname) OR empty($email) OR empty($username) OR empty($password) OR empty($confirmPassword)) {
					$output = "*Please fill in all fields*";
					}
				elseif (!preg_match("/^[a-zA-Z ]*$/",$fullname)) {
					$output = "*Only letters  and  white space allowed.*";
				}
				elseif ($query->num_rows !=0) {
					$output = "*That username is already taken.*";
					}
				elseif ($query1->num_rows !=0) {
					$output = "*That email is alreday taken*";
				}
				elseif ($password != $confirmPassword) {
					$output = "*Your passwords don't match*";
				}
				elseif (strlen($password)<8) {
					$output = "*Your password must be at least 8 characters.*";
				}
				else{
					//encrypt the password
					$password = md5($password);
					
					//insert the variable

					$insert = $conn->query("INSERT INTO user(fullname, email, username, password) VALUES('$fullname', '$email','$username','$password')");
							if ($insert != TRUE) {
								$output = "*There was a problem* <br>";
								$output .= $conn->error;
							}
							else{
								$output = "*You have been registred!*";
								$fullname =implode("" , $parts);
								$fullname = strtolower($fullname);
								$_SESSION['name'] = $fullname;
								header("Location: index.php");
							}

							

				}
			}

			?>




		<form action="signup.php" method="POST" id="forma">
			<label>Full Name</label><br><br>
			<input type="text" name="name" placeholder="Name..." id="inputat " required>
			<br><br>
			<label>Email</label><br><br>
			<input type="email" name="email" placeholder="Email address..." id="inputat" required>
			<br><br>
			<label>Username</label><br><br>
			<input type="text" name="username" placeholder="Username..." id="inputat" required>
			<br><br>
			<label>Password</label><br><br>
			<input type="password" name="password" placeholder="*******************" id="inputat" required>
			<br><br>
			<label>Confirm Password</label><br><br>
			<input type="password" name="password1" placeholder="*******************" id="inputat" required>
			<br><br>
			<button name="submit" id="btn">Sign Up</button><br>
			<?php 
			$boldOutput = preg_replace("$output","<b>$output<b>",$output);
			echo "<p style = 'color:red;'><i>".$boldOutput."</i></p>"; 
			echo "<br>";

				?>
			<a href="login.php">Already have an account?Login here!</a>

			
		</form>

	</body>
</html>