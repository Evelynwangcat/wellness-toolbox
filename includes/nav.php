<?php ?>
<nav >
	<img src="assets/schedule.png" style="position: relative; width:100px; top:20px;">
	<ul style="padding: 10px;">
		<? if($_SESSION["authenticated"] == false){ ?>
		<li><a href="register.php">Register</a></li>
		<li><a href="login-form.php">Sign In</a></li>
		<? } elseif ($_SESSION["authenticated"] == true){ ?>
		<li>Hello, <?php echo $_SESSION["Username"]; ?></li>
		<li><a href="index.php">Home</a></li>
		<li><a href="my-tools.php">My Toolbox</a></li>
		<li><a href="schedule.php">Shcedule</a></li>
		<li><a href="my-achievements.php">My Achievements</a></li>
		<li><a href="myAccount.php">My Account</a></li>
		<li><a href="logout.php">Logout</a></li>
		<? } ?>
	</ul>
</nav>