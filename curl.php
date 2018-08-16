<?php
//step1
$cSession = curl_init();
//step2
curl_setopt($cSession,CURLOPT_URL,"http://localhost/phedapp1/awdmonthlybillchange.php");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5
$mysql_update=mysql_query($result);
echo $mysql_update;
?>
