<?php 
session_start();

$Username = $_POST["Username"];
$Password = $_POST["Password"];
//$UserID = $_GET["User-id"];

include("includes/database.php");

$stmt = $pdo->prepare("SELECT * FROM `User` WHERE `Username` = '$Username' AND `Password` = '$Password';");

$stmt->execute();


//IF-ELSE: if logged in - show Welcome, if logged out - show bad username and pass

if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	$_SESSION["authenticated"] = true;
	$_SESSION["Username"] = $row['Username'];
	$_SESSION["UserID"] = $row['User-id'];

    //echo("You are Logged In.");
    //echo("Your user ID is");
    //echo $Username;
    // ADD A MESSAGE TO SHOW THEM THEY ARE LOGGED IN --- OR   
    // REDIRECT TO
	header("Location: my-tools.php");

}else{
	//BAD USERNAME AND PASSWORD message
	echo("bad username and password. Please try again");
	?><a href="login-form.php">Login here</a><?
}
?>