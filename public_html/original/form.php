<html>
<head>	
	<title>:: Your Favorite Chicago Sounds ::</title>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<script type="text/javascript">
		function getName(dd) {
			if (dd.selectedIndex > 0) {
				var hid = document.getElementById("neighborhood_name");
				if (typeof(hid) != 'undefined') {
					hid.value = dd.options[dd.selectedIndex].text;
				}
			}	
		}
	</script>
</head>
<body>
	<div class="body">
        <?php include 'header.php'; ?>
		<p>&nbsp;</p>
		<div class="form">
			
			<form name="chiSounds" enctype="multipart/form-data" action="thankyou.php" method="post">
				What is Your Favorite Chicago Sound?<br>
				<textarea id="favSound" name="favSound" cols="40" rows="5"></textarea>
				<br /><br />
				Why?<br />
				<textarea id="whySound" name="whySound" cols="40" rows="5"></textarea>
				<br /><br />
				Where did you hear this sound?<br>(closest address or intersection)<br>
				<textarea id="address" name="address" cols="40" rows="3"></textarea>
				<br /><br />
				Favorite Sounding Place in Chicago?<br>
				<textarea id="favPlace" name="favPlace" cols="40" rows="5"></textarea>
				<br /><br />
				Why?<br />
				<textarea id="whyPlace" name="whyPlace" cols="40" rows="5"></textarea>
				<br /><br />
				Favorite Chicago Sight?<br>
				<textarea id="favSight" name="favSight" cols="40" rows="5"></textarea>
				<br /><br />
				Why?<br />
				<textarea id="whySight" name="whySight" cols="40" rows="5"></textarea>
				<br /><br />
				First Name:<br />
				<input style="background-color: rgb(255, 255, 160);" id="fname" name="fname" maxlength="255" class="input" type="text">
				<br /><br />
				Last Name:<br />
				<input style="background-color: rgb(255, 255, 160);" id="lname" name="lname" maxlength="255" class="input" type="text">
				<br /><br />
				Email Address:<br />
				<input style="background-color: rgb(255, 255, 160);" id="email" name="email" size="30" maxlength="255" class="input" type="text">
				<br /><br />
				Chicago Neighborhood Where You Live:<br>
				<select id="neighborhood_id" name="neighborhood_id" class="input" onchange="getName(this);">
					<option value="" selected="selected"></option>
					<?php
					$db = mysql_connect('favoritechicagosounds.ipowermysql.com', 'favorite_web', 'pass');
	                if (!$db) {
	                   die('*** Could not connect: ' . mysql_error());
	                }
	                mysql_select_db('favorite_sounds', $db);
					$result = mysql_query("SELECT * FROM neighborhoods");
					while ($myrow = mysql_fetch_row($result)) {
						printf("<option value='%s'>%s</option>", $myrow[0], $myrow[1]);
					}
					?>
				</select>
				<br /><br />
				<input id="usename" name="usename" value="no" type="checkbox">&nbsp;Do Not Use My Name on the Site&nbsp;&nbsp;(<a href="privacy.php">Your Privacy</a>)
				<br /><br />
				<input id="updates" name="updates" value="no" type="checkbox">&nbsp;Do Not Send Me Updates
				<br /><br />
				<img src="/captcha/CaptchaSecurityImages.php?width=100&height=40&characters=5" />
				<br />
				<label for="security_code">Security Code</label><br /><input id="security_code" name="security_code" type="text" />				
				<br /><br />
				<input id="neighborhood_name" name="neighborhood_name" value="" type="hidden">
				<input value="Submit" class="btn" type="submit">
				<br />
			</form>
		</div>
        <?php include 'footer.php'; ?>
	</div>
</body>
</html>