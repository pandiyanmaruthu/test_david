<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <body>
    <?php
    $_SESSION["favcolor"]="Green";
    $_SESSION["favhobby"]="nothing";
    echo "Session variables are set";
    ?>
  </body>
</html>
