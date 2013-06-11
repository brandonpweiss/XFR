<?php
include('config.php');

/* Subscribe */
if ( isset( $_POST['submit1'] ) )
{
	/* Name */
	if ($_POST['name'] != '')
	{
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$subscribeErrors .= "<span class='errors'>Please enter your name.</span>";
	};

	/* Email */
	if ($_POST['email'] != '')
	{
		$sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if(!filter_var($sanemail, FILTER_VALIDATE_EMAIL))
		  {
		  	$subscribeErrors .= "<span class='errors'>Please enter a valid email.</span>";
		  } else {
		  	$email = $sanemail;
		  };
	}
	else
	{
		$subscribeErrors .= "<span class='errors'>Please enter your email address.</span>";
	};

	/* Send to DB */
	if ($subscribeErrors == NULL)
	{
		mysqli_query($con,"INSERT INTO subscribers (name, email)
		VALUES ('$name', '$email')");
	};

}
else if ( isset( $_POST['submit2'] ) ) /* CONNECT */
{

	/* Name */
	if ($_POST['name'] != '')
	{
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$connectErrors .= "<span class='errors'>Please enter your name.</span>";
	};

	/* Business Name */
	if ($_POST['businessName'] != '')
	{
		$businessName = filter_var($_POST['businessName'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$connectErrors .= "<span class='errors'>Please enter your Business's name.</span>";
	};

	/* Email */
	if ($_POST['email'] != '')
	{
		$sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if(!filter_var($sanemail, FILTER_VALIDATE_EMAIL))
		  {
		  	$connectErrors .= "<span class='errors'>Please enter a valid email address.</span>";
		  } else {
		  	$email = $sanemail;
		  };
	}
	else
	{
		$connectErrors .= "<span class='errors'>Please enter your email address.</span>";
	};

		/* Phone */
	if ($_POST['phone'] != '')
	{
		$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
	}
	else
	{
		$connectErrors .= "<span class='errors'>Please enter your phone number.</span>";
	};

	/* Comments */
	$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);


	/* Send to DB */
	if ($connectErrors == NULL)
	{
		mysqli_query($con,"INSERT INTO connect (name, businessName, email, phone, comments)
		VALUES ('$name', '$businessName', '$email', '$phone', '$comments')");
	};

}
else if ( isset( $_POST['submit3'] ) ) /* SURVEY */
{

	/* First Name */
	if ($_POST['firstName'] != '')
	{
		$firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$surveyErrors .= "<span class='errors'>Please enter your firstName.</span>";
	};

	/* Last Name */
	if ($_POST['lastName'] != '')
	{
		$lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$surveyErrors .= "<span class='errors'>Please enter your lastName.</span>";
	};

	/* Business Name */
	if ($_POST['businessName'] != '')
	{
		$businessName = filter_var($_POST['businessName'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$surveyErrors .= "<span class='errors'>Please enter your businessName.</span>";
	};

	/* Email */
	if ($_POST['email'] != '')
	{
		$sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if(!filter_var($sanemail, FILTER_VALIDATE_EMAIL))
		  {
		  	$surveyErrors .= "<span class='errors'>Please enter a valid email address.</span>";
		  } else {
		  	$email = $sanemail;
		  };
	}
	else
	{
		$surveyErrors .= "<span class='errors'>Please enter your email address.</span>";
	};

	/* About */
	$about = filter_var($_POST['about'], FILTER_SANITIZE_STRING);

	/* How Did you Hear About Us? */
	$howDidYouHear = filter_var($_POST['howDidYouHear'], FILTER_SANITIZE_STRING);

	/* Main Service */
	if ($_POST['mainService'] != '')
	{
	$mainService = filter_var($_POST['mainService'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$surveyErrors .= "<span class='errors'>Please select the package you are most interest in.</span>";
	};

	/* Start Up Kit */
	$startUpKit = filter_var($_POST['startUpKit'], FILTER_SANITIZE_STRING);

	/* Office Assistant */
	$officeAssistant = filter_var($_POST['officeAssistant'], FILTER_SANITIZE_STRING);

	/* Retail Solution */
	$retailSolution = filter_var($_POST['retailSolution'], FILTER_SANITIZE_STRING);

	/* Send to DB */
	if ($surveyErrors == NULL)
	{
		mysqli_query($con,"INSERT INTO membershipSurvey (firstName, lastName, businessName, email, about, howDidYouHear, mainService, startUpKit, officeAssistant, retailSolution)
		VALUES ('$firstName', '$lastName', '$businessName', '$email', '$about', '$howDidYouHear', '$mainService', '$startUpKit', '$officeAssistant', '$retailSolution')");
	};

};

mysqli_close($con);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>THE TRANSFER STATION</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<script src="jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body  data-spy="scroll" data-target="nav">
	<header>
		<div class="content">
		<img src="images/xfr.png" id="xfr" alt="XFR">
		<div id="welcome">WELCOME TO</div>
		<img src="images/thetransferstation.png" alt="THE TRANSFER STATION">
		<article id="tagline">
			<div id="innovative">an innovative resource center for artists and entrepreneurs,</div>
			<div id="unique">and a unique venue for the community they inspire.</div>
		</article>
		<div id="inputs">
		<form id="topform" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
			<input type="text" name="name" value="<?php $_POST['name'] ?>" placeholder="YOUR NAME">
			<input type="text" name="email" value="<?php $_POST['email'] ?>" placeholder="YOUR EMAIL">
			<input type="submit" name="submit1" id="submit1" value="SUBSCRIBE TO UPDATES">
		</form>
		<a target="_blank" class="facebook" href="http://www.facebook.com/thexfr"><img src="images/facebook.jpg" alt="FACEBOOK"></a>
		<a target="_blank" href="http://www.twitter.com/thexfr"><img src="images/twitter.jpg" alt="TWITTER"></a>
		<?php
		echo $subscribeErrors; ?>
		</div>
		</div>
	</header>
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
	<section id="smallspaces">
		<div class="smallspaces">SMALL SPACES. <br>BIG IDEAS.</div>
	</section>
	<section id="about">
		<div class="content clearfix">
			<div class="column left">
				<div class="inner">
					<h1>ABOUT XFR</h1>
					<p>Welcome to The Transfer Station (THEXFR), an innovative resource center for artists and entrepreneurs, and a unique venue for the community they inspire.  Located on Main Street in Manayunk, The Transfer Station offers tailored-made spaces and customized support services for bringing ideas to life.  Our curated marketplace, co-workspace, creative lab, artist studios, kitchen share and hidden cafe make for the ideal setting to work, sell, create, and collaborate with likeminded individuals.  Above all, The Transfer Station is a place to start.</p>
					<p class="ctas">JOIN THE CONVERSATION ON <a href="http://www.facebook.com/thetransferstation">FACEBOOK</a> AND <a href="http://www.twitter.com/thetransferstation">TWITTER</a></p>
				</div>
			</div>
			<div class="column right">
				<div class="inner">
					<h1>GET INVOLVED</h1>
					<p>Our concept for The Transfer Station has been in development for years; now it's finally time to bring it to life!  In order to move forward, we need you - the community - to let us know what you think and give us feedback regarding which aspects appeal to you most.  By generating interest and encouraging participation through this website, we can all directly influence how soon The Transfer Station is able to open its doors and what the concept ultimately evolves into.  We ask you to explore this website, let us know what you're most interested in, and help spread the word!</p>
					<p class="ctas">GET STARTED WITH THE XFR <a href="#membership">QUESTIONNAIRE</a> BELOW</p>
				</div>
			</div>
		</div>
	</section>
	<section id="iamhereto">
		<div class="content clearfix">
			<div id="ohhello">OH HELLO. I'M JUST HERE TO</div>
			<ul id="nav2">
				<li><a href="#">JOIN</a></li>
				<li><a href="#">WORK</a></li>
				<li><a href="#">SELL</a></li>
				<li><a href="#">TRANSFER</a></li>
				<li><a href="#">RINSE</a></li>
				<li><a href="#">REPEAT</a></li>
			</ul>
			</div>
	</section>
	<section id="chair">
	</section>

<section id="layout">
		<div class="layoutP">
		<div class="inner">
		<h1>THE LAYOUT</h1>
		<p>Our facility has been designed with adaptive reuse at its core - completely retrofitting an abandoned industrial building in the heart of Philadelphia's Manayunk neighborhood to accommodate a mix of working, making, learning, selling, and collaborating.  Our spaces are designed to be as comfortable as they are impactful, creating a warm and friendly facility in which you can make your best first impression.</p>
		<p><span class="bold">EXPLORE OUR DESIGNS BELOW</span></p>
		</div>
	</div>
<div class="content clearfix">
<article id="depts" class="clearfix">
<div class="dept">
	<h2>MICRORETAIL</h2>
	<h3>LEVEL 1 / RETAIL</h3>
	<img src="images/microretail.png" alt="Microretail">
	<p>This living marketplace is a winding expanse of customizable “retail pods” - small, highly-modifiable storefronts that can be configured to showcase any product type.  Our layout is designed to encourage high-volume foot traffic from those just starting their walk down Main Street, or those winding down at our cafe and outdoor deck.
</p>
	<a href="#" class="learnmore">< LEARN MORE ></a>
	<a href="#" class="tellafriend">> TELL A FRIEND <</a>
</div>
<div class="dept">
	<h2>WORKNEST</h2>
	<h3>LEVEL 2 / OFFICE</h3>
	<img src="images/worknest.png" alt="">
	<p>The WorkNest is the heart of our co-working facility.  With a collection of private and semi-private offices, a bullpen of open desk space, and a variety of shared amenities (conference room, lounge, etc.), this floor has been designed to encourage and support all manner of business needs in the most inviting environment we could imagine.</p>
	<a href="#" class="learnmore">< LEARN MORE ></a>
	<a href="#" class="tellafriend">> TELL A FRIEND <</a>
</div>
<div class="dept">
	<h2>FLEXHALL</h2>
	<h3>LEVEL 3 / EVENT</h3>
	<img src="images/flexhall.png" alt="">
	<p>Poised directly beneath the forthcoming Manayunk Bridge Park, our third-floor flex-space is a premier event and community program venue.  Featuring a wrap-around deck, commercial kitchen, and large open-volume communal halls, this flexible layout can be modified to fit any purpose, limited only by our member's imaginations. </p>
	<a href="#" class="learnmore">< LEARN MORE ></a>
	<a href="#" class="tellafriend">> TELL A FRIEND <</a>
</div>
<div class="dept">
	<h2>XFRCRTV</h2>
	<h3>LEVEL 0 / CREATIVE</h3>
	<img src="images/xfrcrtv.png" alt="">
	<p>Transfer Creative (XFRCRTV) is our in-house creative division, servicing our member's marketing needs in an expansive production suite on the lower level.  A large central control-room sits between our soundstage for visual arts and our iso-room for audio production, providing our member’s ideas with unmatched production value.
</p>
	<a href="#" class="learnmore">< LEARN MORE ></a>
	<a href="#" class="tellafriend">> TELL A FRIEND <</a>
</div>
</article>
</div>
</section>
<section id="transferhere">
	<div class="smallspaces">TRANSFER<br>HERE</div>
</section>
<section id="membership">
		<div class="content clearfix">
			<div class="layoutP">
		<div class="inner">
		<h1>MEMBERSHIP</h1>
		</div>
	</div>
			<div class="column left">
				<div class="inner">
					<p>With the interactive form below, we hope to gain some insight into how we can best serve you and your work/life needs.  No matter your level of interest, from the "sign me up now" forward-thinkers to the "keep me up-to-date on your progress" casually-intrigued, we encourage you to fill out this form simply to let us know what appeals to you most about The Transfer Station. </p>
				</div>
			</div>
			<div class="column right">
				<div class="inner">
					<p class="yellow">DON’T WORRY, <br>
					No money or promises required. <br>
					we just want TO GET TO KNOW YOU!</p>

					<p class="grey">IN YOUR IDEAL WORLD, WHAT WOULD YOU DO AT THE TRANSFER STATION?</p>
				</div>
			</div>
			<div id="iwant">&quot;I WANT TO...&quot;</div>
		</div>
</section>

<section id="options">
	<div class="content clearfix">
		<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" id="inputs">
		<div class="option" id="start">
			<div class="inner">
			<h1>START</h1>
			<h2>1. SHARED DESK</h2>
			<div class="box">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi non amet exercitationem? Deleniti, nihil labore doloremque id quae magni saepe.</p>
				<div class="price">FROM $25 PER DAY<br>OR $245 PER MONTH</div>
			</div>
			<div class="selectbox clearfix"><span class="selectthis">SELECT THIS</span><input type="radio" name="mainService" value="sharedDesk" id="sharedDesk"><label for="sharedDesk"><span></span></label></div>
			</div>
		</div>
		<div class="option" id="work">
			<div class="inner">
			<h1>WORK</h1>
			<h2>2. PRIVATE DESK</h2>
			<div class="box">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, sequi deleniti quae totam distinctio commodi cumque excepturi rem assumenda animi.</p>
				<div class="price">FROM $395 PER MONTH</div>
			</div>
			<div class="selectbox clearfix"><span class="selectthis">SELECT THIS</span><input type="radio" name="mainService" value="privateDesk" id="privateDesk"><label for="privateDesk"><span></span></label></div>
		</div>
		</div>
		<div class="option" id="sell">
			<div class="inner">
			<h1>SELL</h1>
			<h2>3. TEAM OFFICE</h2>
			<div class="box">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta tempore nulla cupiditate consequatur? Eum, ipsum, maiores repudiandae tempore voluptas reiciendis!</p>
				<div class="price">FROM $795 PER MONTH</div>
			</div>
			<div class="selectbox clearfix"><span class="selectthis">SELECT THIS</span><input type="radio" name="mainService" value="teamOffice" id="teamOffice"><label for="teamOffice"><span></span></label></div>
			</div>
		</div>
		<div class="option" id="transfer">
			<div class="inner">
			<h1>TRANSFER</h1>
			<h2>4. BUILD YOUR OWN</h2>
			<div class="box">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, repudiandae voluptate sit libero qui id fuga molestias magnam officiis saepe.</p>
				<div class="price">NAME YOUR PRICE</div>
			</div>
			<div class="selectbox clearfix"><span class="selectthis">SELECT THIS</span><input type="radio" name="mainService" value="buildYourOwn" id="buildYourOwn"><label for="buildYourOwn"><span></span></label></div>
			</div>
		</div>
	</div>
<div id="options2">
<div class="content clearfix">
	<div class="inner">
	<div class="option2">
		<div class="heading clearfix">
			<div class="headingLeft">
			<h1>+ THE XFR STARTUP KIT</h1>
			<span class="addthis">ADD THIS</span>
			</div>
			<input type="checkbox" name="startUpKit" value="1" id="startUpKit"><label for="startUpKit"><span></span></label>
		</div>
		<div class="info clearfix">
			<div class="para">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, nihil, odio nisi ullam exercitationem porro eveniet quisquam veritatis enim iusto. Dolore, deserunt laborum esse sapiente minima animi ipsam tempore maiores obcaecati sint quis qui adipisci asperiores aut ratione dolorum dignissimos mollitia dolores autem aperiam blanditiis quidem consectetur tempora architecto ducimus.
			</p>
			</div>
			<div class="price"><span class="fee">$495 ONE TIME FEE</span> <br> <span class="why">WHY IS THIS SO CHEAP?</span></div>
		</div>
	</div>

	<div class="option2">
		<div class="heading clearfix">
			<div class="headingLeft">
			<h1>+ THE XFR OFFICE ASSISTANT</h1>
			<span class="addthis">ADD THIS</span>
			</div>
			<input type="checkbox" name="officeAssistant" value="1" id="officeAssistant"><label for="officeAssistant"><span></span></label>
		</div>
		<div class="info clearfix">
			<div class="para">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, cupiditate, sed. Illo, voluptatem voluptatum reiciendis nulla qui labore at dolorem. Aspernatur, perferendis, deserunt, ipsam harum esse deleniti repellat sunt dolor excepturi perspiciatis exercitationem explicabo ab quod accusamus at beatae quaerat.</p>
			</div>
			<div class="price"><span class="fee">$195 PER MONTH</span> <br> <span class="why">THE MOST AFFORDABLE EMPLOYEE</span></div>
		</div>
	</div>
	<div class="option2">
		<div class="heading clearfix">
		<div class="headingLeft">
			<h1>+ THE XFR RETAIL SOLUTION</h1>
			<span class="addthis">ADD THIS</span>
			</div>
			<input type="checkbox" name="retailSolution" value="1" id="retailSolution"><label for="retailSolution"><span></span></label>
		</div>
		<div class="info clearfix">
			<div class="para">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, ex, est, quasi excepturi nemo quia nostrum delectus rerum architecto natus nihil corrupti quo recusandae temporibus aut fugiat quis porro deleniti accusantium facere! Vel, nihil, explicabo, earum cupiditate exercitationem provident quae numquam asperiores sunt aut reiciendis quos accusantium placeat non fugit.</p>
			</div>
			<div class="price"><span class="fee">$495 PER MONTH</span> <br> <span class="why">A MAIN STREET DREAM COME TRUE</span></div>
		</div>
	</div>
	<div class="toprow">
	<input type="text" name="firstName" value="<?php $_POST['firstName'] ?>" placeholder="FIRST NAME" class="topz names topz1">
	<input type="text" name="lastName" value="<?php $_POST['lastName'] ?>" placeholder="LAST NAME" class="topz names">
	<input type="text" name="businessName" pvalue="<?php $_POST['businessName'] ?>" placeholder="BUSINESS NAME" class="topz names topz1">
	<input type="text" name="email" value="<?php $_POST['email'] ?>" placeholder="EMAIL ADDRESS" class="topz rightz"> </div>
	<textarea name="about" value="<?php $_POST['about'] ?>" placeholder="TELL US A LITTLE ABOUT YOURSELF (OPTIONAL)" class="comments"></textarea>
	<textarea name="howDidYouHear" value="<?php $_POST['howDidYouHear'] ?>" placeholder="HOW DID YOU HEAR ABOUT THEXFR (OPTIONAL)" class="comments rightz comments2"></textarea>

	<input type="submit" name ="submit3" id="submit3" value="ALL DONE! SUBMIT AND SHARE!">
</form>
<?php echo $surveyErrors; ?>
</div>
</div>
</div>
</section>

<section id="oldstation">
	<img src="images/oldstation.jpg" alt="The Transfer Station">
</section>
<section id="connect">
		<div class="content clearfix">
			<div class="column left">
				<div class="inner">
					<h1>MAKE HISTORY</h1>
					<p>Built in 1925 as a power station for Manaunk’s “dinky” trolley line, 114 Green Lane has sat idly on the corner of Main Street and Green Lane for well over two decades.  We aim to bring new life to this beautiful historic property, and we hope you’ll join us in lighting it up once again!  We’ve been working on The Transfer Station concept for several years now, and it’s our greatest pleasure to finally be able to invite you to become a part of it.  Sign up, let us know what you think, and share this concept with friends.  Let’s make history in Manayunk.  Together.</p>
					<p>Adam & Simon Rogers <br>
					The Transfer Station Co-Founders</p>
				</div>
			</div>
			<div class="column right">
				<div class="inner">
					<h1>CONNECT</h1>
					<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
						<input name="name" type="text" value="<?php $_POST['name'] ?>" placeholder="FIRST AND LAST NAME">
						<input name="businessName" type="text" value="<?php $_POST['businessName'] ?>" placeholder="BUSINESS NAME">
						<input name="email" type="text" value="<?php $_POST['email'] ?>" placeholder="EMAIL ADDRESS">
						<input name="phone" type="text" value="<?php $_POST['phone'] ?>" placeholder="PHONE NUMBER">
						<input name="comments" type="text" value="<?php $_POST['comments'] ?>" placeholder="COMMENTS">
						<input type="submit" name="submit2" id="submit2" value="SUBMIT">
					</form>
					<?php echo $connectErrors; ?>
				</div>
			</div>
		</div>
	</section>
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