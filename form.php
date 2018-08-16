<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Page</title>
    <link rel="stylesheet" href="bootstrap-4.1.1/dist/css/bootstrap.min.css">
  </head>
  <body>
    <?php
        $name=$email=$comment=$gender=$website="";
        $name_err=$email_err=$gender_err=$website_err="";

        if ($_SERVER["REQUEST_METHOD"]=="POST") {
          if (empty($_POST["Name"])) {
            $name_err="Name Required";
          }
          else {
              $name=test_data($_POST["Name"]);
              if (!preg_match("/^[a-zA-Z ]*$/",$name))
              {
                $name_err="Invalid Values in Name";
              }
          }
          if (empty($_POST["Email"])) {
            $email_err="Email address is Required";
          }
          else {
              $email=test_data($_POST["Email"]);
              if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                $email_err="Invalid Email";
              }
          }
          if (empty($_POST["gender"])) {
            $gender_err="Gender Required";
          }
          else {
              $gender=$_POST["gender"];
          }
        $website=test_data($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $website_err="Invalid Website";
        }
        $comment=$_POST["comment"];


        }

    function test_data($data) {
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
    ?>
    <div class="container">
      <div class="jumbotron">
      <div class="card">
        <div class="card-body">
          <p class="card-title">My Card</p>

    <form class="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" name="Name" value="<?php echo $name; ?>">
      <span class="alert alert-light"><?php echo $name_err; ?></span>
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="email" name="Email" value="<?php echo $email; ?>">
      <span class="alert alert-light"><?php echo $email_err; ?></span>
    </div>
    <div class="form-group">
      <label for="Website">Website:</label>
        <input type="text" class="required" name="website" value="<?php echo $website; ?>">
        <span class="alert alert-light"><?php echo $website_err; ?></span>
      </div>
      <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea name="comment" col="50" rows="5" value="<?php echo $comment; ?>"></textarea>
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Male") echo "checked"; ?> value="Male"> Male
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Female") echo"checked"; ?> value="Female"> Female
        <input type="radio" name="gender" <?php if(isset($gender) && $gender=="Others") echo "checked"; ?> value="Others"> Others
        <span class="alert alert-light"><?php echo $gender_err; ?></span>
      </div>

      <input type="submit" class="btn btn-primary" value="Submit">

    </form>
    </div>
    </div>
    </div>
    </div>




<?php
if (isset($_POST["Name"])) {
?>
<h1>Name: <?php echo $name; ?></h1>
<h1>Email: <?php echo $email; ?></h1>
<h1>Website: <?php echo $website ?></h1>
<h1>Comment: <?php echo $comment ?></h1>
<h1>Gender: <?php echo $gender ?></h1>
<?php ?>
<?php } ?>
<!-- <?php unset($_POST["Name"]); ?> -->
  </body>
</html>
