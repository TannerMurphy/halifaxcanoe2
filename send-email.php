<?php include "header.php" ?>
	<?php	
	$emailAccount = "";
	$emailPassword = "";
	
	$emailAccount = $_POST["emailAccount"];
	$emailPassword = $_POST["emailPassword"];

	$_SESSION['emailAccount'] = $emailAccount;
	$_SESSION['emailPassword'] = $emailPassword;
	?>
	<div id="welcomeBox">
		<?php
			if ($_SESSION['emailAccount']) {echo "<h1>You will recieve an email shortly to confirm your account</h1><br><a href='logout.php'>OK</a>";
			}
			
			if ($_SESSION['emailPassword']) {echo "<h1>You will recieve an email shortly to reset your password</h1><br><a href='logout.php'>OK</a>";
			}

        ?>
	</div>
	<?php include "footer.php" ?>
</html>