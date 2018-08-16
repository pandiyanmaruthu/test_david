<?php
// function custom_error($errno,$errstr) {
//   echo "<br>Error: </br> [$errno] $errstr";
//   echo "Web Master must be notified";
//   error_log("Error: [$errorno] $errstr",1,"pandiyanmaruthu6@gmail.com","From:maruthu@integrityindia.com");
// }set_error_handler("custom_error");
//
// // if (!file_exists("fileupload1.php")) {
// //   die ("File not found");
// // }
// // else {
//   // $file=fopen("fileupload.php1","r");
//   // while (!feof($file)) {
//   //   echo fgets($file)."<br>";
//   // }
//   // fclose($file);
//   echo $gjjj;
//   set_error_handler("custom_error",E_USER_WARNING);
// $test=10;
//   if ($test>2) {
//     trigger_error("Value must be less then 2",E_USER_WARNING);
//   }
function checkNum($number) {
  if ($number > 1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}
try {
    checkNum(1);
    echo "If you see this the number is 1 or below";
}
catch(Exception $e) {
  echo "Message: ".$e->getMessage();
}



// } ?>
