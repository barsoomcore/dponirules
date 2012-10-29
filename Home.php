<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>DINO-PIRATES OF NINJA ISLAND!</title>
<link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="/dponiwiki/media/scripts/bootstrap/css/bootstrap.min.css">
<link rel="icon" type="image/png" href="/dponiwiki/media/favicon.png">
<style>
	.HomeBox {
		padding-top:0.5em;
		padding-bottom:0.5em;
		margin-bottom:1em
		}
	body {
		font-family: 'Bitter', serif;
	}
	.container { 
		background: url('/dponiwiki/media/images/HomeBackground.png') #D4A15D no-repeat 0px 70px;
		width: 1200px;
	}
	h1, h2, h3, h4, a, a:hover { color: #690E10; }
	.nav-tabs a { color: #690E10; }
	.nav-tabs > li > a {border:none; font-weight: bold; border-bottom: 2px transparent}
	.nav-tabs > li > a:hover { background-color:transparent; border: none; border-bottom: solid 4px #690E10; }
	#Proposal h3 { color: #D4A15D; margin-bottom: -20px }
</style>
</head>
<body>
<script src="/dponiwiki/media/scripts/jquerymin.js"></script>
<script src="/dponiwiki/media/scripts/bootstrap/js/bootstrap.js"></script>
<script>
	$(document).ready(function(){
	
		$('#ProposalCarousel01').carousel({
			interval: FALSE;
		});
		
		$('#ProposalCarousel02').carousel({
			interval: FALSE;
		});
		
		$('#ImageCarousel').carousel({
			interval:FALSE;
		});
		
	});
</script>

<div class="container">
<div class="row-fluid">
	<div id="banner" class="span6" style="background-color:transparent; padding-left: 5px">
			<a href="Home.php">
				<img src="/dponiwiki/media/banners/HomeBanner.png" alt="Banner" />
			</a>
	</div>
	
	<div class="span5">
		<ul class="nav nav-tabs pull-right" style="padding-top: 30px; font-size: 150%; border:none;">
			<li><a href="Basics.php">Rules</a></li>
			<li><a href="/dponiwiki/page/running-dino-pirates/">Tools</a></li>
			<li><a href="/dponiwiki/">Setting</a></li>
		</ul>
	</div>
</div>

<div class="row-fluid">
	<div class="span6 offset6" style="text-align: center" id="Proposal">
		<?php
		
			$path='/dponiwiki/media/images/ProposalCarousel/';
			$proposalsOne=array(
				'Brontosaurus.png',
				'Canyon.png',
				'Casino.png',
				'Crowsnest.png',
				'Gorillas.png',
				'Guns.png',
				'MadScientist.png',
				'NinjaClan.png'
			);
			$proposalsTwo = array(
				'PirateCaptain.png',
				'Pterodactyl.png',
				'Robot.png',
				'Samurai.png',
				'TRex.png',
				'Triceratops.png',
				'Shadow.png',
				'Sorcerer.png',
				'Velociraptor.png'
			);
		?>
		<h3>Here's Your Chance To...</h3>
		<div id="ProposalCarousel01" class="carousel slide" style="margin-bottom:-20px">
			<div class="carousel-inner">
				<?php 
					$n=0; 
					foreach($proposalsOne as $proposal): $n++; 
				?>
				<div class="item<?php if($n==1) echo ' active' ?>">
					<img src="<?php echo $path . $proposal; ?>" />
				</div>
				<?php endforeach ?>
			</div>
		</div>
		
		<h3>Or...</h3>
		<div id="ProposalCarousel02" class="carousel slide" style="margin-bottom: -10px">
			<div class="carousel-inner">
				<?php $n=count($proposalsTwo); foreach($proposalsTwo as $proposal): $n--; ?>
				<div class="item<?php if($n==1) echo ' active' ?>">
					<img src="<?php echo $path . $proposal; ?>" />
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span2 offset10">
			<button id="ProposalButton" class="btn btn-warning btn-mini" style="margin-bottom: 0px">Something else?</button>
		</div>
		<script>
			var button = document.getElementById("ProposalButton");
			button.onclick = function(){
				$('#ProposalCarousel01').carousel('next');
				$('#ProposalCarousel02').carousel('prev');
			};	
		</script>
	</div>
</div>
<div class="row-fluid">
	<div class="span5 offset7" style="background: url('/dponiwiki/media/images/HomeBook.png') no-repeat 30px 70px; height: 450px">
		<div class="span2 offset2">
			<p style="padding-top: 170px">
				<a href="http://www.lulu.com/shop/corey-reid/dino-pirates-rules/paperback/product-20473568.html">
				<button class="btn btn-large btn-success" style="height: 100px; width: 250px; font-size:300%; color: #690E10; font-weight: bold; border: solid 4px #690E10" >Buy Now!</button>
				</a>
			</p>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span3 offset8" style="background-color: #D4A15D; border: solid 4px #690E10; text-align:center; padding: 2px; margin-top: -130px;">
		<h2 style="color: #690E10; font-size: 400%">$20</h2>
		<p style="color: #690E10; font-size:150%; margin-top: 20px;">for 100 pages of swashbuckling prehistoric kung-fu action!</p>
	</div>
</div>

<div class="row-fluid" style="margin-top: 30px">
	<div id="content" class="span7 offset1">
		<p class="small"><em>Ninjas, pirates, and dinosaurs. A fantasy Asia, filled with warring island nations. Samurai mounted on domesticated raptors. Bigger dinosaurs hunted by quasi-Polynesian tribesmen. Dueling factions of shadow warriors. Privateers and buccaneers battling the servants of the Imperial Navy. Fallen kingdoms deep in forgotten jungles. And we call it...</em></p>
		
		<h2>DINO-PIRATES OF NINJA ISLAND</h2>
		
		<img src="/dponiwiki/media/images/SmallSkull.png" style="float:left; margin:0.5em 0.5em 1em 0.5em; clear:left">
		<p>DINO-PIRATES OF NINJA ISLAND is a fun, fast-paced role-playing game with everything you need to start your own wild pulp adventures!

Dinosaurs, pirates and ninjas thrive amongst an uncharted sprawl of lawless tropical islands, where ancient ruins lurk and terrifying spirits await the unwary. But the evil sorcerers who rule the Jade Empire have always coveted these islands, and now they are bringing their powers to bear on these last bastion of freedom.

Call upon the powers of your ancestors, or trust to your faithful blade, but be ready to fight for your clan, your crew and your life!</p>

		<a href="http://www.lulu.com/shop/corey-reid/dino-pirates-rules/paperback/product-20473568.html"><h3>Buy the Complete Rulebook Now!</h3></a>
		
		<img src="/dponiwiki/media/images/SmallSkull.png" style="float:left; margin:0.5em 0.5em 1em 0.5em; clear:left"><p>This website is the online home of <b>DINO-PIRATES OF NINJA ISLAND</b>. We've made available everything you need to begin playing this swashbuckling game of pulp adventure -- absolutely FREE. You can browse <a href="Basics.php">the complete rules</a>, distributed under the Open Gaming License, and you can learn all about <a href="/dponiwiki/">this fantastic setting</a>, made available under a Creative Commons license so you can add to it yourself!</p>
		<p>So you don't need the rulebook to decide if you like this game or not, but it's a really nice book, with lots of pictures, and it's handier at the game table. Plus it helps us here at DINO-PIRATE HQ as we work to bring you more and more and better DINO-PIRATICAL goodness!</p>
	</div>
	
	<div class="span3" style="margin-top:50px">
		<h3>What You'll Find in the Rulebook:</h3>
		<div id="ImageCarousel" class="carousel slide">
			<div class="carousel-inner"  style="border: solid 4px #690E10; width: 300px">
				
				<div class="item active" >
					<img src="/dponiwiki/media/images/HomeCarousel/DPoNIFrontCover.png" alt="" />
					<div class="carousel-caption"><p>All the tools you need to create your own thrilling pulp adventures!</p></div>
				</div>
				<div class="item">
					<img src="/dponiwiki/media/images/HomeCarousel/KanaAndFriend.jpg" alt="" />
					<div class="carousel-caption"><p>New Feats, Powers and Skills!</p></div>
				</div>
				<div class="item">
					<img src="/dponiwiki/media/images/HomeCarousel/Brute.png" alt="" />
					<div class="carousel-caption"><p>Terrifying foes, easy to create, hard to destroy...</p></div>
				</div>
				<div class="item">
					<img src="/dponiwiki/media/images/HomeCarousel/Parrot.png" alt="" />
					<div class="carousel-caption"><p>Yes, you can have a talking parrot on your shoulder. Or even a monkey, if you like.</p></div>
				</div>
				<div class="item">
					<img src="/dponiwiki/media/images/HomeCarousel/NinjaIsland.png" alt="" />
					<div class="carousel-caption"><p>Evil forces are at work, threatening the freedom of ALL the islands. Heroes are needed to turn the tide!</p></div>
				</div>
				<div class="item">
					<img src="/dponiwiki/media/images/HomeCarousel/Legacy.jpg" alt="" />
					<div class="carousel-caption"><p>What will be YOUR legacy?</p></div>
				</div>
			</div>
  			<a class="carousel-control left" href="#ImageCarousel" data-slide="prev">&lsaquo;</a>
 			 <a class="carousel-control right" href="#ImageCarousel" data-slide="next">&rsaquo;</a>
		</div>
	</div>
</div>
</div>
</body>
</html>