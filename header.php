
<?php session_start();
include("log_functions.php");?>
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
				<?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?>
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
