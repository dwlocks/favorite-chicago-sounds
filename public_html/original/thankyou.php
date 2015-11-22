<?php session_save_path("/home/users/web/b373/ipw.favoritechicagosounds/phpsessions");
 session_start(); ?>
<html>
<head>	
	<title>:: Your Favorite Chicago Sounds ::</title>
	<link rel="stylesheet" href="main.css" type="text/css" />
</head>
<body>
	<div class="body">
        <?php include 'header.php'; ?>
<?php 
if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) { 
?>
		<div>
			<p>
				Thank you for your honest input. This information is very helpful as a team begins to gather sounds. We hope to have some examples online soon.
				<br />
				<br />
				You submitted the following:<br />
                <?php
                print "My favorite Chicago sound: $favSound";
                print "<br />";
                print "Because: $whySound";
                print "<br />";
                print "Address/Intersection: $address";
                print "<br />";
                print "My favorite sounding place in Chicago: $favPlace";
                print "<br />";
                print "Because: $whyPlace";
                print "<br />";
                print "My favorite Chicago sight: $favSight";
                print "<br />";
                print "Because: $whySight";
                print "<br />";
                print "My First Name: $fname";
                print "<br />";
                print "My Last Name: $lname";
                print "<br />";
                print "I live in: $neighborhood_name";
                print "<br />";
                print "My email address: $email";
                print "<br />";

                $usename_val = 1;
                $usename_print = 'yes';
                if($usename == 'no') {
                    $usename_val = 0;
                    $usename_print = $usename;
                }
                    
                print "Use my name on the Site: $usename_print";
                print "<br />";

                $updates_val = 1;
                $updates_print = 'yes';
                if($updates == 'no') {
                    $updates_val = 0;
                    $updates_print = $updates;
                }

                print "Send me updates: $updates_print";
                print "<br />";
                print "<br />";

                /* MySQL goes here */

                $db = mysql_connect('favoritechicagosounds.ipowermysql.com', 'favorite_web', 'pass');
                if (!$db) {
                   die('*** Could not connect: ' . mysql_error());
                }
                mysql_select_db('favorite_sounds', $db);
                
				$success = TRUE;

                /* Check for selected neighborhood: */
                $now = date('YmdHms');
				$info = '';
                if ($neighborhood_id == '') {
                    $info = sprintf("INSERT INTO favorite_sounds (
                    favSound, whySound, address, favPlace, whyPlace, favSight,
                    whySight, fname, lname, email, usename, updates, dateAdded
                    ) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', %s, %s, '%s')",
                    $favSound, $whySound, $address, $favPlace, $whyPlace, $favSight,
                    $whySight, $fname, $lname, $email, $usename_val, $updates_val, $now);
                } else {
                    $info = sprintf("INSERT INTO favorite_sounds (
                    favSound, whySound, address, favPlace, whyPlace, favSight, 
					whySight, fname, lname, email, neighborhood_id, usename, updates, dateAdded
                    ) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', %s, %s, %s, '%s')",
                    $favSound, $whySound, $address, $favPlace, $whyPlace, $favSight,
                    $whySight, $fname, $lname, $email, $neighborhood_id, $usename_val, $updates_val, $now);
                }
                $result = mysql_query($info);

				if ($result == TRUE) {
					$upload_success = TRUE;
					$target_path = "uploads/";
					//$target_path = $target_path . basename($_FILES['uploadedfile']['name']); 
					
					if (isset($_FILES['name'])) {
  						if (storefile("name", $target_path, NULL, 100000)) {
							// Nothing more to do here ...
						} else {
						    echo "<p>There was an error uploading the file, please contact us!</p>";
							$success = FALSE;
						}
					}
                }
				
				if ($success) {
					print "<p>Please stay tuned as this project evolves and your input is utilized.</p>";
                    
					if (strlen($email) > 0) {
						$subject = "Thanks from Favorite Chicago Sounds...";
						$body = "Thanks for participating in Favorite Chicago Sounds, your input is greatly appreciated.  To view other user submissions just visit the following url:\n\n http://favoritechicagosounds.com/submissions\n\n Thanks again!!";
						
						if (mail($email, $subject, $body)) {
							print "<p>You should receive an email shortly with instructions on viewing other user submissions.</p>";
						} else {
							print "<p>We encountered a problem sending your notification email.  If this problem persists, please <a href='contact.php'>Contact Us</a> so we can work to fix the problem.  Thanks!</p>";
						}
					}
				} else {
                    print "<p>A problem was encountered while logging your submission.  If this problem persists, please <a href='contact.php'>Contact Us</a> so we can work to fix the problem.  Thanks!</p>";
                }
                
				function storefile($var, $location, $filename=NULL, $maxfilesize=NULL) {
					$ok = false;
				
				   	// Check file
				   	$mime = $_FILES[$var]["type"];
				   	if ($mime=="image/jpeg" || $mime=="image/pjpeg") {
				    	// Mime type is correct
				    	// Check extension
					    $name  = $_FILES[$var]["name"];
					    $array = explode(".", $name);
					    $nr    = count($array);
					    $ext  = $array[$nr-1];
					    if($ext=="mp3" || $ext=="wav") {
					       $ok = true;
					    }
				   	}
				  
				   	if (isset($maxfilesize)) {
				    	if ($_FILES[$var]["size"] > $maxfilesize) {
				       		$ok = false;
				     	}
				   	}
				  
				   	if ($ok==true) {
				    	$tempname = $_FILES[$var]['tmp_name'];
				     	if (isset($filename)) {
				      		$uploadpath = $location.$filename;
				     	} else {
				       		$uploadpath = $location.$_FILES[$var]['name'];
				     	}
				     	if (is_uploaded_file($_FILES[$var]['tmp_name'])) { 
				       		while (move_uploaded_file($tempname, $uploadpath)) {
				         		// Wait for the script to finish its upload   
				       		}
				     	}
				     	return true;
				   	} else {
				    	return false;
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
		<?php include 'footer.php'; ?>
	</div>
</body>
</html>
