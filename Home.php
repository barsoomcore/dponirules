<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>DINO-PIRATES OF NINJA ISLAND!</title>
<style>
.HomeBox {
	border:1px solid black;
	padding-top:0.5em;
	padding-bottom:0.5em;
	margin-bottom:1em
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel=stylesheet media="screen" href="/dponiwiki/media/dponiwikiStyle.css" type="text/css">
<link rel=stylesheet media="only screen and (max-device-width: 480px)" href="/dponiwiki/media/dponiwikiiPhoneStyle.css" type="text/css">
<link rel="icon" type="image/png" href="/dponiwiki/media/images/favicon.png">
</head>
<body>
<?php 

	include ("Scripts/FeedHelper.php");	
	$barsoomFeedItems = getFeed(BARSOOMURL);
	$sfFeedItems = getFeed(SFURL);

?>
<div id="banner">
<a href="http://www.scratchfactory.com">
	<img src="/dponiwiki/media/images/SFTransparentLogo.png" style="padding-top:5px;float:right;"></a>
<img style="border: none; padding-left: 25px;" src="/dponiwiki/media/images/Banner.png" alt="Banner">
</div>
<div id="nav">
<ul>
	<li><strong><a href="Home.php">DPoNI Home</a></strong></li>
	<li><a href="Basics.php">The Rules</a></li>
	<li><a href="/dponiwiki/">The Setting</a></li>
</ul>
</div>
<div id="content">

<p style="font-size:70%"><em>Ninjas, pirates, and dinosaurs. A fantasy Asia, filled with warring island nations. Samurai mounted on domesticated raptors. Bigger dinosaurs hunted by quasi-Polynesian tribesmen. Dueling factions of shadow warriors. Privateers and buccaneers battling the servants of the Imperial Navy. Fallen kingdoms deep in forgotten jungles. And we call it...</em></p>

<h1>DINO-PIRATES OF NINJA ISLAND</h1>

<p>Welcome to the online home of <b>DINO-PIRATES OF NINJA ISLAND</b>! This site provides everything you need to begin playing this swashbuckling game of pulp adventure. You can browse <a href="Basics.php">the complete rules</a>, distributed under the Open Gaming License, and you can learn all about <a href="/dponiwiki/">this fantastic setting</a>, made available under a Creative Commons license so you can add to it yourself!</p>

<div class="HomeBox">
<img src="/dponiwiki/media/images/SmallSkull.png" style="float:left; margin:0em 0.5em 1em 0.5em;"><h3 style="margin-top:0em">Running a Game?</h3>

<p>If you're looking to run a game of DINO-PIRATES OF NINJA ISLAND, start by picking up the official introductory adventure, <b><a href="http://www.yourgamesnow.com/index.php?main_page=product_info&products_id=2551">SLAVE QUEEN OF THE RUINED CITY</a>, available for only $6.00!</b> Then go over the <a href="Basics.php">Basics</a> on this site and make sure you understand the rules.</p></div>

<div class="HomeBox">
<img src="/dponiwiki/media/images/SmallSkull.png" style="float:left; margin:0em 0.5em 1em 0.5em; clear:left"><h3 style="margin-top:0em">Playing a DPoNI Character?</h3>

<p>If you've been invited to play a game of DINO-PIRATES OF NINJA ISLAND, you'll want to review our <b><a href="CharGen.php">Character Creation Rules</a></b> so you can start adventuring in this fantastic world!</p></div>

<h2>Latest News:</h2>

<div class="news" style="font-size:80%">

<p>The latest update from <a href="http://www.scratchfactory.com">Scratch Factory's secret labs</a>:</p>

<?php
	echo "<h3> {$sfFeedItems[0 ]['title']} </h3>";
	echo "<h5>", formatDate($sfFeedItems[0 ]['date']), "</h5>";
	echo $sfFeedItems[0 ]['content'];
?>


</div>

<h3>Contact</h3>
<p>If you find any issues on this site that need fixing, just shoot me an <a href="mailto:corey@dino-pirates.com">email</a>. Likewise if you have any questions about the rules or the setting.</p>

</div>
</body>
</html>