 <!DOCTYPE html>
 <html>
 <head>
 	<title>Formulari</title>

 	<style type="text/css">
 		table,th, td
		{
			border: 2px solid white;
			border-collapse: collapse;
			text-align: center;
			background-color: #00539C;
			color: white;
			margin-left: 35%;
			font-family: 'Mandali', sans-serif;		
			padding: 5px;
		}
 	</style>
 </head>
 <body>

 	<?php 

	class Products
	{
		private $pname;
		private $price;
		private $quantity;

		public function __construct($pname)
		{
				$this->pname = $pname; 
		}

		public function Pname()
		{
			return $this->pname;
		}

		public function setPrice($price)
		{
			$this->price = $price;
		}

		public function getPrice()
		{
			return $this->price;
		}
		public function setQuantity($quantity)
		{
			$this->quantity = $quantity;
		}

		public function getQuantity()
		{
			return $this->quantity;
		}


		public function Calculate($price,$quantity)
		{
			return $result = ($this->price) * ($this->quantity);

		}

		public function __destruct()
		{
			echo "These are our products";
		}


	}
	class Phones extends Products
	{
		private $opSystem;

		public function setOperatingSystem($opSystem)
		{
			$this->opSystem = $opSystem;
		}

		public function getOperatingSystem()
		{
			return $this->opSystem;
		}

	}
	class Cameras extends Products
	{
		private $rezolution;

		public function setRezolution($rezolution)
		{
			$this->rezolution = $rezolution;
		}

		public function getRezolution()
		{
			return $this->rezolution;
		}
	}

	$produkti = new Phones('iPhone 5s');
	$produkti->setPrice(200);
	$produkti->setQuantity(4);
	$produkti->setOperatingSystem('iOS');

	$produkti1 = new Phones(' iPhoneX');
	$produkti1->setPrice(700);
	$produkti1->setQuantity(2);
	$produkti1->setOperatingSystem('iOS');

	$produkti2 = new Phones(' Samsung A50');
	$produkti2->setPrice(230);
	$produkti2->setQuantity(6);
	$produkti2->setOperatingSystem('Android');



	echo "<table>";
 	echo "<tr><td>Category</td><td>Price</td><td>Quantity</td><td>Your Order Cost</td><td>Operating System</td></tr> ";
 	echo "<tr><td>".$produkti->Pname()."</td><td>".$produkti->getPrice()."<td>".$produkti->getQuantity()."</td><td>"
 	.$produkti->Calculate(200,4)."</td><td>".$produkti->getOperatingSystem()."</td></tr>";

 	echo "<tr><td>".$produkti1->Pname()."</td><td>".$produkti1->getPrice()."<td>".$produkti1->getQuantity()."</td><td>"
 	.$produkti1->Calculate(700,2)."</td><td>".$produkti1->getOperatingSystem()."</td></tr>";

 	echo "<tr><td>".$produkti2->Pname()."</td><td>".$produkti2->getPrice()."<td>".$produkti2->getQuantity()."</td><td>"
 	.$produkti2->Calculate(230,6)."</td><td>".$produkti2->getOperatingSystem()."</td></tr>";


 	$produkti3 = new Cameras('Canon');
	$produkti3->setPrice(300);
	$produkti3->setQuantity(4);
	$produkti3->setRezolution('4080');

	$produkti4 = new Cameras(' CanonPro');
	$produkti4->setPrice(700);
	$produkti4->setQuantity(2);
	$produkti4->setRezolution('PRO');

	$produkti5 = new Cameras(' DSLR');
	$produkti5->setPrice(1400);
	$produkti5->setQuantity(6);
	$produkti5->setRezolution('1080');

	echo "<tr><td>".$produkti3->Pname()."</td><td>".$produkti3->getPrice()."<td>".$produkti3->getQuantity()."</td><td>"
 	.$produkti3->Calculate(200,4)."</td><td>".$produkti3->getRezolution()."</td></tr>";

 	echo "<tr><td>".$produkti4->Pname()."</td><td>".$produkti4->getPrice()."<td>".$produkti4->getQuantity()."</td><td>"
 	.$produkti4->Calculate(700,2)."</td><td>".$produkti4->getRezolution()."</td></tr>";

 	echo "<tr><td>".$produkti5->Pname()."</td><td>".$produkti5->getPrice()."<td>".$produkti5->getQuantity()."</td><td>"
 	.$produkti5->Calculate(230,6)."</td><td>".$produkti5->getRezolution()."</td></tr>";


 
 	echo "</table>";
 ?>


 
 </body>
 </html>