<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><title>Favorite Chicago Sounds &mdash; Upload</title><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><link href="css/mainstyle.css" rel="stylesheet" type="text/css"><link rel="icon" href="images/yfcs_icon3.ico" type="image/x-icon" /> <link rel="shortcut icon" href="images/yfcs_icon3.ico" type="image/x-icon" /><script src="scripts/utils.js" language="javascript" type="text/javascript"></script><script type="text/javascript">		function uploadRecording() {			var oName;			var oFile;			var oSubmit;			var oForm;			if (document.all) {				oName = document.all['txtName'];				oFile = document.all['flRecording'];				oSubmit = document.all['btSubmit'];				oForm = document.all['recording'];			}			else {				oName = document.getElementById('txtName');				oFile = document.getElementById('flRecording');				oSubmit = document.getElementById('btSubmit');				oForm = document.getElementById('recording');			}			/* Validation: */			var error = '';			if (oName.value == '') {				error += "Name is required.\n";			}			if (oFile.value == '') {				error += "File is required.\n";			}			if (error != '') {				alert(error);				return false;			}			else			{				oSubmit.disabled=true;								oSubmit.value='Upload in progress';				return true;			}		}	</script></head><body bgcolor="#FFFFFF" text="000000" link="#0000FF" vlink="2d3f6f" alink="#0000FF" leftmargin="3" topmargin="3" marginwidth="3" marginheight="3" class="bodycopy" onLoad="MM_preloadImages('images/topmenu_02-down.gif','images/topmenu_02-over.gif','images/topmenu_03-over.gif','images/topmenu_04-down.gif','images/topmenu_04-over.gif','images/topmenu_05-down.gif','images/topmenu_05-over.gif','images/topmenu_06-down.gif','images/topmenu_06-over.gif','images/topmenu_07-down.gif','images/topmenu_07-over.gif','images/topmenu_03.gif')">	<div class="bodycopy">		<p>&nbsp;</p>		<?php if ($_SERVER['REQUEST_METHOD'] != 'POST') { ?>			Please fill out the following voluntary information so we can credit you for			your work!			<br /><br />			<form id="recording" name="recording" action="recording_form.php" method="post" enctype="multipart/form-data" onsubmit="return uploadRecording();">				Name: *				<br />				<input id="txtName" name="txtName" type="text" maxlength="255" class="input" />				<br /><br />				Date recorded:				<br />				<input id="txtDate" name="txtDate" type="text" maxlength="255" class="input" />				<br /><br />				Equipment used:				<br />				<input id="txtEquipment" name="txtEquipment" type="text" maxlength="255" class="input" />				<br /><br />				Length:				<br />				<input id="txtLength" name="txtLength" type="text" maxlength="255" class="input" />				<br /><br />				Comments:				<br />				<textarea id="txtComments" name="txtComments" class="input"></textarea>				<br /><br />				File (mp3 format required; file size limited to 8 MB): *				<br />				<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />				<input id="flRecording" name="flRecording" type="file" class="input" />				<br /><br />				<input id="btSubmit" name="btSubmit" value="Submit" class="btn" type="submit">				<input id="btCancel" name="btCancel" value="Cancel" class="btn" type="button" onclick="window.close();">				<br />				<input id="hidSound" name="hidSound" type="hidden" value="<?php echo $_GET['sound_id']; ?>" />			</form>		<?php } else { 			/* Form processing here */			$tmpfile = $_FILES['flRecording']['tmp_name'];			$uploadtype = $_FILES['flRecording']['type'];			$uploadsize = $_FILES['flRecording']['size'];			$uploaddir = 'sounds/';			$uploadname = $_FILES['flRecording']['name'];			$uploadfile = $uploaddir . basename($uploadname);			$uploaderror = $_FILES['flRecording']['error'];						/*			echo $tmpfile . "<br>";			echo $uploadtype . "<br>";			echo $uploadsize . "<br>";			echo $uploaddir . "<br>";			echo $uploadname . "<br>";			echo $uploaderror . "<br>";			*/			if ($uploadtype == 'audio/mpeg' && move_uploaded_file($tmpfile, $uploadfile)) {				require_once('include/mysql_connect.php');								$query = "INSERT INTO recordings ( name, date, equipment, length, comments, filename, sound_id ) 					VALUES ( '$txtName', '$txtDate', '$txtEquipment', '$txtLength', '$txtComments', '$uploadname', $hidSound )";								if (!mysql_query($query)) {					echo "<p>A problem was encountered while processing your submission.  If this problem persists, please <a href='contact.php'>contact us</a> so we can work to fix the problem.  Thanks!</p>";				} else {					echo "<p>Your recording has been submitted, thank you for contributing to the Favorite Chicago Sounds project!<br /><a href='javascript:void(0);' onclick='window.close();'>Close</a></p>";				}				mysql_close();			} else {				echo "<p>A problem was encountered while processing your submission.  If this problem persists, please <a href='contact.php'>contact us</a> so we can work to fix the problem.  Thanks!</p>";			}		 }		 ?>	</div></body></html>