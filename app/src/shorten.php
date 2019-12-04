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
text-align:center;
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
	left: 32%;
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
  die('Could not connect: ' . mysql_error());
  }
mysqli_select_db($con,"LPURLS");
$urlinput=mysqli_real_escape_string($link,$_POST['url']); 
$id=rand(10000,99999);
$shorturl=base_convert($id,20,36);
$sql = "insert into testurls values('$id','$urlinput','$shorturl')";
mysqli_query($con,$sql);
echo "Shortened URL is <a href=\"http://3.248.195.249/decoder.php?decode=". $shorturl ."\">http://leaseplantest.com/". $shorturl ."</a>";
//echo "Shortened URL is <a href=\"http://52.17.207.99/url/". $shorturl ."\">http://leaseplantest.com/". $shorturl ."</a>";
mysqli_close($con);
?>

</div>

<div class="footer">
<p>&copy; Developed by <a href="https://www.leaseplan.com">LeasePlan</a> @ AWS Immersion Day [Atlanta 2019]</p>
</div>
</body>
</html>
