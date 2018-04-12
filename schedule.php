<?php session_start(); 

if($_SESSION["authenticated"] == true){ 
  require_once("includes/database.php");  // CONNECT TO THE DATABASE -->
  include("includes/header.php");  // ADD HEADER -->                              <!-- Note to Evelyn: This header includes css styles -->
  include("includes/nav.php");   // ADD NAVIGATION 

$User_id = $_SESSION["UserID"];
$username = $_SESSION["Username"];


// $stmt = $pdo->prepare ("SELECT *  
// FROM `Schedule` 
//     INNER JOIN `MyTools`
//         ON `Schedule`.`Tool-id` = `MyTools`.`Tool-id`
//     INNER JOIN `Tool`
//         ON `Schedule`.`Tool-id` = `Tool`.`Tool-id`    
// WHERE `Schedule`.`User-id` = '$User_id'");


$stmt = $pdo->prepare ("SELECT * FROM `Schedule` INNER JOIN `Tool` ON `Schedule`.`Tool-id` = `Tool`.`Tool-id` WHERE `User-id` = '$User_id'");


$stmt2 = $pdo->prepare ("SELECT *  
FROM `Schedule`"); 

$stmt->execute();
$stmt2->execute();

?>



<!-- 
<!doctype html>
<html class="no-js" lang="en"> -->
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
    <body style="background-color: #e6f1fc; background-image: url('assets/bg.jpg');background-repeat: repeat-x;"><!-- 大背景色 -->
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <div class="blockfirst" style="width:90%; margin: 0px auto; height: 180px">
            <div style="position: absolute; top:50px; left:50px; width: 30px; height: 30px; cursor: pointer">
                    <a href="index.php"><img src="assets/backBotton.png" style="width: 30px; height: 30px;"></a>
            </div>
            <div style="width: 120px; height: 120px; border-radius: 50%; background-color: #ccc; margin: 0 auto; position:relative; bottom:-120px">
                <img src="assets/schedule.png" style="width:118px; padding: 1px">
                <br><br>
                <br><br>
                <br>
            </div>
        </div>
        <div class="blocktop" style="width:90%; margin: 0px auto 0 auto; background-color: #fff">
            <br><br>
            <br><br>
            <div style="padding: 20px">Wellness Toolbox could help you to build the schedule with the toolbox easily. You could do the quick create as well.  </div>
        </div>







<p> User id: <? echo($User_id); ?></p>
          <table style="width:100%; font-size: 22px; background-color: #fff; line-height: 1.5em; margin-top: 20px; text-align: center;">
            <tr style="background-color: #29ABE2; color: #fff">
              <td>Tool ID:</td>
              <td>Tool Name:</td>
              <td>Date:</td>
              <td></td>
            </tr>
            <? while($row = $stmt->fetch()) { ?> <!-- Begin Output from Database-->
                      <tr style="font-size: 14px;">
                        <td> <? echo($row["Tool-id"]);?> </td>
                        <td> <? echo($row["Name"]);?> </td>
                        <td> <? echo($row["Date"]);?> </td>
                        <td> <? echo($row["User-id"]);?> </td>
                      </tr>
            <? } ?> <!-- End Output from Database-->     
          </table>

<p>        
<? while($row = $stmt->fetch()) { ?>
<? echo($row["Date"]);?> <? echo($row["User-id"]);?> <br>
<? } ?>
</p>







        <div class="blockdown" style="width:90%; margin: 20px auto; background-color: #fff">
            <div style="padding: 20px">
                <div class="container" style="display: inline;">
                    <!-- Add your site or application content here -->
                <p>Plan and Print Your Weekly Activities</p>
                <p style=" line-height: 2em">Click Here<a href="https://www.getselfhelp.co.uk//docs/WeeklyPlanner.pdf"> to print your schedule. <img src="assets/print.png" style="width:20px; position: relative; top: 5px"></a></p>
                </div> <!-- ends div class container -->

                <p class="" style="font-size:28px; text-align: center; padding: 20px; border-color: #f1c2ca">Schedule</p>
                <!-- <div class="listBG"></div> -->
                <div class="global_layout" style="width:90%; display: flex; flex-flow: row nowrap; justify-content:center;"> 
                    <div style="width: 30%; ">
                      <form action="" method="post" enctype="multipart/form-data">
                        <div class="col col2" style="display: flex; flex-flow: column; justify-content:center; margin-top: 20px; ">
                          <p style="font-size:25px">Quick Create</p>
                          <input type="text" placeholder="Date" name="date" style="width: 70%; line-height: 1.5em;font-size:16px" required><br><br>
                          <input type="text" placeholder="Your Toolbox" name="your toolbox" style="width: 70%; line-height: 1.5em;font-size:16px" required><br><br>
                          <select name="option" style="width: 70%; line-height: 1.5em;font-size:16px" required>
                              <option value ="">Select option</option>
                              <option value ="Sport">Sport</option>
                              <option value ="Entertainment">Entertainment</option>
                              <option value="Study">Study</option>
                              <option value="Work">Work</option>
                              <option value="Housework">Housework</option>
                            </select><br><br>
                          <input type="text" placeholder="Duration" name="duration" style="width: 70%; line-height: 1.5em;font-size:16px" required><br><br>
                            <input type="submit" class="add_detail" name="add" style="background: linear-gradient(0.25turn, #d580fe, #0a9bd6);color:#fff;width: 70%;padding: 5px;font-size:16px;border-radius:20px">
                        </div>
                      </form>
                    </div>
                    <div style="width: 60%">
                    <form action="" method="post">
                        <table style="width:100%; font-size: 22px; background-color: #fff; line-height: 1.5em; margin-top: 20px; text-align: center;">
                          <tr style="background-color: #29ABE2; color: #fff">
                            <td>Date</td>
                            <td>Toolbox</td>
                            <td>Duration</td>
                            <td>Checkbox</td>
                          </tr>
                          <tr style="font-size: 14px;">
                            <td>2018/3/28</td>
                            <td>Yoga</td>
                            <td>20 mintues</td>
                            <td><input type="checkbox" name="complete" value=""/> complete</td>
                          </tr>
                          <tr style="font-size: 14px; background-color: #ccc;">
                            <td>2018/3/28</td>
                            <td>Yoga</td>
                            <td>20 mintues</td>
                            <td><input type="checkbox" name="complete" value=""/> complete</td>
                          </tr>
                        </table>
                    </form>
                    </div>
                </div>
            </div>
        </div>
<? include("includes/footer.php");  

} else { 
  ?>
  <p>You are not allowed to view this page. Please <a href="login-form.php">log in here.</a></p>
  <? 
}
  ?>
