<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Result</title>
  </head>
  <body>
    <?php
        $name=$email="";
        if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $name=test_data($_POST["Name"]);
        $email=test_data($_POST["Email"]);
        }

    function test_data($data) {
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
    ?>
    <h1>Name: <?php echo $name; ?></h1>
    <h1>Email: <?php echo $email; ?></h1>
  </body>
</html>
