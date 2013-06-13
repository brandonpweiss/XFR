<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>XFR FORM DATA</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body  data-spy="scroll" data-target="nav">
	<div id="navbttnwrapper"><div id="navbttn"></div></div>
	<nav>
	<div id="sticky_navigation_wrapper">
    <div id="sticky_navigation">
		<!-- <div class="content"> -->
		<ul class="nav">
			<li id="about1"><a href="#about">ABOUT</a></li>
			<li><a href="#layout">THE LAYOUT</a></li>
			<li><a href="#membership">MEMBERSHIP</a></li>
			<li><a href="#connect">CONNECT</a></li>
			<li><a href="#blog">BLOG</a></li>
			<li id="subscribe1"><a href="#top">SUBSCRIBE TO UPDATES</a></li>
		</ul>
		<!-- </div> -->
	</div>
	</div>
	</nav>
<?php
include('config.php');


?>

<footer>
	<div class="content clearfx">
		<ul class="buttons">
			<li><img src="images/facebook2.png" alt="FACEBOOK"></li>
			<li><img src="images/twitter2.png" alt="TWITTER"></li>
			<li><img src="images/email.png" alt="EMAIL"></li>
			<li><img src="images/call.png" alt="CALL"></li>
			<li><img src="images/locate.png" alt="MAP"></li>
		</ul>
		<div class="column" id="column1">
			<h3>NAVIGATION</h3>
			<ul id="footernav">
				<li><a href="#top">TOP</a></li>
				<li><a href="#about">ABOUT XFR</a></li>
				<li><a href="#layout">THE LAYOUT</a></li>
				<li><a href="#membership">MEMBERSHIP</a></li>
				<li><a href="#connect">CONNECT</a></li>
				<li><a href="#">BLOG</a></li>
			</ul>
		</div>
		<div class="column" id="column2">
			<h3>INORMATION</h3>
			<ul>
				<li><a href="mailto:info@thexfr.org">INFO@THEXFR.ORG</a></li>
				<li>(267) 908-4104</li>
				<li><a target="_blank" href="https://www.facebook.com/thexfr">FACEBOOK.COM/THEXFR</a></li>
				<li><a target="_blank" href="http://www.twitter.com/thexfr">TWITTER.COM/THEXFR</a></li>
				<li><a target="_blank" href="http://www.instagram.com/thexfr">INSTAGRAM.COM/THEXFR</a></li>
				<li>THE TRANSFER STATION</li>
				<li class="address">114 GREEN LANE</li>
				<li class="address">PHILADELPHIA, PA 19127</li>
			</ul>
		</div>
		<div class="column" id="column3">
			<h3>THE XFR TEAM</h3>
<ul class="positions">
	<li>ADAM ROGERS  <span class="position">CO-FOUNDER + STRATEGIC DIRECTOR</span>  <a href="mailto: adam@thexfr.org">EMAIL</a></li>
	<li>SIMON ROGERS  <span class="position">CO-FOUNDER + CREATIVE DIRECTOR</span>  <a href="mailto:simon@thexfr.org">EMAIL</a></li>
	<li>FRANKIE ZELNICK  <span class="position">COMMUNICATIONS DIRECTOR</span>  <a href="mailto:frankie@thexfr.org">EMAIL</a></li>
	<li>BRIAN MURRAY  <span class="position">PARTNER</span></li>
	<li>IMAR HUTCHINS  <span class="position">PARTNER</span></li>
</ul>

<p>Site created by Transfer Creative.  Copyright © 2013 THEXFR LLC.  All rights reserved.</p>
		</div>
	</div>
</footer>
		<script>
/*####### STICKY NAV SCRIPT ##########*/
	var nav_pos = $('nav').offset().top;
	var i = 0;
	var sticky_nav = function()
	{
		var top_pos = $(window).scrollTop(); // our current vertical position from the top

		if ( (top_pos > nav_pos) && ($(window).width() > 640) )
		{
			$('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0, 'z-index':9999999});
		}
		else
		{
			$('#sticky_navigation').css({ 'position': 'relative', 'top':0, 'left':0 });
		}
	};

	$(window).scroll(function()
	{
		if (i <= 1)
		{
			nav_pos = $('nav').offset().top;
			i = 1;
		};
		 sticky_nav();
	});

	$(window).resize(function()
	{
			nav_pos = $('nav').offset().top;
	});

			$(document).ready(function()
		{
			$('#navbttn').click(function()
			{
				$('nav').toggleClass('open');
				$('nav').slideToggle(250);
			});
		});

</script>
<script>window.scrollTo(0, 1);</script>
</body>
</html>