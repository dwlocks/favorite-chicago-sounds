<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Favorite Chicago Sounds &mdash; Catalog</title>
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
    <td width="700" rowspan="3" align="left" valign="top" class="bodycopy"> 
		<span class="headline1"></span>
		<div style="text-align:center;width:100%;">
			<form method="get" action="catalog.php">
				search for: <input type="text" name="keyword" id="keyword" value="<?echo $_GET['keyword'] ?>" /> <input type="submit" value="Go" />
				<input type="hidden" name="page" id="page" value="1" />
			</form>
		</div>
		<br />
		<?php
		$keyword;
		if(isset($_GET['keyword'])) {
			$keyword = '%' . $_GET['keyword'] . '%';
		}
		else {
			$keyword = '%';
		}
		$page;
		$totResults;
		$maxResults = 15;
		if(isset($_GET['page'])) {
			$page = $_GET['page'];
		}
		else {
			$page = 1;
		}
		require_once('include/mysql_connect.php');
		
		$calcRowsQuery = "SELECT COUNT(*) as rows 
			FROM favorite_sounds as soundz 
			WHERE soundz.favSound LIKE '$keyword' OR soundz.whySound LIKE '$keyword'";
		$calcRowsRes = mysql_query($calcRowsQuery);
		$totResults = mysql_result($calcRowsRes, 0);
		$from = $maxResults * ($page - 1);
		
		$query = "SELECT soundz.id, soundz.favSound, soundz.whySound, soundz.fname, 
				soundz.lname, soundz.usename, soundz.dateAdded, MAX(recs.id) as recordingID
				FROM favorite_sounds as soundz LEFT JOIN recordings as recs on soundz.id = recs.sound_id
				WHERE soundz.favSound LIKE '$keyword' OR soundz.whySound LIKE '$keyword'
				GROUP BY id
				ORDER BY dateAdded DESC
				LIMIT $from, $maxResults";
		$result = mysql_query($query);
		$num = mysql_numrows($result);
		$i = 0;
		while ($i < $num) {
			$sound_id = mysql_result($result, $i, "id");
			$favSound = mysql_result($result, $i, "favSound");
			$whySound = mysql_result($result, $i, "whySound");
			$fname = mysql_result($result, $i, "fname");
			$lname = mysql_result($result, $i, "lname");
			$fullname = trim("$fname $lname");		
			$usename = mysql_result($result, $i, "usename");
			$recordingID = mysql_result($result, $i, "recordingID");
			
			if (!empty($favSound)) {
				echo '<p>';
				echo '<span class="headline2">' . $favSound . '</span><br>';
				if (!empty($whySound)) { 
					echo $whySound . '<br>';
				}
				if ($usename && !empty($fullname)) { 
					echo '<span class="smallertext">submitted by: ' . $fullname . '</span><br>';
				}				
				// Check for comment count:
				$query2 = "SELECT COUNT(c5t.comment_identifier) as comment_count FROM c5t_comment as c5t WHERE c5t.comment_identifier LIKE '%sound_id=$sound_id' GROUP BY c5t.comment_identifier;";
				$result2 = mysql_query($query2);
				$comment_count = 0;
				if (mysql_numrows($result2) > 0) {
					$comment_count = mysql_result($result2, 0, "comment_count");
				}
				echo '<a onclick="window.open(\'recording_form.php?sound_id=' . $sound_id . '\',\'__upload\',\'width=400,height=500\');" href="javascript:void(0);">upload a recording</a> | <a href="link.php?sound_id=' . $sound_id . '">comments (' . $comment_count . ')</a>';
				echo '</p>';
				if (!empty($recordingID)) {
					echo '<p><img src="images/audio_icon4.gif" width="30" height="30" align="absmiddle"> <span class="headline2"><a onclick="javascript:openJukebox(\'jukebox.php?recording_id=' . $recordingID . '\', \'jukebox\')" href="javascript:void(0);" class="bodycopy">Listen</a></span></p>';
				}
				echo '<p><img src="images/horzline_wide.gif" width="700" height="1"></p>';
			}
			$i++;
		}
		echo '<div style="font-weight:bold;text-align:center;width:100%;">';
		if ($page != 1) {
			echo "<a href='catalog.php?keyword=" . $_GET['keyword'] . "&page=1'>&lt;&lt; First</a>&nbsp;&nbsp;&nbsp;";
			echo "<a href='catalog.php?keyword=" . $_GET['keyword'] . "&page=". ($page - 1) ."'>&lt; Previous</a>&nbsp;&nbsp;&nbsp;";
		}
		if ($page != 1 && $totResults > ($from + $maxResults)) {
			echo "&nbsp;|&nbsp;";	// separator
		}
		if ($totResults > ($from + $maxResults)) {
			echo "&nbsp;&nbsp;&nbsp;<a href='catalog.php?keyword=" . $_GET['keyword'] . "&page=". ($page + 1) ."'>Next &gt;</a>";
			echo "&nbsp;&nbsp;&nbsp;<a href='catalog.php?keyword=" . $_GET['keyword'] . "&page=". ceil($totResults / $maxResults) ."'>Last &gt;&gt;</a>";
		}
		echo '</div>';
		mysql_close();
		?>
	</td>       
  </tr>
  </table>
  </td>
  </tr>
  <tr> 
    <td valign="top" class="bodycopy">
		<p><br><br><br></p>
    </td>
  </tr>
 </table>
 <img src="images/horzline_wide.gif" width="700" height="1">
</div>
<?php include 'include/footer.php'; ?>
</body>
</html>