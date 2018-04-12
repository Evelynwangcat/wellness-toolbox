<?php require_once("includes/database.php"); ?>  <!-- CONNECT TO THE DATABASE -->
<?php 
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Email = $_POST["Email"];

$stmt = $pdo->prepare("INSERT INTO `User` 
	(`Username`, `Password`, `Email`) 
	VALUES ('$Username','$Password','$Email');");

$stmt->execute();
?>

<script type="text/javascript">window.location = "http://kouzaevi.dev.fast.sheridanc.on.ca/wellness-toolbox/reg-confirmation.php"</script> <!-- Reference 3 - StackOverflow, 2017 -->
<!-- JS is used to redirect user to next page because php header gives me this error if I use header('Location:dashboard.php'); Warning: Cannot modify header information - headers already sent by (output started at /home/kouzaevi/public_html/idea-manager/process-registration.php:2) in /home/kouzaevi/public_html/idea-manager/process-registration.php on line 14 -->