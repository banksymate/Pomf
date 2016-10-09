<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Pomf.cat · Tools</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="pomf.min.css">
</head>
<body>
<div class="container">
<div class="jumbotron">
<header><h1>Pomf Tools</h1></header>
</div>
<section><h2>ShareX</h2><dl>
	<dt>Download</dt>
	<dd><a href="https://getsharex.com/">https://getsharex.com</a></dd>
	<dt>Setup</dt>
	<dd>We are now the default Pomf Uploader for ShareX!</dd>
	<dd>To use Pomf.Cat as an uploader, go to Destinations and select Pomf as your image and/or file uploader.</dd>
	<br />
        <dd><a href="https://a.pomf.cat/xjeviv.png"><img height="60%" width="60%" id="sharexImage" src="https://a.pomf.cat/xjeviv.png" /></a></dd><!-- onclick="expand()"-->
	<br />
	<dd>After, go to Destinations -> Destination Settings -> Pomf and select "Pomf.Cat"</dd>
	<br />
	<dd><a href="https://a.pomf.cat/xjeviv.png"><img height="90%" width="90%" id="sharexImage" src="https://a.pomf.cat/jhsrmt.png" /></a></dd>
	<br />
	<dd>To use our Polr shortener, go to ShareX and put the following info
	<br/> under Destination Settings -> Polr</dd>
	<dd>API hostname: <b>https://u.pomf.cat/api.php</b></dd>
	<dd>API key: <b>public</b></dd>
</dl></section>

<section><h2>limf</h2><dl>
<dt>Download</dt>
<dd><a href="https://github.com/lich/limf">https://github.com/lich/limf</a></dd>


<section><h2>pomfsecure</h2><dl>
<dt>Download</dt>
<dd><a href="https://github.com/AdrianKoshka/1339secure">https://github.com/AdrianKoshka/1339secure</a></dd>


</dl></section>
        <?php
                include "footer.php";
        ?>
</div>
<!--
<script>
function expand(){
	var doc = document.getElementById("sharexImage");
	var shouldExpand = doc.height == 351;
	doc.height = shouldExpand ? doc.height * (5/3) : doc.height * (3/5);
	doc.width = shouldExpand ? doc.width * (5/3) : doc.width * (3/5);
}
</script>
-->
</body>
</html>
