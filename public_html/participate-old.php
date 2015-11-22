<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Favorite Chicago Sounds &mdash; Participate</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/mainstyle.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/eq_browsertab.ico" type="image/x-icon" /> 
<link rel="shortcut icon" href="images/eq_browsertab.ico" type="image/x-icon" />
<script src="scripts/utils.js" language="javascript" type="text/javascript"></script>
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

<body bgcolor="#FFFFFF" text="000000" link="#0000FF" vlink="2d3f6f" alink="#0000FF" leftmargin="3" topmargin="3" marginwidth="3" marginheight="3" class="bodycopy" onLoad="MM_preloadImages('images/topmenu_02-down.gif','images/topmenu_02-over.gif','images/topmenu_03-over.gif','images/topmenu_04-down.gif','images/topmenu_04-over.gif','images/topmenu_05-down.gif','images/topmenu_05-over.gif','images/topmenu_06-down.gif','images/topmenu_06-over.gif','images/topmenu_07-down.gif','images/topmenu_07-over.gif','images/topmenu_03.gif')">
<?php include 'include/header.php'; ?>
<div align="center"><br><img src="images/horzline_wide.gif" width="700" height="1"><br><br>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="400" rowspan="3" align="left" valign="top" class="bodycopy">
		<form name="chiSounds" enctype="multipart/form-data" action="thankyou.php" method="post">
			<p><span class="headline2">What's Your Favorite Chicago Sound?</span> <br />
				<textarea name="whatsyours" cols="48" rows="1" id="whatsyours"></textarea>
			</p>
            <p><span class="headline2">Why?</span> <br>
                <textarea name="why1" cols="48" rows="3" id="why1"></textarea>
            </p>
            <p><span class="headline2">Where Did You Hear This Sound?<br>
              </span>(closest address or intersection)
              <textarea name="where" cols="48" rows="3" id="where"></textarea>
            </p>
            <p align="left"><span class="headline2"><br>
				<select id="howheard" name="howheard" class="input">
					<option value="" selected>How Did You Hear About FCS?</option>
					<option value="Chicago Childrens Museum">Chicago Children's Museum</option>
					<option value="Chicago Public Radio">Chicago Public Radio</option>
					<option value="Vocalo">Vocalo</option>
					<option value="Experimental Sound Studio">Experimental Sound Studio</option>
					<option value="News Article Blog">News Article/Blog</option>
					<option value="Jesse Seay">Jesse Seay</option>
					<option value="Teresa Gale">Teresa Gale</option>
					<option value="Sarah Lu">Sarah Lu</option>
					<option value="Friend">Friend</option>
					<option value="Other">Other</option>
				</select>
				</span>
			</p>
            <!--<p><span class="headline2">What's Your Favorite Sounding Place in Chicago?</span>
		                <textarea name="place" cols="48" rows="3" id="place"></textarea>
		            </p>
		            <p><span class="headline2">Why?<br></span>
		                <textarea name="why2" cols="48" rows="1" id="why2"></textarea>
		            </p>-->
            <p align="right"><span class="headline2">First Name</span>
                <input name="firstname" type="text" id="firstname" value="" size="35">
            </p>
            <p align="right"><span class="headline2">Last Name</span>
                <input name="lastname" type="text" id="lastname" value="" size="35">
            </p>
            <p align="right"><span class="headline2">Email Address</span>
                <input name="email" type="text" id="email" value="" size="35">
            </p>
            <p align="left"><span class="headline2"><br>
				<select id="neighborhood_id" name="neighborhood_id" class="input" onchange="getName(this);">
					<option value="" selected>Chicago Neighborhood Where You Live</option>
					<?php
					require_once('include/mysql_connect.php');
					$result = mysql_query("SELECT * FROM neighborhoods");
					while ($myrow = mysql_fetch_row($result)) {
						printf("<option value='%s'>%s</option>", $myrow[0], $myrow[1]);
					}
					mysql_close();
					?>
				</select>
				</span>
				<input id="neighborhood_name" name="neighborhood_name" value="" type="hidden">
			</p>
            <p align="left">
				<input name="usename" type="checkbox" id="usename" value="checkbox">
				<span class="headline2">Do not use my name</span><br />
				<input name="updates" type="checkbox" id="updates" value="checkbox">
				<span class="headline2">Do not send me updates</span>
			</p>
            <p align="left">
				<span class="headline2"><br />
				  <img src="../captcha/CaptchaSecurityImages.php?width=100&height=40&characters=5" />
                  <br />
                  <label for="security_code">Security Code</label><br />
                  <input id="security_code" name="security_code" type="text" />
				</span>
			</p>
            <p align="left"><span class="headline2">
              <input type="submit" name="Submit" value="Submit"><br />
			  </span>
			</p>
        </form>
	  </td>
      <td width="20" rowspan="2"><p>&nbsp;</p></td>
      <td valign="top" background="images/bg_grey_light.gif" class="bodycopy">
		<table width="100%"  border="0" cellspacing="0" cellpadding="10">
          <tr>
		    <td class="bodycopy">
				<span class="headline2">How It Works</span>
	            <br><br>
	            Please take a few moments to fill out this survey. If you have more than one favorite sound, you're welcome to do an additional survey for each one. <br>
	            <br>
              Your reponse will be added to our database and immediately accessible through our <a href="catalog.php">catalog</a>.  
				<br>				
	            If you have a recording of the sound, we invite you to upload it to the catalog! 
				<br>
				<br>
	            Selected submissions are recorded by FCS recordists and then added to the catalog. 
				<br>
	            All sounds are produced in MP3 format and downloadable for free.
				<br><br>
	            We're always looking for more volunteer recordists!  If you're interested in joining the team, <script type="text/javascript">printMail('jesse','favoritechicagosounds.com','let us know');</script>.
				<br><br>
			</td>
          </tr>
        </table>
		</td>
	</tr>
  </table>
  <br/>
  <img src="images/horzline_wide.gif" width="700" height="1">
</div>
<?php include 'include/footer.php'; ?>
</body>
</html>  