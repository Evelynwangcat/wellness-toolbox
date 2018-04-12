<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Schedule</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background-color: #e6f1fc; background-image: url('assets/myAccountbg.png');background-repeat: repeat-x;"><!-- 大背景色 -->
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="blockfirst" style="width:90%; margin: 0px auto; height: 180px">
            <div style="position: absolute; top:50px; left:50px; width: 30px; height: 30px; cursor: pointer">
                    <a href="index.php"><img src="assets/backBotton.png" style="width: 30px; height: 30px;"></a>
            </div>
            <div style="width: 120px; height: 120px; border-radius: 50%; background-color: #ccc; margin: 0 auto; position:relative; bottom:-120px">
                <img src="assets/myAccountIcon.png" style="width:118px; padding: 1px">
                <br><br>
                <br><br>
                <br>
            </div>
        </div>
        <div class="blocktop" style="width:90%; margin: 0px auto 0 auto; background-color: #fff">
            <br><br>
            <div style="padding: 20px">
                <div style="text-align: center; padding: 5px; font-size: 18px ">Evelyn Wang</div>
                <div style="text-align: center; padding: 5px; font-size: 18px">Canada, Oakville</div>
                <div style="display: flex; flex-flow: row nowrap; justify-content:center;  padding: 5px;">
                    <div style="text-align: center; width:30%"><a href="schedule.php">My Schedule <br> 12</a></div>
                    <div style="text-align: center; width:30%"><a href="my-achievements.php">Achievement<br> 8</a></div>
                </div>
            </div>
        </div>
        
        <div class="blockdown" style="width:90%; margin: 20px auto; background-color: #fff">
            <?php session_start(); // START SESSION and add this content 

// USE THIS LINE TO ECHO USERNAME BACK TO THE USER: echo $_SESSION["Username"]; 

if($_SESSION["authenticated"] == true){ 
    require_once("includes/database.php");  // CONNECT TO THE DATABASE -->
    include("includes/header.php");  // ADD HEADER -->
    // include("includes/nav.php");   // ADD NAVIGATION 

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

<h2 class="intro-text">Intro Text Lorem ipsum dolor sit amet, consectetur adipisicing   elit. Dicta ipsam, perferendis eligendi sapiente debitis voluptatem sequi a velit ratione possimus corrupti quia libero architecto reiciendis labore nobis quibusdam, nemo nulla.</h2>

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
                <input type="submit" value="Remove" class="colorButton"/>
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

        </div>
    </body>
</html>
