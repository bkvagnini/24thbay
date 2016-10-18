<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- InstanceBegin template="/Templates/menus.dwt" codeOutsideHTMLIsLocked="false" --><head>
<!-- InstanceBeginEditable name="doctitle" -->
  <title>Music=Life!</title>
<!-- InstanceEndEditable -->
  <meta http-equiv="content-type"
 content="text/html; charset=iso-8859-1">
  <link rel="stylesheet" type="text/css" href="tabs.css">
<!-- InstanceBeginEditable name="head" -->
  <meta http-equiv="Refresh" content="1200">
<!-- InstanceEndEditable -->
</head>
<body id="body">
<div id="header">
<!-- InstanceBeginEditable name="flashmovie" -->
<p> <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0"
 height="60" width="468"> <param name="movie" value="images/GMIAd.swf"><param
 name="quality" value="high">
<embed src="images/GMIAd.swf" quality="high"
 pluginspage="http://www.macromedia.com/go/getflashplayer"
 type="application/x-shockwave-flash" height="60" width="468"></object></p>
<!-- InstanceEndEditable --> </div>
<ul id="tabnav">
  <li class="music"><a href="music.htm">Music</a></li>
  <li class="writing"><a href="writing.htm">Writing</a></li>
  <li class="graphic"><a href="clients.htm">Clients</a></li>
  <li class="video"><a href="videos.htm">Video</a></li>
  <li class="about"><a href="aboutus.htm">About Us</a></li>
  <li class="shop"><a href="storefront/index.php">Merchandise</a></li>
  <li class="junkdrawer"><a href="junkdrawer.htm">Junk Drawer</a></li>
  <li class="homepage"><a href="index.php">Home</a></li>
<!--
  <li class="test1"><a href="test1.htm">Test1</a></li>
  <li class="test2"><a href="test2.htm">Test2</a></li>
  -->
</ul>
<!-- InstanceBeginEditable name="maincontent" -->
<div id="intro">

<?php 
// include("header.php");

if ($_SERVER['REQUEST_METHOD'] != 'POST'){
?>
<h1 class="header" style="width:100%; text-align:center;">Pick your Poison</h1>
<form method="post">
    <p> Please select one of the following<br />
      <select name="select">
        <option>All Material</option>
        <option>Newest Material</option>
        <option>Finished Material</option>
        <option>Certain Criteria</option>
      </select>
    </p>
      <input type="submit" value="Submit" />
      <input type="reset" />
    </p>
  </form>
<?php
} else {
	$selected = $_POST["selected"]

	$filename = "songList.xml";
	$file = fopen($filename, "a+");
	$writeresult = fwrite($file,$selected);
	/* if ($writeresult){
		echo "<h1 class=\"header\" style=\"width:100%;text-align:center;\">Registration Recorded</h1>
		<p>Thank you, <strong>$firstname $lastname</strong>, for your registration.</p>
		<p>Click here to <a href=\"clientdb.txt\">View Customer Data file</a>. You may also examine the contents below.</p>";
	} else {
		echo "Woops! Something went wrong";
	}
	*/
} 
include("footer.php");
?>
<p align="center"> <object
 classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"
 title="MP3 PLayer" align="middle" height="200" width="300"> <param
 name="movie" value="mp3.swf"> <param name="quality" value="high">
<embed src="mp3.swf" quality="high"
 pluginspage="http://www.macromedia.com/go/getflashplayer"
 type="application/x-shockwave-flash" align="middle" height="200"
 width="300"> </object> </p>
<br>
<p align="center">
<a href="http://spreadsheets.google.com/viewform?formkey=dHB0a2J3cXFIVTdrTmRfSFBvSm5KWFE6MA"target="_blank">5 short survey questions about the music you heard</a></p>
<h1 align="center"><a href="BKVMusicResume.pdf" target="_blank">My Music
Resume</a></h1>
<hr>
<h2 align="center"><strong>Commercials, Film Etc.</strong></h2>
<hr>
<p><font size="6"><b>I </b></font>have been interested in creating
music for film and radio for some time. Here is some of the commercial
work that I've done.</p>
<p>&nbsp;</p>
<p>The Dinner party- This was a commercial written by my
ex-fianc&eacute; (Andrea) for the TV Production class to produce . She
knew the producer of the commercial and suggested my music for it.</p>
<p>Caribbean Giveaway- This was a 50 second piece for a vacation
giveaway that was used in a Flash movie on our clients website. <a
 href="/carribean.htm">Click here to view the Flash Movie...</a></p>
<p>Legends-This was for a radio spot that a fellow student wrote for an
advertising class. I recorded her voiceover and created the background
music for this fictitious "gentlemen's" club.<br>
</p>
<p align="center">&nbsp;</p>
<p align="center"><img src="../images/rotatepics/rotate.php">&nbsp;</p>
<p align="center"><em>Page auto-refreshes every 20 minutes to change the
picture. </em></p>
<p>Check out new music at <a href="http://www.myspace.com/bassicallyspeaking" target="_blank">http://www.myspace.com/bassicallyspeaking </a><br />
  Also check out my Garage Band Profile at <a href="http://www.garageband.com/artist/BrianVagnini" target="_blank">http://www.garageband.com/artist/BrianVagnini</a><br />
  <br>
  <!--<p><font size="6">T</font><font size="3">here will be a new song on
this site every so often,&nbsp; boys and girls, so check back often. As
I compile my new CD, I will put a section of the songs on here, with
the full versions available for sale on this site. Please <a
 href="mailto:brian@greymatterideas.com">email me</a> with your
thoughts on the material presented here; this will help me in deciding
what goes on the new CD.</font></p> -->
</p>
<hr><br>
<p><b><i>Coming soon to a club near you .....</i>my solo show...</b>for
a list of working songs PLUS originals, click <a href="soloshow.htm">here</a>
</p>
<h4 align="center">Here's some of the <a href="musicgear.htm">gear</a>
that made this all possible...</h4>
<h1 align="center"> <a href="bands.htm">Bands I like...</a></h1>
<p>Since I play so many instruments and since singing isn't really my
thing, I normally don't pay attention to lyrics. However, there are
certain lyrics that just stand out. The following are those <a
 href="otherlyrics.htm">lyrics...</a></p>
<p>&nbsp;</p>
<p><strong>Click here to read <a href="courtney.htm">Courtney Love's
Manifesto</a> on Napster, Metallica, the Recording Industry Association
of America and File sharing programs!!</strong></p>
<div id="delic">
 
  <!-- Delicious Acct integration that is filtered by the tag "gmimusic"  -->
<script type="text/javascript" src="http://feeds.delicious.com/v2/js/bkvagnini/gmimusic?title=My%20Delicious%20Bookmarks&amp;icon=m&amp;count=5&amp;sort=date&amp;tags&amp;extended&amp;name&amp;showadd"></script>
  
</div>
<hr>
<p align="center">Send mail to <a
 href="mailto:brian@greymatterideas.com">brian@greymatterideas.com</a>
with questions or comments about this web site.<br>
Copyright &copy; 2008 Brian K. Vagnini</p>
<hr>
<p align="center"><font size="4">Platform:</font> </p>
<h5 align="center"><a href="http://www.apache.org"><img
 src="images/apache_pb.gif" border="0" height="47" width="102"></a>&nbsp;
<a href="http://www.linux.org"><img src="images/linuxpower2.gif"
 border="0" height="44" width="110"></a>&nbsp;&nbsp; <a
 href="http://www.redhat.com"><img src="images/redhatlogo.gif"
 border="0" height="42" width="45"></a> </h5>
</div>
<!-- InstanceEndEditable --><!-- InstanceEnd -->
</body>
</html>
