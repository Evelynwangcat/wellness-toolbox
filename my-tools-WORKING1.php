<?php session_start(); // START SESSION and add this content 

// USE THIS LINE TO ECHO USERNAME BACK TO THE USER: echo $_SESSION["Username"]; 

if($_SESSION["authenticated"] == true){ 
	require_once("includes/database.php");  // CONNECT TO THE DATABASE -->
	include("includes/header.php");  // ADD HEADER -->
	include("includes/nav.php");   // ADD NAVIGATION 

    $userid = $_SESSION["Username"];

	$stmt = $pdo->prepare("SELECT * FROM `MyTools` WHERE `User-id` = '$userid'"); // THIS LINE SELECTS ONLY THE CURRENT USER'S IDEAS -variable name should be encased in single quotes and column names in backticks

    $stmt->execute();
?>
    	<h1 class="header"><?php echo  $userid; ?>, This is Your Wellness Toolbox</h1>
		<h2 class="intro-text">Intro Text Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ipsam, perferendis eligendi sapiente debitis voluptatem sequi a velit ratione possimus corrupti quia libero architecto reiciendis labore nobis quibusdam, nemo nulla.</h2>

  
	    <section class="tool-type">
	    	<h2><? echo  $userid; ?>'s Ideas:</h2>

	    	<section class="tool-type">
			<h1>Category B</h1>
	   
				<?
				while($row = $stmt->fetch()) {
					?>
					<ul>
						<li>
							<p><? echo($row["Tool-id"]); ?>Tool-id</p>
							<form action="process-delete-tool.php" method="POST">
								<input type="hidden" name="id" value="<?= $row["Tool-id"]; ?>"/>
								<input type="submit" value="Remove <?= $row["Tool-id"]; ?>"/>
							</form>
						</li>	
					</ul>
   				<? 
				} 
				?>
		
		

    <?php include("includes/footer.php");  ?><!-- ADD FOOTER -->

<?php } else { 
	?>
	<p>You are not allowed to view this page. Please <a href="login-form.php">log in here.</a></p>
<? 
}
?>