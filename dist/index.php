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
	       <h1 id="logo">Pomf.cat</h1>
	       <p class="lead">Max upload size is 75MiB, read the <a href="faq.php">FAQ</a></p>
            <noscript>
                <p class="alert alert-error"><strong>Enable JavaScript</strong> you fucking autist neckbeard, it's not gonna hurt you</p>
            </noscript>
            <p id="no-file-api" class="alert alert-error"><strong>Your browser is shit.</strong> Install the latest<a href="http://firefox.com/">Firefox</a> or <a href="http://chrome.google.com/">Botnet</a> and come back &lt;3</p><a href="javascript:;" id="upload-btn" class="btn">Select <span>or drop</span>file(s)</a>
            <input id="upload-input" name="files[]" multiple="multiple" data-max-size="75MiB" type="file">
            <ul id="upload-filelist"></ul>
	    <audio id="sickerMeme" src="sick.mp3" />
	    <script>
		var i = 0, text;
		var str = "Dude, that's a sick meme.";
		function start(){
//			document.getElementById("sickerMeme").play();type();
		}
		/* Credits: https://jsfiddle.net/creed88/VG8MJ/1/ */

		function type(){
			text = str.slice(0, ++i);
			if (text === str) return;
			document.getElementById('logo').innerHTML = text;
			setTimeout(type, 80);
		}
	    </script>
        </div>
	<!-- Leo5gg lol -->
	<?php
		include "footer.php";
	?>
        <script src="pomf.alt.js"></script>
    </div>
</body>    
</html>
