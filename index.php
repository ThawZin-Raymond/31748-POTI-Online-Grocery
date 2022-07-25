<?php
session_start();
if(!isset($_SESSION['shoppingcart'])){
	$_SESSION['shoppingcart']=0;
	$_SESSION['count']=0;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Online Grocery Store</title>
		<link rel = "stylesheet" href = "mystyle.css">
	</head>
	<body>
		<div class="header">
			
			<h1>Online Grocery Store</h1>
		</div>
		<div class="wholepage">
			<div class="mainpage-side">
				<h2>Product Categories</h2>
				<div class="navi-bar">
					<div class ="dd">
						<button class="ddbutton">Frozen Food</button>
						<div class = "dd-content">
							<div class="row">
								<div class="column">
									<h3>Fish Fingers</h3>
									<a href="top_right.php?product_id=1000" target="top-right">Fish Finger-(500g)</a>
			                     	<a href="top_right.php?product_id=1001" target="top-right">Fish Fingers-(1000g)</a>
								</div>
								<div class="column">
									<h3>Tub Ice Cream</h3>
									<a href="top_right.php?product_id=1004" target="top-right">Tub Ubce Cream-1litre</a>
			                      	<a href="top_right.php?product_id=1005" target="top-right">Tub Ubce Cream-2litre</a>
								</div>
								<div class="column">
									<h3>Hamburger Patties</h3>
									<a href="top_right.php?product_id=1002" target="top-right">Hamburger Patties</a>
								</div>
								<div class="column">
									<h3>Prawns</h3>
									<a href="top_right.php?product_id=1003" target="top-right">Shelled Prawns</a>
								</div>
							</div>
						</div>
					</div>
					<div class ="dd">
						<button class="ddbutton">Fresh Food</button>
						<div class = "dd-content">
							<div class="row">
								<div class="column">
									<h3>Fresh Fruits</h3>
									<a href="top_right.php?product_id=3003" target="top-right">Navel Oranges</a>
			                    	<a href="top_right.php?product_id=3004" target="top-right">Bananas</a>
				                    <a href="top_right.php?product_id=3006" target="top-right">Grapes</a>
				                    <a href="top_right.php?product_id=3007" target="top-right">Apples</a>
				                    <a href="top_right.php?product_id=3005" target="top-right">Peaches</a>
								</div>
								<div class="column">
									<h3>Chedder Chesse</h3>
									<a href="top_right.php?product_id=3000" target="top-right">Chedder Cheese-(500g)</a>
				                    <a href="top_right.php?product_id=3001" target="top-right">Chedder Cheese-(1000g)</a>
								</div>
								<div class="column">
									<h3>Meat</h3>
									<a href="top_right.php?product_id=3002" target="top-right">T Bone Steak</a>
								</div>
							</div>
						</div>
					</div>
					<div class ="dd">
						<button class="ddbutton">Beverages</button>
						<div class = "dd-content">
							<div class="row">
								<div class="column">
									<h3>Coffee</h3>
									<a href="top_right.php?product_id=4003" target="top-right">Coffee-(200g)</a>
				                    <a href="top_right.php?product_id=4004" target="top-right">Coffee-(500g)</a>
								</div>
								<div class="column">
									<h3>Earl Grey Tea Bags</h3>
									<a href="top_right.php?product_id=4000" target="top-right">Tea Bags-pack 25</a>
			                      	<a href="top_right.php?product_id=4001" target="top-right">Tea Bags-pack 100</a>
			                      	<a href="top_right.php?product_id=4002" target="top-right">Tea Bags-pack 200</a>
								</div>
								<div class="column">
									<h3>Chocolate</h3>
									<a href="top_right.php?product_id=4005" target="top-right">Chocolate Bar</a>
								</div>
							</div>
						</div>
					</div>
					<div class ="dd">
						<button class="ddbutton">Home Health</button>
						<div class = "dd-content">
							<div class="row">
								<div class="column">
									<h3>Panadol</h3>
									<a href="top_right.php?product_id=2000" target="top-right">Panadol-pack 24</a>
				                    <a href="top_right.php?product_id=2001" target="top-right">Panadol-bottle 50</a>
								</div>
								<div class="column">
									<h3>Garbage Bags</h3>
									<a href="top_right.php?product_id=2003" target="top-right">Garbage Bags-(pack 10)</a>
			                       	<a href="top_right.php?product_id=2004" target="top-right">Garbage Bags-(pack 50)</a>
								</div>
								<div class="column">
									<h3>Bath Soap</h3>
									<a href="top_right.php?product_id=2002" target="top-right">Bath Soap</a>
								</div>
								<div class="column">
									<h3>Washing Powder</h3>
									<a href="top_right.php?product_id=2005" target="top-right">Washing Powder</a>
								</div>
								<div class="column">
									<h3>Laundary Bleach</h3>
									<a href="top_right.php?product_id=2006" target="top-right">Laundary Bleach</a>
								</div>
							</div>
						</div>
					</div>
					<div class ="dd">
						<button class="ddbutton">Pet Food</button>
						<div class = "dd-content">
							<div class="row">
								<div class="column">
									<h3>Dry Dog Food</h3>
									<a href="top_right.php?product_id=5001" target="top-right">Dry Dog Food-1kg. pack</a>
				                    <a href="top_right.php?product_id=5000" target="top-right">Dry Dog Food-5kg. pack</a>
								</div>
								<div class="column">
									<h3>Bird Food</h3>
									<a href="top_right.php?product_id=5002" target="top-right">Bird Food</a>
								</div>
								<div class="column">
									<h3>Cat Food</h3>
									<a href="top_right.php?product_id=5003" target="top-right">Cat Food</a>
								</div>
								<div class="column">
									<h3>Fish Food</h3>
									<a href="top_right.php?product_id=5004" target="top-right">Fish Food</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
		</div>
		
		<div class="right-side">
			<iframe id="ifra1" name="top-right" frameborder="1" width="100%" height="350px" src="top_right.php"></iframe>
			<iframe name="bottom-right" frameborder="1" width="100%" height="350px" src="bottom_right.php"></iframe>
		</div>
	</div>

		
	</body>
</html>