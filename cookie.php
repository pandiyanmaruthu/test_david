<?php
$name="maruthu";
$value="Linux Administrator";
$value1="Open Source Developer";
// setcookie($name,$value1,time()+(86400 *30),'/');
setcookie($name,$value1,time()+  (86400*30),"/")?>
<!DOCTYPE html>
<html>
  <body>
    <?php if (!isset($_COOKIE[$name])) {
      echo "Cooke name ".$name." is not set <br> ";
        echo "Cookie deleted <br>";
          echo count($_COOKIE);
    }
    else {
      echo "Cookie ".$name." is set <br>";
      echo "Value is ".$_COOKIE[$name]."<br>";
      echo count($_COOKIE);
    }?>
  </body>
</html>
