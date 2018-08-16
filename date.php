<?php
session_start() ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>date</title>
    <link rel="stylesheet" href="../css/bootstrap.css"></link>
  </head>
  <body>
    <div class="navbar navbar-dark bg-dark">
    <?php include "header.php"; ?>
  </div>
    <div class="container">
      <div class="jumbotron">

    <?php
    echo "Today is ".date("Y/m/d")." <br> ";
    echo "Today is ".date("Y/m/d h:i:sa" )." <br> ";
    echo "Today is ".date("l")."<br>";
    $d=mktime(24,45,0,01,14,2019);
    echo "Pongal is ".date("Y-m-d h:i:sa",$d)."<br>";
    $d1=strtotime("+1 day");
    echo "Tomorrow right now is ".date("Y-m-d h:i:sa",$d1)."<br>";
    $d2=strtotime("next saturday");
    echo "Next saturday is: ".date("Y-m-d h:i:sa",$d2)."<br>";
    $d3=strtotime("+3 months");
    echo "After 3 Months: ".date("Y-m-d h:i:sa",$d3)."<br>";
    $startdate=strtotime("saturday");
    $enddate=strtotime("+10 weeks",$startdate);
    while ($startdate < $enddate) {
      echo date("M d Y",$startdate)."<br>";
      $startdate=strtotime("+1 week",$startdate);
    }
    // $startdate1=strtotime("")
    $startda=strtotime("Aug 15");
    echo "The days: ".ceil(($startda-time())/60/60/24)."<br>";
    include "footer.php";
    // echo $_COOKIE[$name];
    echo "<br>";
    echo "Favorite Color is: ".$_SESSION["favcolor"]."<br>";
    echo "Favorite hobby is: ".$_SESSION["favhobby"]."<br>";
    print_r($_SESSION);
    echo "<br>";
    $_SESSION["favcolor"]="Black";
    print_r($_SESSION);
    session_unset();
    print_r($_SESSION);
    session_destroy();
    echo "<br>";
    print_r($_SESSION);
    ?>

</div>
</div>
  </body>
</html>
