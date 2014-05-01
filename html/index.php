<html>
<a href="#" class="login_button">Login</a>
<div id="janrainEngageEmbed"></div>

<head>
	<title>Course Planner</title>
	<meta charset="utf-8">

    <link rel="stylesheet" href="index.css" type = "text/css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="index.js"></script>

	<script type="text/javascript">
		(function() {
    	if (typeof window.janrain !== 'object') window.janrain = {};
    	if (typeof window.janrain.settings !== 'object') window.janrain.settings = {};
    
    	janrain.settings.tokenUrl = '__REPLACE_WITH_YOUR_TOKEN_URL__';

    	function isReady() { janrain.ready = true; };
    	if (document.addEventListener) {
      	document.addEventListener("DOMContentLoaded", isReady, false);
    	} else {
      	window.attachEvent('onload', isReady);
    	}

    	var e = document.createElement('script');
    	e.type = 'text/javascript';
    	e.id = 'janrainAuthWidget';

    	if (document.location.protocol === 'https:') {
      	e.src = 'https://rpxnow.com/js/lib/ur-planner/engage.js';
    	} else {
      	e.src = 'http://widget-cdn.rpxnow.com/js/lib/ur-planner/engage.js';
    	}

    	var s = document.getElementsByTagName('script')[0];
    	s.parentNode.insertBefore(e, s);
		})();
		</script>
</head>

	<body>
		<div >
			<h1><img src="res/UofRshield.png" alt="shield" style="margin-top:20px;float:left;margin-left:35%;">
				<span class="border">UR Planner<br></span></h1>
			</div>
			<br>

			<div class="checker">

				<div>
					<div style="width:50%; float:left;">
						<label>Major(s): </label><br>
						<input id="majorChooser" type = "text"/>
						<button type="button" onClick="addMajor(document.getElementById('majorChooser').value)">Add</button>
					</div>

					<div id="majorList" style="width:50%; float:left;">
						<ul><li> .</li></ul>
					</div>
				</div>

				<br>

				<div>
					<div style="width:50%; float:left;">
						<label>Minor(s): </label><br>
						<input id="minorChooser" type = "text"/>
						<button type="button" onClick="addMinor(document.getElementById('minorChooser').value)">Add</button>
					</div>

					<div id="minorList" style="width:50%; float:left;">
						<ul><li>.</li></ul>
					</div>

				</div>

				<br><br><br>

				<button type="button" onClick="continueToNextPage()">Continue</button>

			</div>

		</body>
</html>
