<?php 
session_start();
include("includes/database.php");  // CONNECT TO THE DATABASE 
include("includes/header.php");  // ADD HEADER 
include("includes/nav.php");   // ADD NAVIGATION 
?>
	<div>
		<h2>Register to Create Your Wellness Toolbox!</h2>
		<form action="process-registration.php" method="POST">
			<label for="Username">Name:</label><br>
			<input type="text" name="Username" id="Username" /> <!-- attribute name is used to insert value into database - see process-add-idea.php for variable definitions -->
			<br>
	        <label for="Password">Password:</label><br>
			<input type="text" name="Password" id="Password"/>
			<br>
			<label for="Email">Email:</label><br>
			<input type="text" name="Email" id="Email" /> 
			<br>
	        <input type="submit" name="submit" />
        </form>
    </div>    
<?php include("includes/footer.php");  ?><!-- ADD FOOTER -->