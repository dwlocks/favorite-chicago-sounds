<html>
<head>	
	<title>:: Your Favorite Chicago Sounds :: Submit Recording</title>
	<link rel="stylesheet" href="main.css" type="text/css" />
	<script type="text/javascript">
		function uploadRecording() {
			if (document.all) {
				document.all['btSubmit'].disabled=true;				
				document.all['btSubmit'].value='Upload in progress';
				document.all['recording'].submit();
			}
			else {
				document.getElementById('btSubmit').disabled=true;
				document.getElementById('btSubmit').value='Upload in progress';
				document.getElementById('recording').submit();
			}
		}
	</script>
</head>
<body>
	<div class="body">
		<p>&nbsp;</p>
		<div class="form">
            <?php if ($_SERVER['REQUEST_METHOD'] != 'POST') { ?>
				Please fill out the following voluntary information so we can credit you for
				your work!
				<br /><br />
				<form id="recording" name="recording" action="recording_form.php" method="post" enctype="multipart/form-data">
					Name:
					<br />
					<input id="txtName" name="txtName" type="text" maxlength="255" class="input" />
					<br /><br />
					Date recorded:
					<br />
					<input id="txtDate" name="txtDate" type="text" maxlength="255" class="input" />
					<br /><br />
					Equipment used:
					<br />
					<input id="txtEquipment" name="txtEquipment" type="text" maxlength="255" class="input" />
					<br /><br />
					Length:
					<br />
					<input id="txtLength" name="txtLength" type="text" maxlength="255" class="input" />
					<br /><br />
					Comments:
					<br />
					<textarea id="txtComments" name="txtComments" class="input"></textarea>
					<br /><br />
					File (mp3 format required, file cannot exceed 9 mb):
					<br />
					<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
					<input id="flRecording" name="flRecording" type="file" class="input" />
					<br /><br />
					<input id="btSubmit" name="btSubmit" value="Submit" class="btn" type="submit" onclick="javascript:uploadRecording();">
					<br />
					<input id="hidSound" name="hidSound" type="hidden" value="<?php echo $_GET['sound_id']; ?>" />
				</form>
			<?php } else { 
			 	/* Form processing here */

				$tmpfile = $_FILES['flRecording']['tmp_name'];
				$uploadtype = $_FILES['flRecording']['type'];
				$uploadsize = $_FILES['flRecording']['size'];
				$uploaddir = '../sounds/';
				$uploadname = $_FILES['flRecording']['name'];
				$uploadfile = $uploaddir . basename($uploadname);
				
				/*
				echo 'tmpfile: ' . $tmpfile . '<br />';
				echo 'uploadtype: ' . $uploadtype . '<br />';
				echo 'uploadsize: ' . $uploadsize . '<br />';
				echo 'uploaddir: ' . $uploaddir . '<br />';
				echo 'uploadname: ' . $uploadname . '<br />';
				echo 'uploadfile: ' . $uploadfile . '<br />';
				*/
				
				if ($uploadtype == 'audio/mpeg' && move_uploaded_file($tmpfile, $uploadfile)) {
					/*
					$subject = "Recording submitted from website";
					$body = "The following recording was submitted:\n";
					
					if (mail($email, $subject, $body)) {
						print "<p>Thank you for participating in the Favorite Chicago Sounds project!  Stay tuned, your recording should show up on the site soon.</p>";
					} else {
						print "<p>We encountered a problem.  If this problem persists, please <a href='contact.php'>Contact Us</a> so we can work to fix the problem.  Thanks!</p>";
					}
					*/
	
					require_once('../include/mysql_connect.php');
						                
	                $query = "INSERT INTO recordings ( name, date, equipment, length, comments, filename, sound_id ) 
						VALUES ( '$txtName', '$txtDate', '$txtEquipment', '$txtLength', '$txtComments', '$uploadname', $hidSound )";
					
					if (!mysql_query($query)) {
						//echo 'Error: ' . mysql_error($db);
                    	echo "<p>A problem was encountered while processing your submission.  If this problem persists, please <a href='../contact.php'>contact us</a> so we can work to fix the problem.  Thanks!</p>";
					} else {
						echo "<p>Your recording has been submitted, thank you for contributing to the Favorite Chicago Sounds project!<br /><a href='#' onclick='javascript:window.close();'>Close</a></p>";
					}
					mysql_close();
				} else {
					//echo 'Upload type: ' . $uploadtype;
                    echo "<p>A problem was encountered while processing your submission.  If this problem persists, please <a href='../contact.php'>contact us</a> so we can work to fix the problem.  Thanks!</p>";
                }
			 }
			 ?>
		</div>
	</div>
</body>
</html>