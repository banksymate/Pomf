<!DOCTYPE html> <html> <head> <meta http-equiv="content-type" 
content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="_wLD3KO_vuO5czv-n-j9YrXxO3OtQuGc6C51vOaRHMU" />
    <title>Pomf.cat · Kawaii File Hosting</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="pomf.min.css">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
	       <h1>Pomf.cat</h1>
	       <p class="lead">Max upload size is 75MiB, read the <a href="faq.php">FAQ</a></p>
            <noscript>
                <p class="alert alert-error"><strong>Enable JavaScript</strong> you fucking autist neckbeard, it's not gonna hurt you</p>
            </noscript>
            <p id="no-file-api" class="alert alert-error"><strong>Your browser is shit.</strong> Install the latest<a href="http://firefox.com/">Firefox</a> or <a href="http://chrome.google.com/">Botnet</a> and come back &lt;3</p><a href="javascript:;" id="upload-btn" class="btn">Select <span>or drop</span>file(s)</a>
            <input id="upload-input" name="files[]" multiple="multiple" data-max-size="75MiB" type="file">
            <ul id="upload-filelist"></ul>
	    <p class="alert alert-error"><strong>Pomf has been down for scheduled maintenance. There should now be uninterrupted service, if there is any more downtime, please tweet to <a href="https://twitter.com/ilIuminous">@ilIuminous</a>.</strong><br/>To use our shortener service with ShareX, look at <a href="tools.php">Tools</a></p>
	    <!--
	    <p class="alert alert-error"><strong>All filetypes are now enabled, malware scans are now daily, full SSL support has been enabled, and the filesize limit has been increased. Thanks <a href="https://twitter.com/Drybones5">Drybones</a> :3<br/>
	    Please take your abuse complaints to our <a href="contact.html">contact</a> page, not cloudflare or our host. It's the quickest way to get our notice and less difficult for us. Thanks
	    </strong></p>-->
        </div>
	<?php
		include "footer.php";
	?>
        <script src="pomf.alt.js"></script>
    </div>
</body>    
</html>
