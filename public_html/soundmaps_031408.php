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
      .IW { width: 350px;}
      .IWContent {height: 120px; overflow:auto;}
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
      map.setCenter(new GLatLng(41.87876395548937, -87.60910034179688), 10, map.getMapTypes()[0]);
      	  
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
	
      point = new GLatLng(41.952724266230994, -87.72894144058228);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(0)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Blue Line at Irving Park</div><div class=\"IWContent\">the traffic noise whoosh of the kennedy from the irving park blue line stop. <br>submitted by: hench<br><br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 0);
      map.addOverlay(marker);
      aLocations[0] = new Array(marker, "Blue Line at Irving Park", InfoHTML, point);
	
      point = new GLatLng(41.971392391098526, -87.76333808898926);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(1)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Blue Line at Jefferson Park</div><div class=\"IWContent\">The sound of the trains on the Blue Line between Jefferson Park and Harlem, where they go as fast as (if not faster than) traffic on the Kennedy. <br>submitted by: tony<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 1);
      map.addOverlay(marker);
      aLocations[1] = new Array(marker, "Blue Line at Jefferson Park", InfoHTML, point);
	
      point = new GLatLng(41.72072119663713, -87.5430965423584);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(2)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Calumet's industrial corridor</div><div class=\"IWContent\">The industry of Calumet\'s industrial corridor. It\'s like seeing Sandburg\'s Chicago in its heyday. In this recording a massive crane raises coal into piles while on the other side of the river loaders move rock in an industrial zone. All this while cars whiz past and sirens howl. Eventually announced by a clanging bell the bridge starts ascending with the screech of metal for another coal barge to go up and my friend and I have to split.<br>submitted by: Joshua Manchester<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 2);
      map.addOverlay(marker);
      aLocations[2] = new Array(marker, "Calumet's industrial corridor", InfoHTML, point);
	
      point = new GLatLng(41.88386, -87.631631);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(3)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">City Hall - debate over NFC tropy</div><div class=\"IWContent\">The voices of the Chicagoans debating the merits of the George Halas/NFC Trophy on display at City Hall. The ambient sound is rich there. The \"dings\" of the elevators as they move non-stop. The very specific Chicago accent. The natural echo that are present in the halls of City Hall. The tiny plastic wind as the disposable cameras are advanced.<br>submitted by: Liz Bustamante<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 3);
      map.addOverlay(marker);
      aLocations[3] = new Array(marker, "City Hall - debate over NFC tropy", InfoHTML, point);
	
      point = new GLatLng(41.88322, -87.627879);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(4)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Evangelist at State and Washington</div><div class=\"IWContent\">You know what sound I don\'t like? I mean, this makes my ears throw-up......the preacher guy with the microphone that stands at the corner of State and Washington, in front of Old Navy...&nbsp; \"there\'s no drugs in heaven....\"<br>submitted by: fluffy<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 4);
      map.addOverlay(marker);
      aLocations[4] = new Array(marker, "Evangelist at State and Washington", InfoHTML, point);
	
      point = new GLatLng(41.79963, -87.584039);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(5)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Hyde Park parakeets</div><div class=\"IWContent\">The sound of parakeets chirping as they fly around Hyde Park (esp. the park at 53rd St. and S. Hyde Park Blvd. as well as other parks in the neighborhood, and occasionally even the courtyard in my apartment building). It reminds me of my native India. Plus it is such a unique sound for this part of the world, and these parakeets are unique to just the Hyde Park neighborhood.<br>submitted by: Mona Oommen<br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 5);
      map.addOverlay(marker);
      aLocations[5] = new Array(marker, "Hyde Park parakeets", InfoHTML, point);
	
      point = new GLatLng(41.91313614145379, -87.62351989746094);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(6)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">North Avenue Beach</div><div class=\"IWContent\">Waves of Lake Michigan splashing on the shore. it\'s relaxing and a good contrast to the fast tempo of the city.<br>submitted by: Mark<br><br>The waves of Lake Michigan crashing into shore on a really windy day. It\'s almost surreal... sounds like an ocean but I know I\'m standing on shore of a lake. If I close my eyes I can imagine standing in a beach somewhere on the other side of world, then I open my eyes and see where I am, and realize I\'d almost rather be nowhere else than this amazing city! North Ave. Beach &nbsp;&nbsp;&nbsp; <br>submitted by: Kelly Stinson &nbsp;&nbsp;&nbsp; &nbsp;<br><br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 6);
      map.addOverlay(marker);
      aLocations[6] = new Array(marker, "North Avenue Beach", InfoHTML, point);
	
      point = new GLatLng(41.97786911170172, -87.9019546508789);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(7)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">O'Hare terminal</div><div class=\"IWContent\">I like the sound of all the Chicago natives as they walk and talk through the terminals of O\'Hare.&nbsp; Those first few voices you over-hear on your way to the baggage claim remind you that these are your people?you\'re finally home.<br>submitted by: James<br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 7);
      map.addOverlay(marker);
      aLocations[7] = new Array(marker, "O'Hare terminal", InfoHTML, point);
	
      point = new GLatLng(41.86761138319021, -87.6139497756958);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(8)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Shedd Aquarium</div><div class=\"IWContent\">The shedd aquarium.&nbsp; The splashing of the dolphins when they return to the water; it\'s peaceful. <br>submitted by: anonymous<br><br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 8);
      map.addOverlay(marker);
      aLocations[8] = new Array(marker, "Shedd Aquarium", InfoHTML, point);
	
      point = new GLatLng(41.89117649284329, -87.64793872833252);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(9)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">This is &quot;Grand&quot;</div><div class=\"IWContent\">\"This is grand\" should probably be the winner for best chicago sound ever. i remember the first time i consciously heard it. i was in a really good mood at the time, and i thought to myself \"ah, i live in chicago. i\'m in love. i\'m in school for a career i really like. this city is beautiful, and it really is fucking grand.\" <br>submitted by: Bill<br><br>The el at the blue line stop, Grand.&nbsp; The recording says, \"This is Grand\" in a strange ironic tone, right after the white noise of the train.<br>submitted by: Seth Hunter<br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 9);
      map.addOverlay(marker);
      aLocations[9] = new Array(marker, "This is &quot;Grand&quot;", InfoHTML, point);
	
      point = new GLatLng(41.88572933129311, -87.62802600860596);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(10)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Turnstiles at Lake St. &quot;El&quot; Station</div><div class=\"IWContent\">El stations, particularly the sound of people filing in and out of the turnstiles.<br>submitted by: Teresa Gale</div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 10);
      map.addOverlay(marker);
      aLocations[10] = new Array(marker, "Turnstiles at Lake St. &quot;El&quot; Station", InfoHTML, point);
	
      point = new GLatLng(41.87918733142492, -87.63887286186218);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(11)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Union Station track announcements</div><div class=\"IWContent\">The track announcements for the blind in Union Station... ideally when no-one\'s around. \"Track number nine. Track number eleven. Track number thirteen.\" These beat the el announcements in my book because the lady has an actual Chicago accent. If you walk from one end of the platform to another, past each track, you can sort of hear the other track announcements echoing through the station. Sort of the working man\'s psychedelia.<br>submitted by: Tracy Seneca<br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 11);
      map.addOverlay(marker);
      aLocations[11] = new Array(marker, "Union Station track announcements", InfoHTML, point);
	
      point = new GLatLng(41.919943, -87.63145);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(12)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wolves howling at Lincoln Park Zoo</div><div class=\"IWContent\"><span lkgal=\"undefined\" jstcache=\"44\" jsvalues=\"$title:m.title;$laddr:m.laddr;$addrurl:m.addressUrl;lkgal:m.lkgaddresslines;$features:features;$lkgal:m.lkgaddresslines\"><span jsinstance=\"0\" jstcache=\"50\" jsselect=\"m.addressLines\" jsvalues=\"$addrline:$this;\"><span jstcache=\"57\" jsdisplay=\"$title||!$laddr||!$addrurl\" jsvalues=\".innerHTML:$addrline\"><span jstcache=\"0\" class=\"street-address\">I adore the sound of the wolves howling on a full moon when you walk past the Lincoln Park Zoo late at night. A friend has an apartment across the street and she has people over to sit on her porch and listen. When the city and the wild meet that is some good stuff.<br>submitted by: Lucy<br><br></span></span></span><span jsinstance=\"*1\" jstcache=\"50\" jsselect=\"m.addressLines\" jsvalues=\"$addrline:$this;\"><span jstcache=\"57\" jsdisplay=\"$title||!$laddr||!$addrurl\" jsvalues=\".innerHTML:$addrline\"><span jstcache=\"0\" class=\"postal-code\"></span></span><a jstcache=\"58\" jsvalues=\"href:$addrurl\" jsdisplay=\"$features.embed&amp;&amp;!$title&amp;&amp;$laddr&amp;&amp;$addrurl\" href=\"http://maps.google.com/\" target=\"_parent\" style=\"text-decoration: underline; display: none;\"><span jstcache=\"66\" jsvalues=\".innerHTML:$addrline\"></span></a></span></span></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 12);
      map.addOverlay(marker);
      aLocations[12] = new Array(marker, "Wolves howling at Lincoln Park Zoo", InfoHTML, point);
	
      point = new GLatLng(41.94719, -87.656479);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(13)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wrigley Field - 7th Inning Stretch</div><div class=\"IWContent\">The crowd singing \"Take Me Out To The Ballgame\" at Wrigley Field during the Seventh Inning Stretch. Wrigley is the best ballpark in the country, and nobody sings that song the way that Cubs fans do.<br>submitted by: a.c. marshall<br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 13);
      map.addOverlay(marker);
      aLocations[13] = new Array(marker, "Wrigley Field - 7th Inning Stretch", InfoHTML, point);
	
      point = new GLatLng(41.94349987508838, -87.65710115432739);
      footerHtml = "<div class=\"IWFooter\"><div class=\"IWFooterZoom\"><a href=\"javascript:void(0)\" onclick=\"ZoomMapTo(14)\">Zoom To</a></div></div>";

      // Define Marker
      InfoHTML = "<div class=\"IW\"><div class=\"IWCaption\">Wrigley Field from Roscoe</div><div class=\"IWContent\">Used to live on Roscoe, with a top floor back deck facing Wrigley, about four blocks away. (And I loved the sound of the screen door leading to the back deck, by the way.) On a still night, or with the wind right, I would sit on the deck and listen to WGN radio, then turn down the volume on a good play or home run and listen to the crowd. Then then next night, my wife and I would walk down the street, buy a couple tickets, and sit and drink in Wrigley on another perfect summer night. Love my life elsewhere, but man I miss Chicago.<br>submitted by: Rob<br><br><br></div>" + footerHtml + "</div>";
      iconbig.image = "http://www.mapbuilder.net/img/icons/marker_34_green.png";
      marker = createMarker(point, InfoHTML, iconbig, options, 14);
      map.addOverlay(marker);
      aLocations[14] = new Array(marker, "Wrigley Field from Roscoe", InfoHTML, point);
      // And finnaly create sidebar
      createSideBar();
    }

    //]]>
    </script>
</head>

<body bgcolor="#FFFFFF" text="000000" link="#0000FF" vlink="2d3f6f" alink="#0000FF" leftmargin="3" topmargin="3" marginwidth="3" marginheight="3" class="bodycopy" onload="onLoad()" onunload="GUnload();" onLoad="MM_preloadImages('images/topmenu_02-down.gif','images/topmenu_02-over.gif','images/topmenu_03-over.gif','images/topmenu_04-down.gif','images/topmenu_04-over.gif','images/topmenu_05-down.gif','images/topmenu_05-over.gif','images/topmenu_06-down.gif','images/topmenu_06-over.gif','images/topmenu_07-down.gif','images/topmenu_07-over.gif','images/topmenu_03.gif')">
<div align="center">
  <table width="700" border="0" cellspacing="0" cellpadding="0">

    <tr> 
      <td> 
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
        </div>
	  </td>
    </tr>
  </table>
</div>


<!--<?php include 'include/header.php'; ?>-->
<div align="center"> 
  <!--<?php include 'include/participate.php'; ?>-->

<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td align="center" class="bodycopy"><br>        
        <img src="images/horzline_wide.gif" width="700" height="1"><br>
        <br>
        Check out our sound map!  It's a work in progress.  Sites are added continuously, so keep checking back for more updates!</td>
    </tr>
</table>
<!--map starts here-->
<div id="MapBuilder" class="MapBuilder">
        <p>&nbsp;</p>
         
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
<br>

  <img src="images/horzline_wide.gif" width="700" height="1">
</div>
<?php include 'include/footer.php'; ?>
</body>
</html>  