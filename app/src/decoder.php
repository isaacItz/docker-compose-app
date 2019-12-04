<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html>
<font face='Tahoma'>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LeasePlan Docker Compose URL shortener</title>
</head>
<body>

<div class="container">
  <h2>LeasePlan Docker Compose URL shortener</h2>
  <img src="lp_logo2.png" alt="LeasePlan Logo" /> <img src="aws_logo2.png" alt="AWS Logo" /></p>

<style type="text/css">
<!--
#form1 p {
//text-align:center;
}
.header {
	font-family: "Fertigo Pro", Fontin, Calluna, Steinem;
        font-size: 36px;
        width: 100%;
        text-align: center;
        top: 5%;
        position: absolute;
}
.footer {
        width: 100%;
        text-align: justify;
        top:80%;
        position: absolute;
}
.content {
        position: absolute;
        width: 500px;
        top: 40%;
        left: 15%;
        font-size: 28px;
}

-->
</style>
</head>

<div class="content">

<?php

$con = mysqli_connect("mysql_db","lpurlsuser","lpurlspasswd","LPURLS");
$link = mysqli_connect("mysql_db","lpurlsuser","lpurlspasswd","LPURLS");

if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
mysqli_select_db($con,"LPURLS");

$de= mysqli_real_escape_string($link,$_GET["decode"]);
echo "Shortened code: $de ";
echo  nl2br ("\n");

$result = mysqli_query($link,"select * from testurls where shortened='$de'");

while($row = mysqli_fetch_array($result))
{
//    var_dump($result);
    $res=$row['url'];
//    echo "Raw URL: $res \r\n";
    echo "URL is <a href=\"http://". $res ."\">http://". $res ."</a>";
}

header("Location: http://". $res)

?>
