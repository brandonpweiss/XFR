<?php
if ( isset( $_POST['loginsubmit'] ) )
{
include('config.php');

$myusername=$_POST['username'];
$mypassword=$_POST['password'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

if ($myusername == $formdatausername && $mypassword == $formdatapassword){
	session_register("myusername");
	session_register("mypassword");
	header("location:formdata.php");
	}
	else {
	echo "Wrong Username or Password";
	};
};

?>
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
		<!-- <div class="content"> -->
		<ul class="nav">
		</ul>
		<!-- </div> -->
	</nav>
	<section id="layout">
		<div class="content clearfix">
<form style="margin: 200px auto; width:220px;" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<input type="submit" name="loginsubmit" id="submit1" value="Sign In">
</form>

	</section>
</div>
<footer style ="height: 400px; text-align: center;">
<p>Site created by Transfer Creative.  Copyright © 2013 THEXFR LLC.  All rights reserved.</p>
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