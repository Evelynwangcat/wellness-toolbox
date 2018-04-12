<?php 
session_start();
include("includes/database.php");  // CONNECT TO THE DATABASE 
include("includes/header.php");  // ADD HEADER 
include("includes/nav.php");   // ADD NAVIGATION 

$userid = $_SESSION["Username"];
$sectionB = "B";
$sectionA = "A";
$sectionC = "C";
$sectionE = "E";
$sectionS = "S";

$stmtB = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionB'");
$stmtA = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionA'");
$stmtC = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionC'");
$stmtE = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionE'");
$stmtS = $pdo->prepare("SELECT * FROM `Tool` WHERE `Section` = '$sectionS'");

$stmtB->execute();
$stmtA->execute();
$stmtC->execute();
$stmtE->execute();
$stmtS->execute();

?>
<h1 id="app-title">Wellness Toolbox</h1>
<h2 class="intro-text">Intro Text Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ipsam, perferendis eligendi sapiente debitis voluptatem sequi a velit ratione possimus corrupti quia libero architecto reiciendis labore nobis quibusdam, nemo nulla.</h2>
<div>
	<section class="tool-section">
		<h1>B - BODY - PHYSICAL HEALTH</h1>
		<div class="tool-description-container">
		<div class="section-description">BODY: Take care of your physical health.
		<ul>
			<li>Take steps to ensure you get enough sleep</li>
			<li>Eat healthily and regularly</li>
			<li>Exercise regularly, preferably in an outside/natural space</li>
			<li>Plan rest times too</li>
			<li>Beware of how things like drink, drugs, smoking and caffeine affect you</li>
		</ul>  
		</div>  	
		<h3>List of Tools in this section</h3>
		
		<?
		while($row = $stmtB->fetch()) {
		?>
		<ul>
			<li>
				<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>	
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>		
	</section>
	<section class="tool-section">
		<h1>A - Achievement </h1>
		<div class="tool-description-container">
		<div class="section-description">
			Our brain gets a boost when we achieve things during the day.  Achievement increases the neurotransmitter dopamine and purposeful activity increases serotonin. It is therefore very helpful to plan realistic and achieveable goals every day, such as those concerning work, chores  and study, but we can also set goals and achieve activities relating to Connecting to others and Enjoyment and Exercise.
		</div>
		<h3>List of Tools in this section</h3>
		<?
		while($row = $stmtA->fetch()) {
		?>
		<ul>
			<li>
				<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>	
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>	
	</section>
	<section class="tool-section">
		<h1>C - CONNECT</h1>
		<div class="tool-description-container">
			<div class="section-description">
			content from c section
			</div>
		<?
		while($row = $stmtC->fetch()) {
		?>
		<ul>
			<li><p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>		
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>	
	</section>
	<section class="tool-section">
		<h1>E - ENJOY</h1>
		<div class="tool-description-container">
			<div class="section-description">
			content from e section
			</div>
		<?
		while($row = $stmtE->fetch()) {
		?>
		<ul>
			<li>
				<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>	
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>	
	</section>
	<section class="tool-section">
		<h1>S - STEP BACK</h1>
		<div class="tool-description-container">
			<div class="section-description">
			content from s section
			</div>
		<?
		while($row = $stmtS->fetch()) {
		?>
		<ul>
			<li>
				<p><? echo($row["Tool-id"]); ?>: <? echo($row["Name"]); ?></p>
				<form action="process-add.php" method="POST">
					<input type="hidden" value="<?= $row["Tool-id"]; ?>" name="Tool-id">
					<input type="submit" class="colorButton" name="" value="ADD <? echo $row["Tool-id"]; ?>" />
				</form>	
			</li>	
		</ul>
		<? 
		} 
		?>
		<br>
		<p>What else can you do to improve your physical health?</p>
		<ul><!-- ADD YOUR OWN (NEW) TOOL TO DATABASE -->						
			<li>
				<a href="add-your-tool.php"><input type="button" value="Create your own tool" /></a>
			</li>
		</ul>
		</div>
	</section>
</div>
<? include("includes/footer.php");  ?><!-- ADD FOOTER -->	