<?php include 'include.php' ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Favorite Chicago Sounds &#8212; Comments</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/mainstyle.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/eq_browsertab.ico" type="image/x-icon" /> 
<link rel="shortcut icon" href="images/eq_browsertab.ico" type="image/x-icon" />
<script src="scripts/utils.js" language="javascript" type="text/javascript"></script>
</head>
<body bgcolor="#FFFFFF" text="000000" link="#0000FF" vlink="2d3f6f" alink="#0000FF" leftmargin="3" topmargin="3" marginwidth="3" marginheight="3" class="bodycopy" onLoad="MM_preloadImages('images/topmenu_02-down.gif','images/topmenu_02-over.gif','images/topmenu_03-over.gif','images/topmenu_04-down.gif','images/topmenu_04-over.gif','images/topmenu_05-down.gif','images/topmenu_05-over.gif','images/topmenu_06-down.gif','images/topmenu_06-over.gif','images/topmenu_07-down.gif','images/topmenu_07-over.gif','images/topmenu_03.gif')">
<?php include 'include/header.php'; ?>
<div align="center"> 
  <?php include 'include/participate.php'; ?>
  <table width="700" border="0" align="center" cellspacing="0">
    <tr> 
		<td width="400" rowspan="2" align="left" valign="top" class="bodycopy">
		<?php		
		if (isset($_GET['sound_id'])) {
			require_once('include/mysql_connect.php');
			$query = "SELECT soundz.id, soundz.favSound, soundz.whySound, soundz.address, 
				soundz.fname, soundz.lname, soundz.email, soundz.usename, 
				DATE_FORMAT(soundz.dateAdded, '%M %e, %Y @ %l:%i %p') as dateAdded
				FROM favorite_sounds as soundz
				WHERE soundz.id = " . $_GET['sound_id'];
			$result = @mysql_query($query);
			if (@mysql_numrows($result) > 0) {
				
				$pkID = mysql_result($result, 0, "id");
				$favSound = mysql_result($result, 0, "favSound");
				$whySound = mysql_result($result, 0, "whySound");
				$address = mysql_result($result, 0, "address");
				$fname = mysql_result($result, 0, "fname");
				$lname = mysql_result($result, 0, "lname");
				$usename = mysql_result($result, 0, "usename");
				$fullname = trim("$fname $lname");
				$dateAdded = mysql_result($result, 0, "dateAdded");
				
				echo '<p>';
				echo '<span class="headline2">' . $favSound . '</span><br><br>';
				echo '<span class="headline2">';
				if (!empty($whySound)) {
					echo '<span class="bodycopy">' . $whySound . '</span>';
				}
				echo '</span><br/>';
				echo '<span class="smallertext">Posted ';
				if ($usename && !empty($fullname)) {
					echo 'By ' . $fullname;
				}
				echo ' on ' . $dateAdded . '</span>';
				echo '</p>';
				/*
				echo '<p>';
				echo 'Have a recording of this sound?  Help add to this project by <a onclick="window.open(\'recording_form.php?sound_id=' . $pkID . '\',\'\',\'width=400,height=600\');" href="javascript:void(0);">uploading your mp3 recording</a>.';
				echo '</p>';
				*/
				echo '<br>';
				echo '<img src="images/horzline_small.gif">';
			}
			echo $c5t_output; 
		}
		?>
		</td>
      <td width="20"> <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p><br></p>
  <br/>
  <img src="images/horzline_wide.gif" width="700" height="1">
</div>
<?php include 'include/footer.php'; ?>
</body>
</html>
