<?php 
session_start();
?>
<?php require_once("includes/database.php"); ?> <!-- CONNECT TO THE DATABASE -->
<?php include("includes/header.php"); ?> <!-- ADD HEADER -->
<?php include("includes/nav.php"); ?>    <!-- ADD NAVIGATION --> 
<section>
	<h2>Please Log In</h2>
    <form action="process-login.php" method="POST"> 
		 Username: <input type="text" name="Username" />
		 Password: <input type="text" name="Password" />
		<input type="submit" />   
    </form>
</section>
<? include("includes/footer.php"); ?>