<html>
<head>
<title>Your Favorite Chicago Sounds</title>
</head>
<body bgcolor="000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" valign="middle">
<?php
$vars = '&wimpySkin=http://favoritechicagosounds.com/skin_titanium.xml&startPlayingOnload=yes&shuffleOnLoad=yes&randomOnLoad=yes&popUpHelp=no&getMyid3info=yes';
if (isset($_GET['recording_id'])) {
	require_once('include/mysql_connect.php');
	$result = mysql_query("SELECT filename FROM recordings WHERE id = {$_GET['recording_id']}");
	$num = mysql_numrows($result);
	if ($num > 0) {
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		$vars = '&wimpySkin=http://favoritechicagosounds.com/skin_titanium.xml&startPlayingOnload=yes&popUpHelp=no&getMyid3info=yes&playlist=http://favoritechicagosounds.com/sounds/' . $row['filename'];
	}
	mysql_close();
}
?>
<!-- START WIMPY PLAYER CODE -->
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,47,0" width="300" height="100" id="wimpy" align="center">
<param name="allowScriptAccess" value="always" />
<param name="movie" value="http://favoritechicagosounds.com/sounds/wimpy.swf" />
<param name="loop" value="false" />
<param name="menu" value="false" />
<param name="quality" value="high" />
<param name="scale" value="noscale" />
<param name="salign" value="lt" />
<param name="bgcolor" value="000000" />
<?php 
echo '<param name="flashvars" value="wimpyApp=http://favoritechicagosounds.com/sounds/wimpy.php' . $vars . '" />';
echo '<embed src="http://favoritechicagosounds.com/sounds/wimpy.swf" flashvars="wimpyApp=http://favoritechicagosounds.com/sounds/wimpy.php' . $vars . '" loop="false" menu="false" quality="high" width="300" height="100" scale="noscale" salign="lt" name="wimpy" align="center" bgcolor="000000" allowScriptAccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />';
?>
</object>
<!-- END WIMPY PLAYER CODE -->
	</td>
  </tr>
</table>
</body>
</html>

