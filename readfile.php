<?php
echo "<pre>";
echo readfile("file.txt");
echo "</pre>";
echo "<br>";
$filename="file.txt";
$filenamew="filew.txt";
$myfile=fopen($filename,"r") or die("unable to open or file not found");
$myfilew=fopen($filenamew,"a") or die("can't create a file ");
// echo "<pre>";
// echo fgets($myfile);
// echo fgets($myfile);
// echo fgets($myfile);
// echo "</pre>";
$input="";
while (!feof($myfile)) {
 $input.=fgets($myfile);
}
$input1="\n";
fwrite($myfilew,$input);
fwrite($myfilew,$input1);
fwrite($myfilew,$input);
fclose($myfilew);
fclose($myfile);
 ?>
