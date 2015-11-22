<?php session_save_path("/home/users/web/b373/ipw.favoritechicagosounds/phpsessions");
 session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Favorite Chicago Sounds &mdash; Catalog</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/mainstyle.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/yfcs_icon3.ico" type="image/x-icon" /> 
<link rel="shortcut icon" href="images/yfcs_icon3.ico" type="image/x-icon" />
<script src="scripts/utils.js" language="javascript" type="text/javascript"></script>
</head>
<body bgcolor="#FFFFFF" text="000000" link="#0000FF" vlink="2d3f6f" alink="#0000FF" leftmargin="3" topmargin="3" marginwidth="3" marginheight="3" class="bodycopy" onLoad="MM_preloadImages('images/topmenu_02-down.gif','images/topmenu_02-over.gif','images/topmenu_03-over.gif','images/topmenu_04-down.gif','images/topmenu_04-over.gif','images/topmenu_05-down.gif','images/topmenu_05-over.gif','images/topmenu_06-down.gif','images/topmenu_06-over.gif','images/topmenu_07-down.gif','images/topmenu_07-over.gif','images/topmenu_03.gif')">
<?php include 'include/header.php'; ?>
<div align="center"> 
  <?php include 'include/participate.php'; ?>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="400" rowspan="3" align="left" valign="top" class="bodycopy">
		<?php if ($_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'])) { ?>
			<div>
				<p>
					Thank you for your input!  This information is very helpful as a team begins to gather sounds. We hope to have some examples online soon.
					<br /><br />
					You submitted the following:<br />
	                <?php
	                print "My favorite Chicago sound: $whatsyours";
	                print "<br />";
	                print "Because: $why1";
	                print "<br />";
	                print "Address/Intersection: $where";
	                print "<br />";
	                print "How Did You Hear About FCS: $howheard";
	                print "<br />";
	                print "My First Name: $firstname";
	                print "<br />";
	                print "My Last Name: $lastname";
	                print "<br />";
	                print "My Neighborhood is: $neighborhood_name";
	                print "<br />";
	                print "My Email Address: $email";
	                print "<br />";

	                $usename_val = 1;
	                $usename_print = 'yes';
	                if($usename == 'checkbox') {
	                    $usename_val = 0;
	                    $usename_print = 'no';
	                }   
	                print "Use my name: $usename_print";
	                print "<br />";

	                $updates_val = 1;
	                $updates_print = 'yes';
	                if($updates == 'checkbox') {
	                    $updates_val = 0;
	                    $updates_print = 'no';
	                }
	                print "Send me updates: $updates_print";
	                print "<br />";
	                print "<br />";

	                /* MySQL goes here */
					require_once('include/mysql_connect.php');
	                /* Check for selected neighborhood: */
	                $now = date('YmdHms');
					$info = '';
	                if ($neighborhood_id == '') {
	                    $info = sprintf(
						"INSERT INTO favorite_sounds (favSound, whySound, address, howDidYouHear, fname, lname, email, usename, updates, dateAdded)
	                    VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', %s, %s, '%s');",
	                    mysql_real_escape_string($whatsyours), mysql_real_escape_string($why1), mysql_real_escape_string($where), mysql_real_escape_string($howheard), mysql_real_escape_string($firstname), mysql_real_escape_string($lastname), mysql_real_escape_string($email), mysql_real_escape_string($usename_val), mysql_real_escape_string($updates_val), mysql_real_escape_string($now));
	                } else {
	                    $info = sprintf(
						"INSERT INTO favorite_sounds (favSound, whySound, address, howDidYouHear, fname, lname, email, neighborhood_id, usename, updates, dateAdded) 
	                    VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', %s, %s, %s, '%s');",
	                    mysql_real_escape_string($whatsyours), mysql_real_escape_string($why1), mysql_real_escape_string($where), mysql_real_escape_string($howheard), mysql_real_escape_string($firstname), mysql_real_escape_string($lastname), mysql_real_escape_string($email), mysql_real_escape_string($neighborhood_id), mysql_real_escape_string($usename_val), mysql_real_escape_string($updates_val), mysql_real_escape_string($now));
	                }
	                $result = mysql_query($info);
	                /*  */
/* 	                if (mysql_errno ()) { */
/* 	                	mail ('joe@shooflydesign.org', 'MySQL error on favoritechicagosounds', 'ERROR: ' .  mysql_error (  )); */
/* 	                 //echo 'ERROR: ' .  mysql_error (  ); */
/* 	                } else { */
/* 	                	mail ('joe@shooflydesign.org', 'Success on favoritechicagosounds', 'End of transmission'); */
/* 	                } */
					
					print "<p>Please stay tuned as this project evolves and your input is utilized.</p>";
	                    
					if (strlen($email) > 0) {
						$subject = "Thanks from Favorite Chicago Sounds!";
						$body = "Thanks for participating in Favorite Chicago Sounds, your input is greatly appreciated.  To view other user submissions just visit the following url:\n\n http://favoritechicagosounds.com/catalog.php\n\n Thanks again!!";
						$headers = "From: Jesse <jesse@favoritechicagosounds.com>\n" . "Bcc: Me <tdgale@tdgale.com>\n" . "X-Mailer: PHP 4.x";
						
						if (mail($email, $subject, $body, $headers)) {
							print "<p>You should receive an email shortly with instructions on viewing other user submissions.</p>";
						} else {
							print "<p>We encountered a problem sending your notification email.  If this problem persists, please <a href='contact.php'>Contact Us</a> so we can work to fix the problem.  Thanks!</p>";
						}
					}             
	                ?>
				</p>
			</div>
		<?php 
		} else {
	      echo '<p>Sorry, you have provided an invalid security code.  Please try again.</p>';
		}
		?>
	</td>
    <td width="20" rowspan="2"><p>&nbsp;</p></td>
    <td valign="top" background="images/bg_grey_light.gif" class="bodycopy">
		<table width="100%"  border="0" cellspacing="0" cellpadding="10">
          <tr>
		    <td class="bodycopy">
				<span class="headline2">How It Works</span>
	            <br><br>
	            Please take a few moments to fill out this short questionnaire about your favorite sounds of the city. Your reponse will be added to the database and immediately accessible online through our <a href="catalog.php">catalog</a>. 
				<br><br>
	            If you have a recording of the sound, we invite you to upload it! 
				<br><br>
	            Selected submissions are recorded by FCS recordists and then added to the catalog. 
				<br>
	            All sounds are produced in MP3 format and downloadable for free.
				<br><br>
	            We're always looking for more volunteer recordists!  If you're interested in joining the team, <a href="mailto:jesseseay@gmail.com">let us know</a>.
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