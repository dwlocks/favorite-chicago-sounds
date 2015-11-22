<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Favorite Chicago Sounds &mdash; Sound Maps</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/mainstyle.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/eq_browsertab.ico" type="image/x-icon" /> 
<link rel="shortcut icon" href="images/eq_browsertab.ico" type="image/x-icon" />
<script src="scripts/utils.js" language="javascript" type="text/javascript"></script>

<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>FCS</title>
    <meta name="title" content="MapBuilder - GoogleMap API Source Code Generator." />
    <meta name="description" content="MapBuilder.net lets you tag locations on a map and publish it on your own site. Mapping is now easier than ever. It's free." />
    <meta name="keywords" content="Google Maps API, PHP, AJAX, XML" />
    <meta name="author" content="Andrew Bidochko. http://www.mapbuilder.net" />
    <style type="text/css">
      
      /* Generic map, side bar holder styles */
      .MapBuilder {font: normal small verdana, arial, helvetica, sans-serif; font-size: 10px; margin: 0px;}
      .MapBuilder a {text-decoration: none; color: #000000; background-color: transparent;}
      .MapBuilder a:hover {color: #007AC8; background-color: transparent;}
      .MapBuilder h1 {font-weight: bold; font-size: 16pt; color: #369; border-bottom: 2px solid #369;}
      
      /* Info Window styles */
      .IW { width: 430px;}
      .IWContent {height: 140px; overflow:auto;}
      .IWCaption {font-weight: bold; font-size: 12pt; color: #000000; border-bottom: 2px solid #000000;}
      .IWFooter {margin-top: 5px; font-size: 8pt; }
      .IWFooterZoom {}
      .IWDirections{background-color:#FFF;}

 
      .MapBuilderSideBar {float:left; margin-left: 10px; }
 

      
    </style>

    <!-- Please, request sign up for your own GMAP KEY at http://www.google.com/apis/maps/signup.html and replace 'GMAPKEY' entry with generated key in the line below. -->
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAMBh4_qfjigaLN47Rxy7FMRQ3aiGd9hZ43gGkmlov1avIca8OXBTWamS5jb4JFm9MonqpjOd9euSzSw" type="text/javascript"></script>
    <script src="http://www.mapbuilder.net/js/api/google/v2.03/?UserName=tdgale&amp;Map=56632&amp;SideBar=Right" type="text/javascript"></script>
    
    <script type="text/javascript">
    //<![CDATA[

    // Global Variables
    // set map variable
    var map = null;
    //set up array of locations
    var aLocations = new Array;

    /*************************** Configuration Options ***************************/
    /*PDMarker is used to display tooltips when the user hovers over the markers.
    * PDMarker is a LGPL library provided by Peter Jones. 
    * For details see http://wwww.pixeldevelopment.com/pdmarker.asp
    */
    var usePDMarker = false;

    // Create a base "tiny" red  icon that specifies the shadow, icon dimensions, etc.
    var iconsm = new GIcon();
    iconsm.image = "http://labs.google.com/ridefinder/images/mm_20_red.png";
    iconsm.shadow = "http://labs.google.com/ridefinder/images/mm_20_shadow.png";
    iconsm.iconSize = new GSize(12, 20);
    iconsm.shadowSize = new GSize(20, 18);
    iconsm.iconAnchor = new GPoint(6, 20);
    iconsm.infoWindowAnchor = new GPoint(5, 1);

    // Create a base "large" red icon that specifies the shadow, icon dimensions, etc.
    var iconbig = new GIcon();
    iconbig.image = "http://www.google.com/mapfiles/marker.png";
    iconbig.shadow = "http://www.google.com/mapfiles/shadow50.png";
    iconbig.iconSize = new GSize(20, 34);
    iconbig.shadowSize = new GSize(37, 34);
    iconbig.iconAnchor = new GPoint(6, 34);
    iconbig.infoWindowAnchor = new GPoint(5, 1);

    // Custom Icon
    var iconcustom = new GIcon(iconbig);
    iconcustom.shadow = '';

     function onLoad() {
      if (!GBrowserIsCompatible()) 
      {
         document.getElementById("MapBuilderMap").innerHTML = "Unfortunately your browser doesn't support Google Maps.<br /> To check browser compatibility visit the following <a href=\"http://local.google.com/support/bin/answer.py?answer=16532&topic=1499\">link</a>.";
         return;
      }

      map = new GMap2(document.getElementById("MapBuilderMap"));
      var MB = new MapBuilder(map);
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      // Center the map to the default location and set map type
      map.setCenter(new GLatLng(41.87774145109674, -87.7587890625), 10, map.getMapTypes()[2]);
      	  
      // Initialize variables
      var point = null;
      var footerHtml = null;
      var InfoHTML = null;
      var marker = null;
      /* Options used for PDMarker initialization:
      * label: tooltip text
      * opasity: tooltip opasity
      */
      var options = {};

      // Add locations
	
      point = new GLatLng(41.881565, -87.676644);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(0)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">&quot;Doors are now closing&quot;</div><div class=\"IWContent\">The sounding of the \"Doors are now closing\" Bell just before the heavy<br />doors slide shut on the El. The way the people react &amp; scurry about<br />trying to make their way on to the train cars in the following seconds<br />after the bell rings.<br><br>submitted by: Russell Woelfel</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 0);
      map.addOverlay(marker);
      aLocations[0] = new Array(marker, "&quot;Doors are now closing&quot;", InfoHTML, point);
	
      point = new GLatLng(41.87955, -87.624419);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(1)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">'You're beautiful, god bless you...'</div><div class=\"IWContent\">said by a homeless person on Michigan and Adams (on Adams N side<br />between corner and bus stop, usually mornings) - he says it whether you<br />give change or not<br><br>submitted by: Hannah Frank </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 1);
      map.addOverlay(marker);
      aLocations[1] = new Array(marker, "'You're beautiful, god bless you...'", InfoHTML, point);
	
      point = new GLatLng(41.881913, -87.628133);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(2)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">7 West Madison, Rm 1405</div><div class=\"IWContent\">My favorite sound is in the kitchen. When i open the cupboard above the<br />sink while the fan is on, a slight tonal change in the hum of the air<br />movement occurs. Because its just the one cupboard. None of the others<br />create the shift in tone.<br><br>submitted by: max menning</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 2);
      map.addOverlay(marker);
      aLocations[2] = new Array(marker, "7 West Madison, Rm 1405", InfoHTML, point);
	
      point = new GLatLng(41.876718930343934, -87.61296272277832);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(3)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">90ft below Lake Michigan</div><div class=\"IWContent\">I love every thing about the Lake because its quiet<br><br>submitted by: H. Sandrof</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 3);
      map.addOverlay(marker);
      aLocations[3] = new Array(marker, "90ft below Lake Michigan", InfoHTML, point);
	
      point = new GLatLng(41.91766487846985, -87.68723845481873);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(4)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Air rushing through the door of arturo's tacos</div><div class=\"IWContent\">in 2003 or 2004 (i don\'t remember which year)<br><br>submitted by: brian klein </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 4);
      map.addOverlay(marker);
      aLocations[4] = new Array(marker, "Air rushing through the door of arturo's tacos", InfoHTML, point);
	
      point = new GLatLng(41.884545, -87.622196);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(5)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Aon Center Plaza</div><div class=\"IWContent\">So far, the bird that sings at the Aon Center Plaza during the evenings<br />is my favorite sound. One bird sounds loud enough to hear nearly a<br />block away, and it\'s not a machine or human made object.<br><br>submitted by: Eileen Doyle</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 5);
      map.addOverlay(marker);
      aLocations[5] = new Array(marker, "Aon Center Plaza", InfoHTML, point);
	
      point = new GLatLng(42.01382, -87.670219);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(6)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Assyrian church</div><div class=\"IWContent\">Waking up on Sunday to the mondo noize of the Assyrian church behind my<br />dads apartment. As an ardent atheist I have no obligations to wake up<br />early on Sunday so they really help me out. Where? Rogers Park, Chase<br />and Ashland, its like two or three blocks away from the Jarvis Red Line.<br><br>submitted by: Danny Gallegos</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 6);
      map.addOverlay(marker);
      aLocations[6] = new Array(marker, "Assyrian church", InfoHTML, point);
	
      point = new GLatLng(41.940595032710625, -87.65909671783447);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(7)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Baby strollers</div><div class=\"IWContent\">Rolling down the sidewalk outside my bedroom window, waking me up at<br />8:30AM Saturday mornings. It makes me feel safe and part of an active<br />community.<br><br> Submitted by Kelsey</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 7);
      map.addOverlay(marker);
      aLocations[7] = new Array(marker, "Baby strollers", InfoHTML, point);
	
      point = new GLatLng(41.904005, -87.625389);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(8)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Beer bottles</div><div class=\"IWContent\">Beer bottles being thrown in the dumpsters from the nearby bars at all<br />hours of the night. It makes me chuckle to hear the sound of hundreds<br />of beer bottels being dumped out every hour. I know people are having a<br />good time.<br><br>submitted by: Nicole</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 8);
      map.addOverlay(marker);
      aLocations[8] = new Array(marker, "Beer bottles", InfoHTML, point);
	
      point = new GLatLng(41.88475885714155, -87.62162894010544);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(9)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Bertoia sculpture</div><div class=\"IWContent\">I love the sound of the Bertoia sculpture in front of the Amoco building (I know, the Aon Center). &nbsp;&nbsp;&nbsp; <br>submitted by: k<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 9);
      map.addOverlay(marker);
      aLocations[9] = new Array(marker, "Bertoia sculpture", InfoHTML, point);
	
      point = new GLatLng(41.96987082456229, -87.64486491680145);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(10)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Bike tire</div><div class=\"IWContent\">The sound of bike tire on the lakefront jogging path. <br>Where? Lawerence lakefront <br><br>submitted by: David Schm�dde </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 10);
      map.addOverlay(marker);
      aLocations[10] = new Array(marker, "Bike tire", InfoHTML, point);
	
      point = new GLatLng(41.877673, -87.633925);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(11)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Billy Goat Tavern</div><div class=\"IWContent\">The old man in The Billy Goat tavern, screaming �Special�, sounds like<br />�SPESHALL, SPESHALL� on Wells and Jackson. Classic. He also yells out<br />�Cheeps� occasionally. Classic. <br><br>submitted by: Eric Routhier </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 11);
      map.addOverlay(marker);
      aLocations[11] = new Array(marker, "Billy Goat Tavern", InfoHTML, point);
	
      point = new GLatLng(41.952724266230994, -87.72894144058228);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(12)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Blue Line at Irving Park</div><div class=\"IWContent\">the traffic noise whoosh of the kennedy from the irving park blue line stop. <br>submitted by: hench<br><br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 12);
      map.addOverlay(marker);
      aLocations[12] = new Array(marker, "Blue Line at Irving Park", InfoHTML, point);
	
      point = new GLatLng(41.971392391098526, -87.76333808898926);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(13)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Blue Line at Jefferson Park</div><div class=\"IWContent\">The sound of the trains on the Blue Line between Jefferson Park and Harlem, where they go as fast as (if not faster than) traffic on the Kennedy. <br>submitted by: tony<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 13);
      map.addOverlay(marker);
      aLocations[13] = new Array(marker, "Blue Line at Jefferson Park", InfoHTML, point);
	
      point = new GLatLng(41.909785, -87.676767);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(14)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Bookstore Rats</div><div class=\"IWContent\">When you walk into Myopic, walk directly through the first floor to the back of the store. There\'s that one little cove that is basically straight ahead, behind one shelf that makes a sort of hidden peninsula. It has a low ceiling due to the half-floor above it. If you are standing with your back to their collection of Richard Powers books, you are in the right place. Right there, when the train goes by, the rats inside the wall lose it. I don\'t know anything about rats\' memory spans, but it must shock them every time. I spent a good hour there once, just listening to them freak out. It\'s a really bizarre juxtaposition of sounds: mechanical din, the stress of the building as the train goes by, the natural chaotic response by the building\'s residents...all filtered through the paper of the books on the walls. &nbsp;&nbsp;&nbsp; What makes this sound uniquely Chicagoan? I\'m not totally sure. But insofar as it\'s connected to a very vivid Chicago memory of mine, that\'s the one I have to offer. I guess you could argue that it has to do with place, the conflict of environments, how art and the artisan community can facilitate gentrification... I may have to work on my defense a bit more. <br><br>submitted by: Daniel McSwain<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 14);
      map.addOverlay(marker);
      aLocations[14] = new Array(marker, "Bookstore Rats", InfoHTML, point);
	
      point = new GLatLng(41.9391904460767, -87.65364646911621);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(15)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Brew 'n' View on Sheffield and Belmont</div><div class=\"IWContent\">The old dancing snacks reel they play between features. The crowd<br />(usually made up of college students) hoots and hollers bawdily and<br />encourages the dancing weiner as it gets ready to jump into the dancing<br />hot dog buns. There\'s also the crowd\'s reaction to the dancing ice<br />cream bars stripping off their wrappers.<br><br>Submitted by Kelli Griffis</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 15);
      map.addOverlay(marker);
      aLocations[15] = new Array(marker, "Brew 'n' View on Sheffield and Belmont", InfoHTML, point);
	
      point = new GLatLng(41.763117447005875, -87.6763916015625);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(16)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Bridge between Pilsen and Bridgeport</div><div class=\"IWContent\">A bridge between Pilsen and Bridgeport as cars go over it. The<br />chain-linked fence vibrates slightly as they pass, making a unique<br />high-pitched rattle. It\'s an interesting, easily-overlooked sound.<br><br>submitted by: Andrew Neher</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 16);
      map.addOverlay(marker);
      aLocations[16] = new Array(marker, "Bridge between Pilsen and Bridgeport", InfoHTML, point);
	
      point = new GLatLng(41.96091019429547, -87.64047145843506);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(17)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Broken ice platforms</div><div class=\"IWContent\">bumping and rubbing and creaking against each other in the little harbors on stormy winter days - when the lake is in uproar and movements of water come into the harbor to activate the surface. These ice shapes bump and grind and clinker and clonker and crunch and creak against each other. What sort of ice platforms do I mean? Like the 2 x 2 yard pieces that look like they\'ve broken up from large sheets of ice. The wind usually bunches up these ice pieces against one of the harbor walls. &nbsp;&nbsp;&nbsp; While the general weather is forbidding and violent, there is a calm repose to the clinking and clunking that accompanies the movement of these ice surfaces against each other. Where? The little harbor at W Montrose Ave, Lincoln Park. <br><br>submitted by: Michael Graeve <br><br>When thick ice forms on the lake, near the shore, you can hear the blocks of ice shifting and grinding against each other. &nbsp;&nbsp;&nbsp; Especially when the wind is still, the sound of the lake is a vast rumbling and creaking, like some great, groaning mill. I love that sound. <br><br>submitted by: elena<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 17);
      map.addOverlay(marker);
      aLocations[17] = new Array(marker, "Broken ice platforms", InfoHTML, point);
	
      point = new GLatLng(41.87955, -87.624269);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(18)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Bucket drummers</div><div class=\"IWContent\">one of the first sounds i heard after moving to chicago<br><br>submitted by: Ashley McInerney<br><br>-----<br><br>I enjoy the way the rhythm travels through the streets with tall buildings.<br><br>submitted by: Mike Thone</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 18);
      map.addOverlay(marker);
      aLocations[18] = new Array(marker, "Bucket drummers", InfoHTML, point);
	
      point = new GLatLng(41.962078, -87.678788);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(19)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Buddhist Temple</div><div class=\"IWContent\">The gongs at 7pm at the Buddhist Temple on Damen (just north of Montrose)<br>submitted by: Amy<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 19);
      map.addOverlay(marker);
      aLocations[19] = new Array(marker, "Buddhist Temple", InfoHTML, point);
	
      point = new GLatLng(41.880661, -87.674339);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(20)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Bulls game at United Center</div><div class=\"IWContent\">A Bulls game when the score is close and time is running out. The roar<br />of the crowd, squeaking shoes, bouncing basketball, its so hectic and<br />so beautiful.<br><br>submitted by: Jesse Welch</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 20);
      map.addOverlay(marker);
      aLocations[20] = new Array(marker, "Bulls game at United Center", InfoHTML, point);
	
      point = new GLatLng(41.96075861259051, -87.64003157615662);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(21)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Buoys</div><div class=\"IWContent\">The sounds of the dinging buoys at Monroe harbor on a lazy summer weekend. &nbsp;&nbsp;&nbsp; Also, big ships blowing their horns. <br>submitted by: Amanda<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 21);
      map.addOverlay(marker);
      aLocations[21] = new Array(marker, "Buoys", InfoHTML, point);
	
      point = new GLatLng(41.93654, -87.639319);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(22)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Buses stopping and starting.</div><div class=\"IWContent\">Probably because it\'s a sound that reminds me of my childhood, when I lived in the city. where? W Wellington Ave &amp; N Sheridan Rd<br><br>submitted by: anonymous<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 22);
      map.addOverlay(marker);
      aLocations[22] = new Array(marker, "Buses stopping and starting.", InfoHTML, point);
	
      point = new GLatLng(41.72072119663713, -87.5430965423584);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(23)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Calumet's industrial corridor</div><div class=\"IWContent\">The industry of Calumet\'s industrial corridor. It\'s like seeing Sandburg\'s Chicago in its heyday. In this recording a massive crane raises coal into piles while on the other side of the river loaders move rock in an industrial zone. All this while cars whiz past and sirens howl. Eventually announced by a clanging bell the bridge starts ascending with the screech of metal for another coal barge to go up and my friend and I have to split.<br>submitted by: Joshua Manchester<br><img src=\"images/soundicon.gif\" align=\"left\" border=\"0\" height=\"NaN\" hspace=\"2\" vspace=\"2\" width=\"20\">&nbsp; <a href=\"http://sound/blueline.mp3\">Listen</a><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 23);
      map.addOverlay(marker);
      aLocations[23] = new Array(marker, "Calumet's industrial corridor", InfoHTML, point);
	
      point = new GLatLng(42.01608, -87.675199);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(24)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Car horns on unmarked police cars</div><div class=\"IWContent\">the car horns on the \"jump out\" unmarked police cars in rogers park.	I\'m pround to be an american cuz at least i know i\'m free.<br>where? clark and rogers, in rogers park<br><br>submitted by: miles vance</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 24);
      map.addOverlay(marker);
      aLocations[24] = new Array(marker, "Car horns on unmarked police cars", InfoHTML, point);
	
      point = new GLatLng(41.89659, -87.691799);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(25)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Cat fights at Rice and Rockwell</div><div class=\"IWContent\">I am an animal lover, so this may seem hypocritical, but I like hearing<br />cats fighting and playing at night. It reminds me that nature and<br />wildlife exist everywhere, even in our urban landscape.<br><br>submitted by: Marie Schulin</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 25);
      map.addOverlay(marker);
      aLocations[25] = new Array(marker, "Cat fights at Rice and Rockwell", InfoHTML, point);
	
      point = new GLatLng(41.88386, -87.631631);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(26)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">City Hall - debate over NFC tropy</div><div class=\"IWContent\">The voices of the Chicagoans debating the merits of the George Halas/NFC Trophy on display at City Hall. The ambient sound is rich there. The \"dings\" of the elevators as they move non-stop. The very specific Chicago accent. The natural echo that are present in the halls of City Hall. The tiny plastic wind as the disposable cameras are advanced.<br>submitted by: Liz Bustamante<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 26);
      map.addOverlay(marker);
      aLocations[26] = new Array(marker, "City Hall - debate over NFC tropy", InfoHTML, point);
	
      point = new GLatLng(41.88751847956533, -87.63100862503052);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(27)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Clark St Bridge</div><div class=\"IWContent\">The sound of the bells warning motorists/pedestrians that the Clark street bridge will be opening up to let boats on the river through. That\'s the view from my office window.&nbsp; <br><br>submitted by: fluffy<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 27);
      map.addOverlay(marker);
      aLocations[27] = new Array(marker, "Clark St Bridge", InfoHTML, point);
	
      point = new GLatLng(41.86744, -87.625829);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(28)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Construction</div><div class=\"IWContent\">When I\'m walking along Wabash by Roosevelt, the sound of the<br />construction worker\'s echoes and the way they change and overlap is<br />amazing.<br><br>submitted by: arieke</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 28);
      map.addOverlay(marker);
      aLocations[28] = new Array(marker, "Construction", InfoHTML, point);
	
      point = new GLatLng(41.88406793446202, -87.63022541999817);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(29)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Cook County State's Attorney</div><div class=\"IWContent\">Richard Devine, the Cook County States Attorney, talking about justice<br />with a backdrop of the screams of torture victims and the protests of<br />the torture victims\' families. For the last twenty years that I\'ve<br />lived in Chicago.<br><br>submitted by: Robert Zajac </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 29);
      map.addOverlay(marker);
      aLocations[29] = new Array(marker, "Cook County State's Attorney", InfoHTML, point);
	
      point = new GLatLng(41.86269, -87.61692);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(30)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Crowd at Wrigley Field, Soldier Field or Sox Park</div><div class=\"IWContent\">The sound of the crowd at Wrigley Field, Soldier Field or Sox Park when the home team scores. It is one of the few unambivalent expressions of joy.<br><br>submitted by: Jeff Greenberger</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 30);
      map.addOverlay(marker);
      aLocations[30] = new Array(marker, "Crowd at Wrigley Field, Soldier Field or Sox Park", InfoHTML, point);
	
      point = new GLatLng(41.97576, -87.708689);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(31)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">CTA bus voice</div><div class=\"IWContent\">It cracks me up. On any CTA bus, particularly the 92 Foster bus.<br><br>submitted by: Awesome. Person.</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 31);
      map.addOverlay(marker);
      aLocations[31] = new Array(marker, "CTA bus voice", InfoHTML, point);
	
      point = new GLatLng(41.9168, -87.687379);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(32)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">CTA trains</div><div class=\"IWContent\">Sound of the CTA trains in the distance but when I\'m inside, especially at home. It\'s calming and reminds me I\'m safe @ home and don\'t have to be anywhere but that I still live in a metropolis.<br><br>submitted by: Liz Mason<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 32);
      map.addOverlay(marker);
      aLocations[32] = new Array(marker, "CTA trains", InfoHTML, point);
	
      point = new GLatLng(41.82058302459279, -87.78264999389648);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(33)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Distant train engine</div><div class=\"IWContent\">On a frigid winter night with a north wind blowing. It reminds me of<br />coming home to warmth and security, escaping the cold lonliness of the<br />winter darkness and a day out in the world.<br><br>submitted by: anonymous</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 33);
      map.addOverlay(marker);
      aLocations[33] = new Array(marker, "Distant train engine", InfoHTML, point);
	
      point = new GLatLng(41.88575, -87.630969);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(34)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">El at Clark &amp; Lake</div><div class=\"IWContent\">The sound of the \'El\' &nbsp;&nbsp;&nbsp; I hear it most often at Clark &amp; Lake. &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br><br>submitted by: Selma Thomas <br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 34);
      map.addOverlay(marker);
      aLocations[34] = new Array(marker, "El at Clark &amp; Lake", InfoHTML, point);
	
      point = new GLatLng(41.947418010514205, -87.65363574028015);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(35)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">El at Wrigley Field</div><div class=\"IWContent\">The noise of the L coming and going from the stop near Wrigley Field . . . there is nothing better. <br>submitted by: Lisa<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 35);
      map.addOverlay(marker);
      aLocations[35] = new Array(marker, "El at Wrigley Field", InfoHTML, point);
	
      point = new GLatLng(41.88576, -87.626269);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(36)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">El going by overhead in the loop</div><div class=\"IWContent\">it\'s really loud and sometimes can be an interruption to conversation,<br>but it\'s momentary, and it makes me know that i\'m in a large city (very<br>few cities have such an extensive transit system) and the el is one of<br>my favorite things about chicago.<br>where? lake/wabash; all around the loop; various places downtown<br>submitted by: jocelyn geboy<br><br>The El struggling to maneuver at the corners of the Loop. <br>submitted by: Jason B<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 36);
      map.addOverlay(marker);
      aLocations[36] = new Array(marker, "El going by overhead in the loop", InfoHTML, point);
	
      point = new GLatLng(41.88656, -87.626259);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(37)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">El sounds bouncing off buildings downtown</div><div class=\"IWContent\">It evokes the history, strength and character of the city.<br>where? along wabash, in the loop<br><br>submitted by: anonymous<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 37);
      map.addOverlay(marker);
      aLocations[37] = new Array(marker, "El sounds bouncing off buildings downtown", InfoHTML, point);
	
      point = new GLatLng(41.88364459086286, -87.62746810913086);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(38)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Elburn Metra station</div><div class=\"IWContent\">Getting off the Metra in Elburn, and as the train pulls away. There is<br />so much silence, you can barely even hear the birds. While on the<br />train, you still have the sounds and the mindset of the city<br />resognating in your head. As soon as the wheels of the train completely<br />roll away, this powerful, impending silence and lonliness really hits.<br><br>submitted by: Alicia M</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 38);
      map.addOverlay(marker);
      aLocations[38] = new Array(marker, "Elburn Metra station", InfoHTML, point);
	
      point = new GLatLng(41.856714, -87.633217);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(39)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Elevator bridge horn @ chinatown park</div><div class=\"IWContent\">submitted by: Gordon Tebo</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 39);
      map.addOverlay(marker);
      aLocations[39] = new Array(marker, "Elevator bridge horn @ chinatown park", InfoHTML, point);
	
      point = new GLatLng(41.87678283837028, -87.6244854927063);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(40)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Elevator in the Performing Arts building</div><div class=\"IWContent\">It\'s run by hand by a nice older man sitting on a three-legged stool.<br />The sound it makes as it passes each floor is very unique. Also, the<br />gates make a distinct sound when he opens them.<br><br>Submitted by Kelli Griffis</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 40);
      map.addOverlay(marker);
      aLocations[40] = new Array(marker, "Elevator in the Performing Arts building", InfoHTML, point);
	
      point = new GLatLng(41.876759, -87.630047);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(41)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Federal Prison</div><div class=\"IWContent\">The downtown prison bells at the Fedrall Prison. This sound is the sound 3000 unhappy souls must wake up to.<br><br>submitted by: Joseph Zaza</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 41);
      map.addOverlay(marker);
      aLocations[41] = new Array(marker, "Federal Prison", InfoHTML, point);
	
      point = new GLatLng(41.876765, -87.624555);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(42)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Fine Arts Building</div><div class=\"IWContent\">I love the sounds of the Fine Arts Building. A soprano running scales, a pianist practicing a concerto, the buzzer that summons the elevator operator. &nbsp;&nbsp;&nbsp; <br><br>submitted by: Elizabeth<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 42);
      map.addOverlay(marker);
      aLocations[42] = new Array(marker, "Fine Arts Building", InfoHTML, point);
	
      point = new GLatLng(41.882614176795556, -87.62186765670776);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(43)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Fireworks at Navy Pier</div><div class=\"IWContent\">4th of July fireworks on Navy Pier w/ CSO (\"ah\" of the crowd)<br><br>submitted by: Heidi Jo Fuhst</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 43);
      map.addOverlay(marker);
      aLocations[43] = new Array(marker, "Fireworks at Navy Pier", InfoHTML, point);
	
      point = new GLatLng(41.87178, -87.658836);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(44)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Freight trains and night from my house</div><div class=\"IWContent\">Sounds like distant whistling.<br>where? Little Italy<br><br>submitted by: Lori Talley</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 44);
      map.addOverlay(marker);
      aLocations[44] = new Array(marker, "Freight trains and night from my house", InfoHTML, point);
	
      point = new GLatLng(41.97675248272448, -87.71355628967285);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(45)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Gen'l sound of night time</div><div class=\"IWContent\">Traffic, including the sirens, and the planes flying into O\'Hare or<br />Midway &amp; the trains in the distance. Makes me feel like I\'m<br />somewhere when I wake up in the middle of the night. I spent a weekend<br />with friends in Lake In The Hills &amp; had trouble sleeping - it was<br />too freaking quiet.<br><br> Submitted by Patrick Broderick</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 45);
      map.addOverlay(marker);
      aLocations[45] = new Array(marker, "Gen'l sound of night time", InfoHTML, point);
	
      point = new GLatLng(41.89866358513702, -87.62315779924393);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(46)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Hancock Building</div><div class=\"IWContent\">Rapping on the windows in the bar at the top of the Hancock. <br><br>submitted by:&nbsp; Eamon<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 46);
      map.addOverlay(marker);
      aLocations[46] = new Array(marker, "Hancock Building", InfoHTML, point);
	
      point = new GLatLng(41.92169436589447, -87.71621704101562);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(47)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Harold Washington Library</div><div class=\"IWContent\">The loud air conditioner, mixed with the whispering people, and<br>shuffling sounds in the stacks at the Harold Washington library. It\'s<br>relaxing and completely unabrasive. It helps me focus and get excited<br>about reading or studying.<br><br>submitted by: Andi Hagen </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 47);
      map.addOverlay(marker);
      aLocations[47] = new Array(marker, "Harold Washington Library", InfoHTML, point);
	
      point = new GLatLng(41.913872, -87.662274);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(48)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Hideout</div><div class=\"IWContent\">\"Hot tamales! You want tamales?\" I usually hear this one at the Hideout. Gotta love people who bring food to you after a long night of drinking... I really like to hear Tim Tuten from the Hideout on one of his little<br>intro/rants. Especially when he goes political. I\'ve a few friends<br>that are driven completely nuts by him, but I really enjoy watching him<br>get carried away on his own express-train-of-thought. I don\'t know many<br>people who care that much, about anything. <br>submitted by: jtrain<br><br>The Hideout on a hot summer night <br>submitted by: Lucy<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 48);
      map.addOverlay(marker);
      aLocations[48] = new Array(marker, "Hideout", InfoHTML, point);
	
      point = new GLatLng(41.79963, -87.584039);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(49)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Hyde Park parakeets</div><div class=\"IWContent\">The sound of parakeets chirping as they fly around Hyde Park (esp. the park at 53rd St. and S. Hyde Park Blvd. as well as other parks in the neighborhood, and occasionally even the courtyard in my apartment building). It reminds me of my native India. Plus it is such a unique sound for this part of the world, and these parakeets are unique to just the Hyde Park neighborhood.<br>submitted by: Mona Oommen<br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 49);
      map.addOverlay(marker);
      aLocations[49] = new Array(marker, "Hyde Park parakeets", InfoHTML, point);
	
      point = new GLatLng(41.89245435204155, -87.66252994537354);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(50)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Ice cream trucks</div><div class=\"IWContent\">Ice cream trucks going through the neighborhood and the cicadas in the<br />trees in the late summer heat, riding my bike at night through the<br />silence of the Kinzie industial corridor.<br><br>Submitted by Jen M. D.</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 50);
      map.addOverlay(marker);
      aLocations[50] = new Array(marker, "Ice cream trucks", InfoHTML, point);
	
      point = new GLatLng(41.89111259921234, -87.66735255718231);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(51)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">J Davis Trio</div><div class=\"IWContent\">Betty\'s Blue Star Lounge<br><br>submitted by: Eric Rettig </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 51);
      map.addOverlay(marker);
      aLocations[51] = new Array(marker, "J Davis Trio", InfoHTML, point);
	
      point = new GLatLng(41.9397490921934, -87.67892360687256);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(52)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Kids in the park</div><div class=\"IWContent\">There is park there for small children. And in the summer you can hear<br />them playing in the water and just laughing. I can be asleep - or<br />sitting in a chair - and I hear them and everything that I\'m worrying<br />about evaporates for a second. It reminds me of when I was a kid at a<br />park near my house on the east side of Chicago.<br><br>Submitted by Alex Pina</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 52);
      map.addOverlay(marker);
      aLocations[52] = new Array(marker, "Kids in the park", InfoHTML, point);
	
      point = new GLatLng(41.982849, -87.771057);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(53)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Knife sharpener</div><div class=\"IWContent\">Because he is a cool old man who sharpens knife for miles on warm days, in Jefferson Park, walking the streets of the 60630.<br><br>submitted by: Helen McMara</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 53);
      map.addOverlay(marker);
      aLocations[53] = new Array(marker, "Knife sharpener", InfoHTML, point);
	
      point = new GLatLng(41.918511, -87.636035);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(54)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Lincoln Park Zoo monkeys</div><div class=\"IWContent\">The sound of monkeys yelling at each other because it sounds cute.<br><br>submitted by: Erica Phillips</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 54);
      map.addOverlay(marker);
      aLocations[54] = new Array(marker, "Lincoln Park Zoo monkeys", InfoHTML, point);
	
      point = new GLatLng(41.796112058683434, -87.57579803466797);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(55)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Little waves</div><div class=\"IWContent\">made by the lake and beach sounds in general-- mainly in hyde park. it<br />is one of the only relaxing and peaceful sounds of Chicago<br><br>submitted by: Jason Saager</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 55);
      map.addOverlay(marker);
      aLocations[55] = new Array(marker, "Little waves", InfoHTML, point);
	
      point = new GLatLng(41.898824, -87.62392);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(56)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Lost Tourists</div><div class=\"IWContent\">The sound of tourists debating whether or not the Hancock is the Sears Tower. &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br><br>submitted by: Shylo <br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 56);
      map.addOverlay(marker);
      aLocations[56] = new Array(marker, "Lost Tourists", InfoHTML, point);
	
      point = new GLatLng(41.88803764267584, -87.62215197086334);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(57)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Lower Wacker Drive</div><div class=\"IWContent\">The compressed and echoey sound of the cars, as you drive down Lower Wacker Drive. <br>submitted by: Ian<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 57);
      map.addOverlay(marker);
      aLocations[57] = new Array(marker, "Lower Wacker Drive", InfoHTML, point);
	
      point = new GLatLng(41.997832, -87.690017);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(58)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Markets on Devon</div><div class=\"IWContent\">these sounds represent one of the largest Indian communities outside of India<br>where? anywhere along Devon<br><br>submitted by: Noah Phonaut</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 58);
      map.addOverlay(marker);
      aLocations[58] = new Array(marker, "Markets on Devon", InfoHTML, point);
	
      point = new GLatLng(41.936562, -87.653648);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(59)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Mechanical switch on stoplight</div><div class=\"IWContent\">Unfortunately, my favorite Chicago sound is too subtle to be recorded<br />well. The stoplight by the Wellington rail station still has a<br />mechanical switch, and on quiet nights you can hear it click over. It<br />makes me feel like I\'m on a country road somewhere, even though It\'s 4<br />miles from downtown.<br><br>submitted by: F. Tyler</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 59);
      map.addOverlay(marker);
      aLocations[59] = new Array(marker, "Mechanical switch on stoplight", InfoHTML, point);
	
      point = new GLatLng(41.890289, -87.630895);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(60)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Mescal Margarita</div><div class=\"IWContent\">A mescal margarita being shaken and poured, at La Frontera<br />445 North Clark Street - Chicago, IL 60610<br>Why? Memory and anticipation<br><br>submitted by: tom raworth<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 60);
      map.addOverlay(marker);
      aLocations[60] = new Array(marker, "Mescal Margarita", InfoHTML, point);
	
      point = new GLatLng(41.878658, -87.640404);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(61)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Metra section of Union Station</div><div class=\"IWContent\">The Metra loudspeakers that announce track numbers in Union Station<br />because you can hear ten announcements simultaneously and they create a<br />Steve Reich minimalist tape kind of piece completely unintentionally<br><br>submitted by: Sam Scranton</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 61);
      map.addOverlay(marker);
      aLocations[61] = new Array(marker, "Metra section of Union Station", InfoHTML, point);
	
      point = new GLatLng(41.87991425337551, -87.62467861175537);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(62)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Metra train</div><div class=\"IWContent\">The Metro train sweeping by distracting a certain conversation with<br />friends, because I hear it everyday and it would feel out of place<br />without that sound as I go to class in the morning. <br><br>submitted by: Hyunwoo Park<br><br>-----<br><br>sound of metra train. i like the rhythm!<br><br>submitted by: John Lee</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 62);
      map.addOverlay(marker);
      aLocations[62] = new Array(marker, "Metra train", InfoHTML, point);
	
      point = new GLatLng(41.91313614145379, -87.62351989746094);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(63)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">North Avenue Beach</div><div class=\"IWContent\">Waves of Lake Michigan splashing on the shore. it\'s relaxing and a good contrast to the fast tempo of the city.<br>submitted by: Mark<br><br>The waves of Lake Michigan crashing into shore on a really windy day. It\'s almost surreal... sounds like an ocean but I know I\'m standing on shore of a lake. If I close my eyes I can imagine standing in a beach somewhere on the other side of world, then I open my eyes and see where I am, and realize I\'d almost rather be nowhere else than this amazing city! North Ave. Beach &nbsp;&nbsp;&nbsp; <br>submitted by: Kelly Stinson &nbsp;&nbsp;&nbsp; &nbsp;<br><br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 63);
      map.addOverlay(marker);
      aLocations[63] = new Array(marker, "North Avenue Beach", InfoHTML, point);
	
      point = new GLatLng(41.980481, -87.88547);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(64)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">O'Hare Airport</div><div class=\"IWContent\">The now defunct sound at O\'hare airports tunnel between United terminals. Trippy, spacey, evocative. <br><br>submitted by: Jeff Jacoby</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 64);
      map.addOverlay(marker);
      aLocations[64] = new Array(marker, "O'Hare Airport", InfoHTML, point);
	
      point = new GLatLng(41.97786911170172, -87.9019546508789);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(65)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">O'Hare terminal</div><div class=\"IWContent\">I like the sound of all the Chicago natives as they walk and talk through the terminals of O\'Hare.&nbsp; Those first few voices you over-hear on your way to the baggage claim remind you that these are your people�you\'re finally home.<br>submitted by: James<br><br>  Listen - <a target=\"_blank\" href=\"sounds/ohare.mp3\">Track 1</a> &nbsp; <a target=\"_blank\" href=\"sounds/ohare_02.mp3\">Track 2</a>&nbsp;&nbsp;  (via QuickTime)<br><br>Track 1<br><iframe style=\"border: 1px solid rgb(170, 170, 170); width: 400px; height: 27px;\" id=\"musicPlayer\" src=\"http://www.google.com/reader/ui/3247397568-audio-player.swf?audioUrl=http://www.favoritechicagosounds.com/sounds/ohare.mp3\">    </iframe></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 72);
      map.addOverlay(marker);
      aLocations[72] = new Array(marker, "O'Hare terminal", InfoHTML, point);
	
      point = new GLatLng(41.891548, -87.60849);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(66)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">On windy days everywhere...</div><div class=\"IWContent\">The wind at the lake. It\'s peaceful.<br><br>submitted by: Lori Moody</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 66);
      map.addOverlay(marker);
      aLocations[66] = new Array(marker, "On windy days everywhere...", InfoHTML, point);
	
      point = new GLatLng(41.967585, -87.688675);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(67)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">oompah</div><div class=\"IWContent\">I don\'t think they do it anymore, but I loved it when the Stereo Exchange store would play German oompah music over outdoor loudspeakers all over Lincoln Square. &nbsp;&nbsp;&nbsp; Also, when I was a kid in Oak Park I remember hearing a bell on a hand-pushed cart; it was a guy who sharpened knives and would push his cart up and down the streets. You\'d hear him coming for blocks. I wonder if he worked in Chicago, too. &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <br><br>submitted by: Wendy <br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 67);
      map.addOverlay(marker);
      aLocations[67] = new Array(marker, "oompah", InfoHTML, point);
	
      point = new GLatLng(41.928832, -87.635286);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(68)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Pedestrian underpass</div><div class=\"IWContent\">pedestrian underpass at diversey harbor &amp; lake shore drive. the<br />quick, low rumble of cars overhead and the slow, quiet trickle of water<br />in the canal leading to the lake<br><br>submitted by: john sisson</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 68);
      map.addOverlay(marker);
      aLocations[68] = new Array(marker, "Pedestrian underpass", InfoHTML, point);
	
      point = new GLatLng(41.910786819866864, -87.64901965856552);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(69)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Red line</div><div class=\"IWContent\">I enjoy the sound of the red line between Clark and Division and North and \"Clyburn\", seems that is when I always fall asleep on the train. &nbsp;&nbsp;&nbsp; also there is a homeless man who yells \"Happy Friday\" every Friday at the Washington/Wells red line stop I always smile when I hear \"This is Grand\". <br><br>submitted by: sherm<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 69);
      map.addOverlay(marker);
      aLocations[69] = new Array(marker, "Red line", InfoHTML, point);
	
      point = new GLatLng(41.94472880702578, -87.63685584068298);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(70)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Rigging on sailboats</div><div class=\"IWContent\">The sound of the standing rigging on sailboats at Belmont Harbor in the<br />wind &nbsp;&nbsp;&nbsp; It\'s rhythmic and yet not musical. Noise but not abrasive. <br><br>submitted by:&nbsp; Barb Iverson </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 70);
      map.addOverlay(marker);
      aLocations[70] = new Array(marker, "Rigging on sailboats", InfoHTML, point);
	
      point = new GLatLng(41.877633, -87.647283);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(71)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Saganaki</div><div class=\"IWContent\">Saganaki (\"Flaming Cheese\") at the Parthenon (restaurant) in Greektown (Halsted St.). A waiter brings out a sizzling plate (or plates), dumps brandy on it at<br />your table, lights the cheese on fire, and finishes with a resounding<br />\"Oopah!\" - other patrons usually join in; the sizzle is great. Oh ya,<br />It tastes really good, too.<br><br>submitted by: Jon Cernak</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 71);
      map.addOverlay(marker);
      aLocations[71] = new Array(marker, "Saganaki", InfoHTML, point);
	
      point = new GLatLng(41.86761138319021, -87.6139497756958);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(72)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Shedd Aquarium</div><div class=\"IWContent\">The shedd aquarium.&nbsp; The splashing of the dolphins when they return to the water; it\'s peaceful. <br>submitted by: anonymous<br><br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 72);
      map.addOverlay(marker);
      aLocations[72] = new Array(marker, "Shedd Aquarium", InfoHTML, point);
	
      point = new GLatLng(41.89641, -87.647739);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(73)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Silence</div><div class=\"IWContent\">Its full of \"noise\" that otherwise is unheard.<br>where? Halsted and Chicago Ave.<br><br>submitted by: Victor Chaga</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 73);
      map.addOverlay(marker);
      aLocations[73] = new Array(marker, "Silence", InfoHTML, point);
	
      point = new GLatLng(41.88321, -87.633849);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(74)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Sing-songy calls of streetwise vendors</div><div class=\"IWContent\">Each vendor has developed a unique, often musical call. <br>Where: All over the loop.  My favorite vendors are on the corner of Washington and Wells and also Wells and Madison.<br><br>submitted by: Amy Clark</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 74);
      map.addOverlay(marker);
      aLocations[74] = new Array(marker, "Sing-songy calls of streetwise vendors", InfoHTML, point);
	
      point = new GLatLng(41.94021, -87.638749);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(75)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Singing bus driver</div><div class=\"IWContent\">on #146 (\"Happy Bus\")<br><br>submitted by: Heidi Jo Fuhst </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 75);
      map.addOverlay(marker);
      aLocations[75] = new Array(marker, "Singing bus driver", InfoHTML, point);
	
      point = new GLatLng(41.79505, -87.596539);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(76)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Sirens</div><div class=\"IWContent\">My favorite Chicago sound is the sound of sirens as firetrucks, police<br />cars, and ambulances zip through the streets. The piercing sound wakes<br />me up, and shakes me out of my complacency. I often hear it on 55th<br />Street...especially around 55th and Woodlawn.<br><br>submitted by: Sara Kaiser</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 76);
      map.addOverlay(marker);
      aLocations[76] = new Array(marker, "Sirens", InfoHTML, point);
	
      point = new GLatLng(41.90842543499876, -87.70302057266235);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(77)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Soccer in the park</div><div class=\"IWContent\">Listening to the calls people make playing soccer in the park. Many languages and call and response, rhythmic. <br><br>submitted by: Elise Zeledrowski </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 77);
      map.addOverlay(marker);
      aLocations[77] = new Array(marker, "Soccer in the park", InfoHTML, point);
	
      point = new GLatLng(41.83705, -87.651119);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(78)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Southsider saying, &quot;That f---ing jag off.&quot;</div><div class=\"IWContent\">Where? 31st and Morgan <br><br>submitted by: anonymous</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 78);
      map.addOverlay(marker);
      aLocations[78] = new Array(marker, "Southsider saying, &quot;That f---ing jag off.&quot;", InfoHTML, point);
	
      point = new GLatLng(41.884802, -87.6281);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(79)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Speakers</div><div class=\"IWContent\">my speakers in my room. they pick up signals from other radio frequencies and police stations, etc.<br><br>submitted by: Shawn Webb</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 79);
      map.addOverlay(marker);
      aLocations[79] = new Array(marker, "Speakers", InfoHTML, point);
	
      point = new GLatLng(41.883109416638355, -87.62922763824463);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(80)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Street musicians on subway platform</div><div class=\"IWContent\">There is something romantically urban about someone who may possess no<br>job, just a violin, sax or a singing voice, thinking that they should<br>throw a hat down on the ground and perform for the pleasure of others.<br>When the train comes, its like the big, busy world is overpowering<br>them, taking them from their self-proclaimed stage.<br><br>Submitted by Carl G.</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 80);
      map.addOverlay(marker);
      aLocations[80] = new Array(marker, "Street musicians on subway platform", InfoHTML, point);
	
      point = new GLatLng(41.917355, -87.697744);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(81)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Tastee Freeze</div><div class=\"IWContent\">hearing \"Tears of a Clown\" playing from the Tastee Freeze on Armitage<br />just west of California - first of all because it\'s nice to hear that<br />song. and because the Tastee Freeze is such a neighborhood institution<br />and i like the fact that they assert their place aurally as well as<br />visually/physically. <br><br>submitted by: Katherine Young</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 81);
      map.addOverlay(marker);
      aLocations[81] = new Array(marker, "Tastee Freeze", InfoHTML, point);
	
	  
	  point = new GLatLng(41.923737951221014, -87.81646728515625);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(92)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">test window</div><div class=\"IWContent\">I like the sound of all the Chicago natives as they walk and talk<br>through the terminals of O\'Hare.&nbsp; Those first few voices you over-hear<br>on your way to the baggage claim remind you that these are your<br>people�you\'re finally home.<br>submitted by: James<br> <embed flashvars=\"playerMode=embedded\" wmode=\"window\" bgcolor=\"#ffffff\" quality=\"best\" allowscriptaccess=\"never\" src=\"http://www.google.com/reader/ui/3247397568-audio-player.swf?audioUrl=http://www.favoritechicagosounds.com/sounds/lakestation_01.mp3\" type=\"application/x-shockwave-flash\" height=\"27\" width=\"400\"></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 92);
      map.addOverlay(marker);
      aLocations[92] = new Array(marker, "test window", InfoHTML, point);
	
	
	
      point = new GLatLng(41.867561, -87.613998);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(82)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">The Shedd Aquarium</div><div class=\"IWContent\">The splashing of the dolphins when they return to the water; it\'s peaceful.<br><br>submitted by: anonymous<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 82);
      map.addOverlay(marker);
      aLocations[82] = new Array(marker, "The Shedd Aquarium", InfoHTML, point);
	
      point = new GLatLng(41.89117649284329, -87.64793872833252);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(83)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">This is &quot;Grand&quot;</div><div class=\"IWContent\">\"This is grand\" should probably be the winner for best chicago sound ever.<br>i remember the first time i consciously heard it. i was in a really good mood at the time, and i thought to myself \"ah, i live in chicago. i\'m in love. i\'m in school for a career i really like. this city is beautiful, and it really is fucking grand.\" <br>submitted by: Bill<br><br>The el at the blue line stop, Grand.&nbsp; The recording says, \"This is Grand\" in a strange ironic tone, right after the white noise of the train.<br>submitted by: Seth Hunter<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 83);
      map.addOverlay(marker);
      aLocations[83] = new Array(marker, "This is &quot;Grand&quot;", InfoHTML, point);
	
      point = new GLatLng(41.89955, -87.677149);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(84)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Thunder in the Ukrainian Village</div><div class=\"IWContent\">The sound of the long, deep rolling thunder on hot late summer nights.<br />From the Ukrainian Village area (near Damen and Augusta) I can see long<br />stretches of lightning against the clouds, and then the low rumbling<br />seems to last for minutes on end.<br><br>submitted by: Rik Garrett</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 84);
      map.addOverlay(marker);
      aLocations[84] = new Array(marker, "Thunder in the Ukrainian Village", InfoHTML, point);
	
      point = new GLatLng(41.879938217694615, -87.6379930973053);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(85)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Toot of a Wendella tour boat</div><div class=\"IWContent\">Along the river, I recently returned home and took my wife aboard. <br><br>submitted by: anonymous</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 85);
      map.addOverlay(marker);
      aLocations[85] = new Array(marker, "Toot of a Wendella tour boat", InfoHTML, point);
	
      point = new GLatLng(41.713895, -87.610679);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(86)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Tornado/curfew siren</div><div class=\"IWContent\">The tornado/curfew siren while watching the 10:00 news on a summer night. Always felt good as a kid to make it home before the siren went off at 10:30.  Reminds me of being young.<br><br>submitted by: anonymous<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 86);
      map.addOverlay(marker);
      aLocations[86] = new Array(marker, "Tornado/curfew siren", InfoHTML, point);
	
      point = new GLatLng(41.88322, -87.627879);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(87)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Transferring at Washington red line stop</div><div class=\"IWContent\">My favorite Chicago sound is when everyone transfering to the red line<br />to the blue line, drags their suitcases along the tile, making a<br />click-clack noise. I like this sound because everyone is in a hurry to<br />catch their flight, so the clicking is very uniform and loud.<br><br>submitted by: Allison Williams</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 87);
      map.addOverlay(marker);
      aLocations[87] = new Array(marker, "Transferring at Washington red line stop", InfoHTML, point);
	
      point = new GLatLng(41.88572933129311, -87.62802600860596);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(88)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Turnstiles at Lake St. &quot;El&quot; Station</div><div class=\"IWContent\">El stations, particularly the sound of people filing in and out of the turnstiles.<br>submitted by: Teresa Gale</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 88);
      map.addOverlay(marker);
      aLocations[88] = new Array(marker, "Turnstiles at Lake St. &quot;El&quot; Station", InfoHTML, point);
	
      point = new GLatLng(41.87564, -87.626029);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(89)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Two El trains passing</div><div class=\"IWContent\">above S. Wabash &amp; Congress. The first sound I hear from my hotel on the first day I moved to Chicago. <br><br>submitted by: Jamie Kenyon</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 89);
      map.addOverlay(marker);
      aLocations[89] = new Array(marker, "Two El trains passing", InfoHTML, point);
	
      point = new GLatLng(41.88446, -87.626229);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(90)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Under the el steps at Randolph and Wabash</div><div class=\"IWContent\">The clomping of people coming down the el steps after the train leaves the station.<br><br>submitted by: anonymous<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 90);
      map.addOverlay(marker);
      aLocations[90] = new Array(marker, "Under the el steps at Randolph and Wabash", InfoHTML, point);
	
      point = new GLatLng(41.87918733142492, -87.63887286186218);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(91)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Union Station track announcements</div><div class=\"IWContent\">The track announcements for the blind in Union Station... ideally when no-one\'s around. \"Track number nine. Track number eleven. Track number thirteen.\" These beat the el announcements in my book because the lady has an actual Chicago accent. If you walk from one end of the platform to another, past each track, you can sort of hear the other track announcements echoing through the station. Sort of the working man\'s psychedelia.<br>submitted by: Tracy Seneca<br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 91);
      map.addOverlay(marker);
      aLocations[91] = new Array(marker, "Union Station track announcements", InfoHTML, point);
	
      point = new GLatLng(41.960284, -87.636715);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(92)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Water lapping up against the boats</div><div class=\"IWContent\">My absolute favorite Chicago sound is the sound of water lapping up<br />against the boats in any one of our harbors. I can listen to that and<br />all the other sounds the immobile boats make for hours on end. I find<br />it to be the most relaxing, totally free activities one can partake in<br />in Chicago, in public. Where? Let\'s say, Monroe Harbor.<br><br>submitted by: Sarah Derer</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 92);
      map.addOverlay(marker);
      aLocations[92] = new Array(marker, "Water lapping up against the boats", InfoHTML, point);
	
      point = new GLatLng(41.78225702950966, -87.57315874099731);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(93)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Waves</div><div class=\"IWContent\">The roar of waves; the waves lapping; rain on my roof. <br>Where? Around the point; 63rd Street Beach &nbsp;&nbsp;&nbsp; <br><br>submitted by: Stephen Carter, Sr. </div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 93);
      map.addOverlay(marker);
      aLocations[93] = new Array(marker, "Waves", InfoHTML, point);
	
      point = new GLatLng(41.93018758809961, -87.64351844787598);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(94)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Weiner Circle</div><div class=\"IWContent\">People getting taunted at the Weiner Circle on N. Clark.<br><br>Submitted by Kelli Griffis</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 94);
      map.addOverlay(marker);
      aLocations[94] = new Array(marker, "Weiner Circle", InfoHTML, point);
	
      point = new GLatLng(41.96244194708117, -87.68527507781982);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(95)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Welles Park</div><div class=\"IWContent\">The Old Town Folk &amp; Roots Festival<br>The sound of Welles Park little league on Saturday mornings <br>submitted by: amy<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 95);
      map.addOverlay(marker);
      aLocations[95] = new Array(marker, "Welles Park", InfoHTML, point);
	
      point = new GLatLng(41.98161, -87.672209);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(96)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Whistle from the UPRR Metra trains</div><div class=\"IWContent\">reminds me of growing up near the Burlington Northern line in Downers Grove<br>where? Catalpa/Paulina<br><br>submitted by: anonymous<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 96);
      map.addOverlay(marker);
      aLocations[96] = new Array(marker, "Whistle from the UPRR Metra trains", InfoHTML, point);
	
      point = new GLatLng(41.882717, -87.624015);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(97)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wildflower Garden</div><div class=\"IWContent\">The wildflower garden in Mil Park in Spring. Takes me out of the city, rise of new life.<br><br>submitted by: Julia Miller</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 97);
      map.addOverlay(marker);
      aLocations[97] = new Array(marker, "Wildflower Garden", InfoHTML, point);
	
      point = new GLatLng(41.86745, -87.624129);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(98)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wind going through the buildings</div><div class=\"IWContent\">It\'s calming and frightening at the same time.<br>Where? Michigan and Roosevelt <br><br>submitted by: Robert Mertens <br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 98);
      map.addOverlay(marker);
      aLocations[98] = new Array(marker, "Wind going through the buildings", InfoHTML, point);
	
      point = new GLatLng(42.00554, -87.660909);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(99)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wind in the early morning at the beach</div><div class=\"IWContent\">It becomes so loud that it borders on painful, though it\'s not intrusive.<br>where? Pratt and Sheridan Road<br><br>submitted by: Mojdeh Stoakley</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 99);
      map.addOverlay(marker);
      aLocations[99] = new Array(marker, "Wind in the early morning at the beach", InfoHTML, point);
	
      point = new GLatLng(41.87681, -87.636609);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(100)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wind near Union Station</div><div class=\"IWContent\">the sound of the wind.	its calming. <br>where? street right near union station i believe vanburen and wacker<br><br>submitted by: jessica drogosz</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_blue.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 100);
      map.addOverlay(marker);
      aLocations[100] = new Array(marker, "Wind near Union Station", InfoHTML, point);
	
      point = new GLatLng(41.919943, -87.63145);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(101)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wolves howling at Lincoln Park Zoo</div><div class=\"IWContent\"><span lkgal=\"undefined\" jstcache=\"44\" jsvalues=\"$title:m.title;$laddr:m.laddr;$addrurl:m.addressUrl;lkgal:m.lkgaddresslines;$features:features;$lkgal:m.lkgaddresslines\"><span jsinstance=\"0\" jstcache=\"50\" jsselect=\"m.addressLines\" jsvalues=\"$addrline:$this;\"><span jstcache=\"57\" jsdisplay=\"$title||!$laddr||!$addrurl\" jsvalues=\".innerHTML:$addrline\"><span jstcache=\"0\" class=\"street-address\">I adore the sound of the wolves howling on a full moon when you walk past the Lincoln Park Zoo late at night. A friend has an apartment across the street and she has people over to sit on her porch and listen. When the city and the wild meet that is some good stuff.<br>submitted by: Lucy<br><br></span></span></span><span jsinstance=\"*1\" jstcache=\"50\" jsselect=\"m.addressLines\" jsvalues=\"$addrline:$this;\"><span jstcache=\"57\" jsdisplay=\"$title||!$laddr||!$addrurl\" jsvalues=\".innerHTML:$addrline\"><span jstcache=\"0\" class=\"postal-code\"></span></span><a jstcache=\"58\" jsvalues=\"href:$addrurl\" jsdisplay=\"$features.embed&amp;&amp;!$title&amp;&amp;$laddr&amp;&amp;$addrurl\" href=\"http://maps.google.com/\" target=\"_parent\" style=\"text-decoration: underline; display: none;\"><span jstcache=\"66\" jsvalues=\".innerHTML:$addrline\"></span></a></span></span></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 101);
      map.addOverlay(marker);
      aLocations[101] = new Array(marker, "Wolves howling at Lincoln Park Zoo", InfoHTML, point);
	
      point = new GLatLng(41.94750977658429, -87.6562911272049);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(102)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wrigley Field</div><div class=\"IWContent\">The crowd singing \"Take Me Out To The Ballgame\" at Wrigley Field during the Seventh Inning Stretch. Wrigley is the best ballpark in the country, and nobody sings that song the way that Cubs fans do.<br>submitted by: a.c. marshall<br><br>biking past wrigley field during a ballgame <br>submitted by: hench<br><br>2 beer vendors at the Cell, the guy with the really deep voice and the guy who proclaims, \'Beer is your buddy - who needs a friend\' <br>submited by: amy<br><br>Used to live on Roscoe, with a top floor back deck facing Wrigley,<br />about four blocks away. (And I loved the sound of the screen door<br />leading to the back deck, by the way.) On a still night, or with the<br />wind right, I would sit on the deck and listen to WGN radio, then turn<br />down the volume on a good play or home run and listen to the crowd.<br />Then then next night, my wife and I would walk down the street, buy a<br />couple tickets, and sit and drink in Wrigley on another perfect summer<br />night. Love my life elsewhere, but man I miss Chicago.<br>submitted by: Rob<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 102);
      map.addOverlay(marker);
      aLocations[102] = new Array(marker, "Wrigley Field", InfoHTML, point);
	
      point = new GLatLng(41.94349987508838, -87.65710115432739);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(103)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wrigley Field</div><div class=\"IWContent\">Used to live on Roscoe, with a top floor back deck facing Wrigley, about four blocks away. (And I loved the sound of the screen door leading to the back deck, by the way.) On a still night, or with the wind right, I would sit on the deck and listen to WGN radio, then turn down the volume on a good play or home run and listen to the crowd. Then then next night, my wife and I would walk down the street, buy a couple tickets, and sit and drink in Wrigley on another perfect summer night. Love my life elsewhere, but man I miss Chicago.<br>submitted by: Rob<br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 103);
      map.addOverlay(marker);
      aLocations[103] = new Array(marker, "Wrigley Field", InfoHTML, point);
      // And finnaly create sidebar
      createSideBar();
    }

    //]]>
    </script>

</head>

<!--<body onload="onLoad()" onunload="GUnload();">-->
	


<body bgcolor="#FFFFFF" text="000000" link="#0000FF" vlink="2d3f6f" alink="#0000FF" leftmargin="3" topmargin="3" marginwidth="3" marginheight="3" class="bodycopy" onload="onLoad()" onunload="GUnload();" onLoad="MM_preloadImages('images/topmenu_02-down.gif','images/topmenu_02-over.gif','images/topmenu_03-over.gif','images/topmenu_04-down.gif','images/topmenu_04-over.gif','images/topmenu_05-down.gif','images/topmenu_05-over.gif','images/topmenu_06-down.gif','images/topmenu_06-over.gif','images/topmenu_07-down.gif','images/topmenu_07-over.gif','images/topmenu_03.gif')">
<div align="center">
<table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td> 
        <!-- ImageReady Slices (topmenu3.psd) -->
        <div align="center"> 
          <table id="Table_01" width="531"  border="0" cellpadding="0" cellspacing="0">
            <tr> 
              <td valign="top"> <a href="index.php"><img src="images/topmenu_01.gif" alt="" width="531" border="0" align="top"></a></td>
            </tr>
            <tr> 
              <td valign="top"> 
                <table border="0" cellpadding="0" cellspacing="0">
                  <tr> 
                                       <td><a href="catalog.php" target="_top" onClick="MM_nbGroup('down','group1','catalog','images/topmenu_02-down.gif',1)" onMouseOver="MM_nbGroup('over','catalog','images/topmenu_02-over.gif','images/topmenu_02-over.gif',1)" onMouseOut="MM_nbGroup('out')"><img src="images/topmenu_02.gif" alt="Catalog" name="catalog" width="78" height="15" border="0" onload=""></a></td>
                   <td><a href="aboutus.php" target="_top" onClick="MM_nbGroup('down','group1','aboutus','images/topmenu_aboutus-down.gif',1)" onMouseOver="MM_nbGroup('over','aboutus','images/topmenu_aboutus-over.gif','images/topmenu_aboutus-over.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="aboutus" src="images/topmenu_aboutus.gif" alt="About Us" border="0" onload="MM_nbGroup('init','group1','aboutus','images/topmenu_aboutus.gif',1)"></a></td>
                    <td><a href="javascript:void(0);" onclick="javascript:openJukebox('jukebox.php','all');" target="_top" onClick="MM_nbGroup('down','group1','jukebox','images/topmenu_04-down.gif',1)" onMouseOver="MM_nbGroup('over','jukebox','images/topmenu_04-over.gif','images/topmenu_04-over.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="jukebox" src="images/topmenu_04.gif" border="0" alt="Jukebox"></a></td>
                    <td><a href="soundmaps.php" target="_top" onClick="MM_nbGroup('down','group1','soundmaps','images/topmenu_05-down.gif',1)" onMouseOver="MM_nbGroup('over','soundmaps','images/topmenu_05-over.gif','images/topmenu_04-over.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="soundmaps" src="images/topmenu_05-down.gif" border="0" alt="Sound Maps"></a></td>

                    <td><a href="participate.php" target="_top" onClick="MM_nbGroup('down','group1','participate','images/topmenu_06-down.gif',1)" onMouseOver="MM_nbGroup('over','participate','images/topmenu_06-over.gif','images/topmenu_06-over.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="participate" src="images/topmenu_06.gif" border="0" alt="Participate"></a></td>
                    <td><a href="press.php" target="_top" onClick="MM_nbGroup('down','group1','press','images/topmenu_07-down.gif',1)" onMouseOver="MM_nbGroup('over','press','images/topmenu_07-over.gif','images/topmenu_07-over.gif',1)" onMouseOut="MM_nbGroup('out')"><img name="press" src="images/topmenu_07.gif" border="0" alt="Press"></a></td>
			
                  </tr>
                </table>
                
              </td>
            </tr>
          </table>
          <!-- End ImageReady Slices -->
        </div></td>
    </tr>
  </table>
</div>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td align="left" class="bodycopy"><br>        
        <img src="images/horzline_wide.gif" width="700" height="1"><br>
        <br>
        Check out our  sound map!  Click on the tags to listen and read about the sounds.  Green tags have links to corresponding MP3 recordings.  (Note: if you're using the Firefox browser, you can play the MP3s in an embedded audio player. Otherwise, they'll play via QuickTime in a new browser tab or window.) <br>
		<br>Sites are updated continuously, so keep coming back for more updates!<br>   </td>
    </tr>
</table>
<!--map starts here-->
<div id="MapBuilder" class="MapBuilder">
        <p>&nbsp;</p>
        <br>
 
      <div id="MapHolder" class="MapHolder" style="float:left;">
        <div id="MapBuilderMap" style="width: 600px; height: 500px;"></div>
        <!-- Please KEEP RESPECT to MapBuilder.net team and DO NOT DELETE line below if you want to keep MapBuilder service free. -->
        Created by <a href="http://www.MapBuilder.net">MapBuilder.net</a>.
      </div>
 
      <div id="MapBuilderSideBar" class="MapBuilderSideBar">
        <div id="SideBarAction">Map Locations [<a id="SideBarActionLink" href="javascript:void(0)" onclick="ProcessLocationList()">-</a>]</div>
        <div id="LocationList" style="height: 480px; overflow:auto;"></div>
      </div>
 
</div>
<!--map ends here-->

 <!-- map in fixed width table starts here 
<div align="center"> 
  <table width="780" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td align="center" valign="bottom" class="bodycopy"> </td>
    </tr>
    <tr> 
      <td align="center" class="bodycopy"><br>        
        <img src="images/horzline_wide.gif" width="700" height="1">
      
       <!-- <a href="participate.html"><strong>Help  reveal the Chicago of the <em>ear</em>.  Share your <em></em>  favorite sounds!</strong></a> </td>
    </tr>
    <tr>
      <td class="bodycopy"><div id="MapBuilder" class="MapBuilder">
        <p>Check out our sound map!  It's a work in progress.  Sites are updated continuously, so keep checking back for more updates!</p><br>
 
      <div id="MapHolder" class="MapHolder" style="float:left;">
        <div id="MapBuilderMap" style="width: 600px; height: 500px;"></div>
        <!-- Please KEEP RESPECT to MapBuilder.net team and DO NOT DELETE line below if you want to keep MapBuilder service free.
        Created by <a href="http://www.MapBuilder.net">MapBuilder.net</a>.
      </div>
 
      <div id="MapBuilderSideBar" class="MapBuilderSideBar">
        <div id="SideBarAction">Map Locations [<a id="SideBarActionLink" href="javascript:void(0)" onclick="ProcessLocationList()">-</a>]</div>
        <div id="LocationList" style="height: 480px; overflow:auto;"></div>
      </div>
 
    </div></td>
    </tr>
  </table> -->

	
<img src="images/horzline_wide.gif" width="700" height="1">

</div>
<p align="center" class="smallertext">
	<a href="mailto:teresa@favoritechicagosounds.com">Contact Us</a> - Copyright 2008 - This site is licensed under a Creative Commons Attribution-NonCommercial-NoDerivs 3.0 License<br>
</p>

</body>
</html>
