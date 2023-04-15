<?php include "header.php" ?>

	<div id="welcomeBox">
		<h1>Please enter your email to create an account</h1>
		<br> 
		<form method="post" action="send-email.php">
			<input type="text" name="emailAccount" value ="email" required>
			<button type="submit" name="sumbit">Submit</button>
			<br>
		</form>
	</div>
	<?php include "footer.php" ?>
</html>