<?php session_start(); // START SESSION and add this content 

// USE THIS LINE TO ECHO USERNAME BACK TO THE USER: echo $_SESSION["Username"]; 

if($_SESSION["authenticated"] == true){ 
	require_once("includes/database.php");  // CONNECT TO THE DATABASE -->
	include("includes/header.php");  // ADD HEADER -->
	include("includes/nav.php");   // ADD NAVIGATION 

    $User_id = $_SESSION["UserID"];
	$username = $_SESSION["Username"];
	$sectionB = "B";
	$sectionA = "A";
	$sectionC = "C";
	$sectionE = "E";
	$sectionS = "S";

	
	$stmt = $pdo->prepare("SELECT `Tool`.`Tool-id`,`Tool`.`Name`, `Tool`.`Section`, `Tool`.`Description`
	FROM `Tool` INNER JOIN `MyTools` 
	ON `Tool`.`Tool-id`=`MyTools`.`Tool-id`
	WHERE `MyTools`.`User-id` = $User_id"); // THIS LINE SELECTS ONLY THE CURRENT USER'S IDEAS -variable name should be encased in single quotes and column names in backticks

	$stmtB = $pdo->prepare("SELECT * FROM `MyTools` WHERE `Section` = '$sectionB'");
	$stmtA = $pdo->prepare("SELECT * FROM `MyTools` WHERE `Section` = '$sectionA'");
	$stmtC = $pdo->prepare("SELECT * FROM `MyTools` WHERE `Section` = '$sectionC'");
	$stmtE = $pdo->prepare("SELECT * FROM `MyTools` WHERE `Section` = '$sectionE'");
	$stmtS = $pdo->prepare("SELECT * FROM `MyTools` WHERE `Section` = '$sectionS'");

    $stmt->execute();
    $stmtB->execute();
    $stmtA->execute();
    $stmtC->execute();
	$stmtE->execute();
	$stmtS->execute();
?>
	
<h1 class="header"><?php echo  $username; ?>, This is Your Wellness Toolbox</h1>

<h2 class="intro-text">Intro Text Lorem ipsum dolor sit amet, consectetur adipisicing 	elit. Dicta ipsam, perferendis eligendi sapiente debitis voluptatem sequi a velit ratione possimus corrupti quia libero architecto reiciendis labore nobis quibusdam, nemo nulla.</h2>

<h2><? echo  $username; ?>'s Tools:</h2>


<section class="tool-type">
	<ul>
	<?
	while($row = $stmt->fetch()) {
	?>
		<li>
			<p><? echo($row["Tool-id"]); ?> : <? echo($row["Name"]);?>, Section: <? echo($row["Section"]);?></p>
			<form action="process-delete-tool.php" method="POST">
				<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
				<input type="submit" value="Remove" />
			</form>
		</li>
	<? 
	}
	?>
	</ul>
</section>
	<?php include("includes/footer.php");  
} else { 
	?>
	<p>You are not allowed to view this page. Please <a href="login-form.php">log in here.</a></p>
	<? 
}
	?>