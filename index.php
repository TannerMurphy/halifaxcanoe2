<?php include "header.php" ?>
	
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
	
	<?php include "footer.php" ?>
</html>