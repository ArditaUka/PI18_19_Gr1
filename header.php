
<?php session_start();
include("log_functions.php");?>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700&display=swap" rel="stylesheet">
<style type="text/css">
		.sesioni
		{
		  position: relative;
		  display: inline-block;
		  font-family: 'Mandali', sans-serif;
		  margin-top: 3px;
	      width: 150px;
	      height: 20px;
	      background-color: white;
	      color: #034F84;
		  padding-top: 2px;
	 	  padding-left: 4px;
		  outline: none;
		  border-radius: 5px;
		  margin-left: 15px;
		  font-size: 15px;
		}
		.sesioni-content {
		  display: none;
		  position: absolute;
		  background-color: #034F84;
		  min-width: 120px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);
		  z-index: 1;
		  padding-top: 5px;
          margin-top: 2px;
    	  margin-left: -3px;
		}

		.sesioni-content a {
		  color: white;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		  font-size: 12px;
		}
		.sesioni-content a:hover
		{
			display: block;
			background-color: #006E6D;
			transition: 0.2s;
		}

		.sesioni:hover .sesioni-content {
		  display: block;
		}

</style>
<header>
		<div class="header container">
			<h2 class="title">Exoy</h2>
			<input type="text" name="search" placeholder="Search for phones, tablets, laptops and more..."><button class="buto"><img src="img/search.png" width="15px" height="15px"></button>
			<button class="sell">Sell on Exoy</button>
				<?php if(!isset($_SESSION['name'])) { ?>
						<a href="login.php"><button>Login</button></a>
				<?php } ?>
				<?php if(!isset($_SESSION['name'])) {  ?>
				<a href="signup.php"><button>Register</button></a>
				<?php } ?>
				<?php if(isset($_SESSION['name']))
						{
							 echo "<div class= 'sesioni'><a href='#' style='color: #034F84'>".$_SESSION['name']."</a>".
								 		"<div class='sesioni-content'>
											<a href='ajax/main.php'>All products</a>
											<a href='users.php'>Users</a>
											<a href='logout.php'>Log out</a>

										</div>


								   </div>";
						}
				?>
			<button><img src="img/addtocart.png" width="15px" height="15px"></button>

		</div>

		<hr>

		<section class="container">

			<div class="dropdown">

				<a href="iphones.php"><img src="img/apple.png" width="13px" height="13px"> &nbsp;iPhone</a>
				<div class="dropdown-content">
				<a href="iphoneX.php">iPhone X</a>
				<a href="iPhone8.php">iPhone 8</a>
				<a href="iPhone8Plus.php">iPhone 8 Plus</a>
				<a href="iPhone7.php">iPhone 7</a>
				<a href="iPhone7Plus.php">iPhone 7 Plus</a>
				<a href="iPhone6s.php">iPhone 6S</a>
				<a href="iPhone6sPlus.php">iPhone 6S Plus</a>
				</div>

			</div>

			<div class="dropdown">

				<a href="#"><img src="img/phone.png" width="13px" height="13px">&nbsp;Phones</a>
				<div class="dropdown-content">
				<a href="apple.php">Apple</a>
				<a href="att.php">AT&T</a>
				<a href="samsung.php">Samsung</a>
				<a href="sprint.php">Sprint</a>
				<a href="tmobile.php">T-Mobile</a>
				<a href="unlocked.php">Unlocked</a>
				<a href="verizon.php">Verizon</a>

				</div>

			</div>

			<div class="dropdown">

				<a href="laptops.php"><img src="img/laptop.png" width="13px" height="13px">&nbsp;Laptop</a>
				<div class="dropdown-content">
				<a href="macbooks.php">MacBooks</a>
				<a href="chromebook.php">Chromebooks</a>
				<a href="windows.php">Windows</a>
				</div>

			</div>

			<div class="dropdown">

				<a href="cameras.php"><img src="img/camera.png" width="13px" height="13px">&nbsp;Cameras</a>
				<div class="dropdown-content">
				<a href="actioncameras.php">Action Cameras</a>

				</div>

			</div>

			<div class="dropdown">

				<a href="#"><img src="img/console.png" width="13px" height="13px">&nbsp;Video Games</a>
				<div class="dropdown-content">
				<a href="nintendo3ds.php">Nintendo 3DS</a>
				<a href="nintendoswitch.php">Nintendo Switch</a>
				<a href="playstation4.php">PlayStation 4</a>
				<a href="playstationvista.php">PlayStation Vita</a>
				<a href="retro.php">Retro</a>
				<a href="xboxone.php">Xbox One</a>

				</div>

			</div>

			<div class="dropdown">

				<a href="#"><img src="img/tablet.png" width="13px" height="13px">&nbsp;Tablets</a>
				<div class="dropdown-content">
				<a href="iPad.php">iPad</a>
				<a href="Android.php">Android</a>
				<a href="WindowsSurface.php">Windowss/ Surface</a>
				<a href="AmazonKindle.php">Amazon/ Kindle</a>

				</div>

			</div>

			<a href="Watches.php"><img src="img/clock.png" width="13px" height="13px">&nbsp;Watches</a>
			<a href="hometech.php"><img src="img/home.png" width="13px" height="13px">&nbsp;Home Tech</a>

		</section>

		<hr>
	</header>;
