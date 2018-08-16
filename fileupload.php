<?php
$target_dir="images/";
$target_file=$target_dir.basename($_FILES["fileupload"]["name"]);
echo $target_file."<br>";
$uploadok=1;
$imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo $imagefiletype."<br>";
if (isset($_POST["submit"])) {
  $check=getimagesize($_FILES["fileupload"]["tmp_name"]);
  print_r ($check);
  echo "<br>";
  if ($check !== false ) {
    echo "File is an Image - ".$check["mime"].".<br>";
  }
  else {
    echo "File is not an image";
    $uploadok=0;
  }
  if (file_exists($target_file)) {
    echo "Sorry, File exists <br>";
    $uploadok=0;
  }
  if ($_FILES["fileupload"]["size"]>500000)
  {
    echo "Can't upload, reached maximum file size <br>";
    $uploadok=0;
  }
  if ($imagefiletype != 'jpg' && $imagefiletype !='png' && $imagefiletype != 'jpeg')
  {
    echo "File type not allowed to upload <br>";
    $uploadok=0;
  }
  if ($uploadok==0) {
    echo "Sorry image not uploaded";

  }
  else {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_file)) {
      echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";
      echo "<br>".$_FILES["fileupload"]["tmp_name"];
    }
    else {
      echo "Sorry some error, while uploading the image";
    }
  }
  }
?>
