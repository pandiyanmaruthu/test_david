<?php
$mobile=array(array("samsung",3,20000),
array("redmi",2,42321),
array("iphone",5,1243231),
array("oneplus",6,124431),
array("oneplus",6,124431),
array("oneplus",6,124431),
array("oneplus",6,124431),
array("oneplus",6,124431,"maruthu"));

// echo $mobile[0][0]." ".$mobile[0][1]." Numbers is ".$mobile[0][2]."<br>";
// echo $mobile[1][0]." ".$mobile[1][1]." Numbers is ".$mobile[1][2]."<br>";
// echo $mobile[2][0]." ".$mobile[2][1]." Numbers is ".$mobile[2][2]."<br>";
echo count($mobile)."<br>";
for ($i=0; $i <count($mobile); $i++) {
  echo "<p><b>Row Number ".($i+1)." </b></p>";
  echo "<ul>";
  for ($j=0; $j <count($mobile[$i]) ; $j++) {
    # code...
    // echo "<li>";
    // echo $mobile[$i][$j]." ".$mobile[$i][$j+1]." Number is" .$mobile[$j+2]."<br>";
    // echo "</li>";
    echo "<li>".$mobile[$i][$j]."</li>";

  }
  echo "</ul>";
  echo "The indian Time is ".date("d-m-Y h-i-sa")."<br>";
  date_default_timezone_set("America/New_York");
  echo "The USA/NewYork Time is ".date("d-m-Y h-i-sa")."<br>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    &copy; 2010 - <?php echo date('Y'); ?>

  </body>
</html>
