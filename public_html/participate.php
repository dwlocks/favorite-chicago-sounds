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
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('images/menu/jukebox_over.gif','images/menu/soundmaps_over.gif','images/menu/catalog_over.gif','images/menu/exhibits_over.gif','images/menu/participate_over.gif','images/menu/press_over.gif','images/menu/links_over.gif','images/menu/aboutus_over.gif')">

<table width="665" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td colspan="8" align="center"><a href="index.php"><img src="images/topmenu_01.gif" alt="Favorite Chicago Sounds" width="531" height="151" border="0" /></a></td>
  </tr>
  <tr>
    <td><a href="javascript:void(0);" onclick="javascript:openJukebox('jukebox.php','all');" target="_top" onClick="MM_nbGroup('down','group1','jukebox','images/menu/jukebox_on.gif',1)" onMouseOver="MM_nbGroup('over','jukebox','images/menu/jukebox_over.gif','images/menu/jukebox_over.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="jukebox" src="images/menu/jukebox_off.gif" border="0" alt="Jukebox"></a></td>   
    <td><a href="soundmaps.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('sound maps','','images/menu/soundmaps_over.gif',1)"><img src="images/menu/soundmaps_off.gif" alt="sound maps" name="sound maps" width="108" height="15" border="0" id="sound maps" /></a></td>
    <td><a href="catalog.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('catalog','','images/menu/catalog_over.gif',1)"><img src="images/menu/catalog_off.gif" alt="catalog" name="catalog" width="77" height="15" border="0" id="catalog" /></a></td>
    <td><a href="exhibits.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('exhibits','','images/menu/exhibits_over.gif',1)"><img src="images/menu/exhibits_off.gif" alt="exhibits" name="exhibits" width="81" height="15" border="0" id="exhibits" /></a></td>
    <td><a href="participate.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('participate','','images/menu/participate_over.gif',1)"><img src="images/menu/participate_on.gif" alt="participate" name="participate" width="103" height="15" border="0" id="participate" /></a></td>
    <td><a href="press.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('press','','images/menu/press_over.gif',1)"><img src="images/menu/press_off.gif" alt="press" name="press" width="68" height="15" border="0" id="press" /></a></td>
    <td><a href="links.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('links','','images/menu/links_over.gif',1)"><img src="images/menu/links_off.gif" alt="links" name="links" width="63" height="15" border="0" id="links" /></a></td>
    <td><a href="aboutus.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('about us','','images/menu/aboutus_over.gif',1)"><img src="images/menu/aboutus_off.gif" alt="about us" name="about us" width="86" height="15" border="0" id="about us" /></a></td>
  </tr>
</table>

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
				<select id="neighborhood_id" name="neighborhood_id" class="input" onChange="getName(this);">
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