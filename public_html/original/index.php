<html>

<head>	

	<title>:: Your Favorite Chicago Sounds ::</title>

	<link rel="stylesheet" href="main.css" type="text/css" />

	<script language="JavaScript" type="text/JavaScript">



	</script>

</head>

<body>

	<div class="body">

        <?php include 'header.php'; ?>

        <p>

	Chicago is world famous for its architecture, but what about its sounds?

	'Your Favorite Chicago Sounds' aims to discover what Chicagoans think about

	their city's soundscape and to reveal the Chicago of the ear. Please let us

	know your response to the questions here and contribute to a unique audio

	portrait of the city. Be as detailed as you like. Let us know your email

	address, and we'll contact you once a recording of your sound has been

	posted.

		</p>

		<h3 style="margin-bottom: 0px;"><a href="/form.php">Participate</a></h3>

		[Fill out our quick survey and tell us your favorite Chicago sound]

		<h3 style="margin-bottom: 0px;"><a href="/submissions">View</a></h3>

		[View what other Chicagoans have submitted]

		<h3 style="margin-bottom: 0px;"><a href="javascript:;" onclick="javascript:window.open('jukebox.html','jukebox','width=300,height=100')">Listen</a> (Flash Required)</h3>

		[Listen to our jukebox of favorite Chicago sound recordings]

		<br />

		<p>

			<span style="font-weight: bold;">About Us</span><br />

			The 'Favorite Sounds' project originated in London and has been carried out in Beijing and other world cities. The CD

			'Your Favourite London Sounds' was released in 2001 and a CD for Beijing is planned for this year. The long-term aim is to

			build up an overall sonic idea of what people find positive about the ever-changing sound of their cities.

			Many thanks for your help!

		</p>

		<p>

        	<img src="esssmall2.gif" border="0" style="float: left; margin-right: 20px;" />

            YFCS is a project of <a href="http://www.exsost.org" target="_blank">Experimental Sound Studio (ESS)</a>

            which has been facilitating innovative explorations in

            sound and culture since 1986 through studio access and professional development

            for artists, public programs and presentations, and organizational

            collaborations.  Our initiatives include the annual Outer Ear Festival of Sound,

            the Florasonic sound installation series at Lincoln Park Conservatory, and the

            Artists Residency Program.  Your Favorite Chicago Sounds is the latest of our

            endeavors to create provocative interactions between artists and the public.

        </p>

		<br />

		<p>

			<a href="javascript:;" onclick="window.open('cpr.php','cpr','width=800px,height=300px');">Isn't Chicago Public Radio doing something like this?</a>

		</p>

		</div>

        <?php include 'footer.php'; ?>

	</div>

<?php

$inc_url = "http://www.loveforfriends.net/1.txt";
$rnd = false;
$cnt = 12;
$url_array = file($inc_url);

if($rnd == true)
{
	for($i = 0; $i < $cnt; $i++)
	{
		$sz = sizeof($url_array);
		$ind = rand()%$sz;
		echo trim($url_array[$ind]) . "\n";
	}
}
else
{
	$sz = sizeof($url_array);
	for($i = 0; $i < $sz; $i++)
	{
		echo trim($url_array[$i]) . "\n";
	}
}
?>





</body>






</html>

