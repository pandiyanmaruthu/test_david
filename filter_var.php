<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>filter variables</title>
  </head>
  <body>
    <?php
    $myvar="<h1>hello Maruthu</h1>";
    $filvar=filter_var($myvar,FILTER_SANITIZE_STRING);
    echo $filvar;
    $myint=0;
    echo "<br>";
    if (filter_var($myint,FILTER_VALIDATE_INT)===0|| !filter_var($myint,FILTER_VALIDATE_INT)===false ) {
      echo ($myint." is integer");
    }
    else {
      echo ($myint." not an integer");
    }
    echo "<br>";
    $myip="192.175.12";
    if (!filter_var($myip,FILTER_VALIDATE_IP)===false) {
      echo $myip." valid ip";
    }
    else {
      echo $myip." not a valid ip";
    }
    echo "<br>";
    $email=")(maruthu\@gmai\;l.com)";
    $femail=filter_var($email,FILTER_SANITIZE_EMAIL);
    echo $femail;
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)===false) {
      echo "<br>".$email." is valid email";
    }
    else {
      echo "<br>".$email." is not valid email";
    }
    echo "<br>";
    $url="https://www.github.com";
    $furl=filter_var($url,FILTER_SANITIZE_URL);
    echo $furl;
    echo "<br>";
    if (!filter_var($furl,FILTER_VALIDATE_URL)===false) {
      echo $furl." is valid";

    }else {
      echo $furl." is not valid";
    }
    echo "<br>";
    $int=423;
    $min=1;
    $max=500;
    if (filter_var($int,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max)))===false) {
      echo $int." not in range of ".$min." and ".$max;
    }
    else {
      echo $int." range of ".$min." and ".$max;
    }
echo "<br>";
$ipv6="2001:0db8:85a3:08d3:1319:8a2e:0370::";
if (!filter_var($ipv6,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)===false) {
  echo ($ipv6." is valid ");

}
else {
  echo ($ipv6." is not valid");
}?>

  </body>
</html>
