<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Favorite Chicago Sounds &mdash; Recordings</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/mainstyle.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/eq_browsertab.ico" type="image/x-icon" /> 
<link rel="shortcut icon" href="images/eq_browsertab.ico" type="image/x-icon" />
<script src="scripts/utils.js" language="javascript" type="text/javascript"></script>
</head>

<body bgcolor="#FFFFFF" text="000000" link="#0000FF" vlink="2d3f6f" alink="#0000FF" leftmargin="3" topmargin="3" marginwidth="3" marginheight="3" class="bodycopy" onLoad="MM_preloadImages('images/topmenu_02-down.gif','images/topmenu_02-over.gif','images/topmenu_03-over.gif','images/topmenu_04-down.gif','images/topmenu_04-over.gif','images/topmenu_05-down.gif','images/topmenu_05-over.gif','images/topmenu_06-down.gif','images/topmenu_06-over.gif','images/topmenu_07-down.gif','images/topmenu_07-over.gif','images/topmenu_03.gif')">
<?php include 'include/header.php'; ?>
<div align="center"> 
<br><img src="images/horzline_wide.gif" width="700" height="1"><br>
  <p style="font-weight:bold;">
	<a href="catalog.php">Submissions</a> | <a href="recordings.php">MP3 Recordings</a>
  </p>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="700" align="center" class="bodycopy" style="padding-top:20px;"> 
		<?php
			require_once('include/mysql_connect.php');
			
			$query = "SELECT favorite_sounds.favSound, favorite_sounds.dateAdded, recordings.id, 
					recordings.name, recordings.date, recordings.equipment, recordings.length, 
					recordings.filename, recordings.approved
					FROM recordings INNER JOIN favorite_sounds on recordings.sound_id = favorite_sounds.id
					ORDER BY dateAdded DESC";
			$result = mysql_query($query);
			$num = mysql_numrows($result);
			$i = 0;
			while ($i < $num) {
				$favSound = mysql_result($result, $i, "favSound");
				$dateAdded = mysql_result($result, $i, "dateAdded");
				$id = mysql_result($result, $i, "id");
				$name = mysql_result($result, $i, "name");
				$date = mysql_result($result, $i, "date");
				$equipment = mysql_result($result, $i, "equipment");		
				$length = mysql_result($result, $i, "length");
				$filename = mysql_result($result, $i, "filename");
				$approved = mysql_result($result, $i, "approved");
				
				if (!empty($filename)) {
					echo '<p>';
					echo '<a href="sounds/' . $filename . '">' . $filename . '</a> | recorded: ' . $date;
					echo '</p>';
				}
				$i++;
			}
			mysql_close();			
		?>
	</td>       
  </tr>
  </table>
  <br />
  <br />
  <p>
	<a rel="license" href="http://creativecommons.org/licenses/sampling+/1.0/">
	<img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/sampling+/1.0/88x31.png" />
	</a>
	<br />These works are licensed under a 
	<a rel="license" href="http://creativecommons.org/licenses/sampling+/1.0/">Creative Commons Sampling Plus 1.0 License</a>.  
  </p>
  <br />
  </td>
  </tr>
 </table>
 <img src="images/horzline_wide.gif" width="700" height="1">
</div>
<?php include 'include/footer.php'; ?>
</body>
</html>