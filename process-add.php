<?php
session_start();
if($_SESSION["authenticated"] == false){
	?>
	You are not logged in. Please log in <a href="login-form.php">here</a>. 
	?>
	<?
}else{
	$User_id = $_SESSION["UserID"];
	$Tool_id = $_POST['Tool-id'];  /////// HOW DO WE GET THE TOOL ID SELECTED FROM THE PREVIOUS PAGE ???????????
	//SECTION ?????? 

	//$User_id = $_POST['User-id'];
	// $Section = ????? HOW TO GRAB DATA FROM THE OTHER 2 TABLES AND INSERT IT BACK ??????

	include("includes/database.php");
	
	$stmt = $pdo->prepare("INSERT INTO `MyTools` (`User-id`,`Tool-id`) VALUES ($User_id,$Tool_id);");
	
	$stmt->execute();	

	header("Location:my-tools.php");

} 
?>