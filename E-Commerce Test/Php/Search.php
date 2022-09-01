<?php



?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="Css\Style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" href="Img\favicon.ico" type="image/x-icon" />
	<title>Search - Sykkuno Store</title>
</head>
<body>
<header id="Home">
			<div class="header-left"><div class="logo"><a href="index.html"><img src="Img/Bimbus.png" alt="Can't Find Logo :("></a></div></div>
			<div class="header-middle"><h1>Sykkuno Store</h1></div>
			<div class="header-right">
				<div class="dropbtn"><i class="fa fa-bars" style="font-size:36px"></i>
					<div class="dropdown-content">
						<a href="Search.html">Search </a>
						<a href="Products.html">Products </a>
						<a href="Account.html">Account </a>
						<a href="Cart.html">Cart </a>
					 </div>
			 	</div>
			 </div>
 </header>
<main class="search">
<div class="left-half">
	<h1>Search the store of <em>xx</em> Products</h1>
	<div>
		<form action="Search.html" method="Get">
			<input type="search" placeholder="Search" id="search" name="search">
			<button type="submit" value="submit">Search</button>
		</form>
	</div>
</div>
<div class="right-half">
		<h1>Search for your Order</h1>
	<div>
		<form action="/Search.php" method="Get">
			<input type="text" placeholder="Order Number" name="OrderNumber" id="OrderNumber">
			<input type="email" name="email" placeholder="E-mail" id="Email">
			<button type="submit" value="submit">Look up</button>
		</form>
	</div>
</div>
</main>
		<footer class="footer">
			<div class="footer1">
				<ul>
					<li><a href="Signup.html">Sign up</a></li>
					<li><a href="Contact.html">Contact Us</a></li>
					<li><a href="Search.html">Order Lookup</a></li>
					<li><a href="Aboutus.html">About Us</a></li>
				</ul>
			</div>
			<div class="mailinglist">
				<h2>Join My Mailing List</h2>
				<input type="email" name="email" placeholder="Enter Email" class="mailinput">
				<input type="submit">
			</div>
			<div class="platform" >
				<!-- <a href="www.com" target="_blank"></a>-->
				<a href="https://twitter.com/Sykkuno" target="_blank"><i class="fa fa-twitter" style="font-size:40px; color: #1DA1F2;"></i></a>
				<a href="http://instagram.com/sykkuwu" target="_blank"><i class="fa fa-instagram" style="font-size:40px; color: #3f729b;"></i></a>
				<a href="https://www.twitch.tv/sykkuno" target="_blank"><i class="fa fa-twitch" style="font-size:40px; color: #6441a5;"></i></a>
				<a href="https://www.youtube.com/user/Sykkuno" target="_blank"><i class="fa fa-youtube-play" style="font-size:40px; color: #ff0000;"></i></a>
			</div>
			<div class="footerLogo">
				<img src="Img\gif.jpg" alt="bimbus">
			</div>
			<div class="upPage">
				<a href="#Home"><i class="fa fa-arrow-up" style="font-size:30px"></i></a>
			</div>
			<div class="payMethod">
				<i class="fa fa-cc-amex" style="font-size:32px; color: #1d8ece;"></i>
				<i class="fa fa-cc-discover" style="font-size:32px; color: darkorange;"></i>
				<i class="fa fa-cc-mastercard" style="font-size:32px; color: red;"></i>
				<i class="fa fa-cc-visa" style="font-size:32px; color: royalblue;"></i>
				<i class="fa fa-cc-paypal" style="font-size:32px; color:skyblue;"></i>
			 </div>
			<div class="copyright">
				<h4>Copyright&copy; <script>document.write(new Date().getFullYear());</script>, Sykkuno </h4>
			 </div>
		</footer>
</body>
</html>