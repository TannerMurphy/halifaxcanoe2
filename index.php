<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
	<header>
		<h1>Halifax Canoe and Kayak</h1>
		<div class="top">
			<a href="#" ><img src="images/hamburger.png" alt="hamburger icon" height="50"></a>
		</div>
		<a href="logout.php" class="logout"><img src="images/paddle-white.png" class="paddle-icon" alt="paddles icon">Logout</a>	
	</header>

	
    <!-- navigation menu that toggles out when the hamburger button is pressed -->
	<nav class="menu">
		<a href="index.html" class="item_menu">Home</a>
		<a href="#" class="item_menu">Book Trip</a>
		<a href="index.php" class="item_menu">Admin Login</a>
		<a href="#" class="item_menu">About</a>
		<a href="#" class="item_menu">Contact</a>
	</nav>
	
	<div id="welcomeBox">
		<h1>Welcome to your IT Support System</h1>
		<br>

		<form action="problem.php" method="POST">

			<div class="whiteBg leftSide">
			<select title="theTitle" class="firstFormField inARow">
				<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Dr">Dr</option>
				<option value="Mx">Mx</option>
			</select>

			<input title="firstName" type="text" class="inARow" placeholder="First Name">

			<input title="lastName" type="text" class="inARow" placeholder="Last Name">

			<select title="role" class="inARow">
				<option value="Admin">Admin</option>
				<option value="Manager">Manager</option>
				<option value="CEO">CEO</option>
			</select>
			</div>

			<input type="submit" name="submit" value="Submit" class="blueButton">
		</form>
		<br>
	</div> 
	
	<footer>
		Halifax Canoe and Kayak - Tanner Murphy 2023
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</html>