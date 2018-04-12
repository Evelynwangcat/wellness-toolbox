<?php require_once("includes/database.php"); ?> <!-- CONNECT TO THE DATABASE -->
<?php include("includes/header.php"); ?> <!-- ADD HEADER -->
<h2>Thanks for Registering. Log In</h2>
<form action="process-login.php" method="POST"> 
	 Username: <input type="text" name="Username" />
	 Password: <input type="text" name="Password" />
	<input type="submit" />   
</form>
<? include("includes/footer.php"); ?>