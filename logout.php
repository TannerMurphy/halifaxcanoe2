<?php include "header.php" ?>

	<div id="welcomeBox">
	<h1>You have been successfully logged out</h1> 
	<br>
	<a href='index.php'>Back to IT support</a>
	<br>
	</div>
	<?php   
	session_destroy(); //destroy the session
	?>
	<?php include "footer.php" ?>
</html>