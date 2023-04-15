
<?php include "header.php"; ?>
	
	<div id="welcomeBox">
		<h1>Welcome to your IT Support System</h1>
		<br>

		<form method="post" action="problem.php">
        <select name="title">
            <option value="Mr." selected>Mr.</option>    
            <option value="Mrs.">Mrs.</option>
            <option value="Miss">Miss</option>
            <option value="Mx">Mx</option>
        </select>

        <input type="text" name="firstName" placeholder="First Name"  required style="width:170px;">
        <input type="text" name="lastName" placeholder="Last Name"  required style="width:170px;">

        <select name="role" required>
            <option value="Admin" selected>Admin</option>    
            <option value="Manager">Manager</option>
            <option value="CEO">CEO</option>
        </select>
        
        <button type="submit" name="login">Login</button>
    </form>
		<br>
	</div> 
<?php include "footer.php" ?>
