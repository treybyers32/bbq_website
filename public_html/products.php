<!DOCTYPE php>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Products | Bagel's BBQ Sauce</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<style>
table {
    border: 1px solid black;
}
tr {
    text-align: center;
}
th {
    text-align: center;
    background-color: #ba8736;
    color: white;
    font-variant: small-caps;
}
tr:nth-child(even) {
    background-color: #fae4af;
}
tr:hover {
    background-color: #fcf4e1;
}
.bbq {
    width: 250px;
}
</style>

</head>

<body>
	<header>
		<img src="img/content/logo.png" alt="The Bagel's logo." class="logo">
		<nav><ul>
			<li><a href="index.php">Home Page</a></li>
		<li><a href="products.php">Products</a></li>
		<li><a href="recipes.php">Recipes</a></li>
		<li><a href="news.php">News</a></li>
		<li><a href="locations.php" class="active">Locations</a></li>
		<li><a href="about.php">About</a></li>
		</ul></nav>
	</header>
	
	<div style="overflow-x:auto;">
		<h1>Products</h1>
		<table>
		  <thead>
		    <tr>
		      <th>Name</th>
		      <th>Picture</th>
		      <th>Description</th>
		      <th>Spice Rating</th>
		      <th>Price</th>
		      <th>In stock?</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><b>Original Bagel's</b></td>
		      <td><img class="bbq" src="img/content/original_sauce.png" alt="Bagel's original sauce."></td>
		      <td>This classic Bagel's recipe will surely make your mouth water!</td>
		      <td>4/10</td>
		      <td>$10.00</td>
		      <td id="in-stock">In Stock</td>
		    </tr>

		    <tr>
		      <td><b>Eastern BBQ Sauce</b></td>
		      <td><img class="bbq" src="img/content/eastern_bbq_sauce.png" alt="Bagel's eastern barbecue sauce."></td>
		      <td>Perfect mixture of Sweet Peppers and Onion, Bagel's Eastern Style BBQ Sauce will keep your taste buds begging for more.</td>
		      <td>0/10</td>
		      <td>$15.00</td>
		      <td id="notinstock">Out of stock</td>
		    </tr>

		    <tr>
		      <td><b>Dragon's Venom</b></td>
		      <td><img class="bbq" src="img/content/dragons_venom.png" alt="Bagel's Dragon's Venom sauce."></td>
		      <td>Harvested straight from the Dragon Viper's mouth, this <i>extremely</i> spicy sauce probably won't kill you.</td>
		      <td>30/10 (Extreme)</td>
		      <td>$750.00</td>
		      <td id="limited">Limited</td>
		    </tr>

		    <tr>
		      <td id="new"><b><i>**New**</i> Honey Mustard</b></td>
		      <td><img class="bbq" src="img/content/honey_mustard.png" alt="Bagel's honey mustard."></td>
		      <td>Momma's homemade Dijon Mustard with a dash of natural Bumblebee honey.</td>
		      <td>3/10</td>
		      <td>$15.00</td>
		      <td id="stocked">In Stock</td>
		    </tr>
		  </tbody>
		</table>
	</div>

	<footer>
	<p>&#169; Copyright 2019 Bagel's Sauce and Co.| Website by Trey Byers</p>
	</footer>
</body>
</html>