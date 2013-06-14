<?php
session_start();
if(!session_is_registered(myusername)){
header("location:datalogin.php");
}
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
			<li id="about1"><a href="datasignout.php">SIGN OUT</a></li>
		</ul>
		<!-- </div> -->
	</nav>
	<section id="layout">
		<div class="content clearfix">
		<div class="form-wrap">
<?php
include('config.php');
$i = 0;

$surveyresults = mysqli_query($con,"SELECT * FROM start UNION ALL SELECT * FROM work UNION ALL SELECT * FROM sell UNION ALL SELECT * FROM transfer ORDER BY form");

$countrows = mysqli_num_rows($surveyresults);
print ("<table class='allformdata'>");
print ("<tr>");
print ("<th scope='col'>Total Survey Submissions:</th>");
print ("<th scope='col'>$countrows</th>");
print ("</tr>");
print ("</table>");

print ("<table class='allformdata'>");
print ("<thead>");
print ("<tr>");
print ("<th scope='col'>Form</th>");
print ("<th scope='col'>IP</th>");
print ("<th scope='col'>Date and Time</th>");
print ("<th scope='col'>First Name</th>");
print ("<th scope='col'>Last Name</th>");
print ("<th scope='col'>Business Name</th>");
print ("<th scope='col'>Email Address</th>");
print ("<th scope='col'>About</th>");
print ("<th scope='col'>How did they hear</th>");
print ("<th scope='col'>Main Service</th>");
print ("<th scope='col'>Start Up Kit</th>");
print ("<th scope='col'>Office Assistant</th>");
print ("<th scope='col'>Retail Solution</th>");
print ("</tr>");
print ("</thead>");

print ("<tbody>");
while($row=mysqli_fetch_array($surveyresults)) {
	if ($i % 2 == 0) {
	$stripe = 'even';
} else {
	$stripe = 'odd';
};

print ("<tr class='$stripe'>");
print ("<td>$row[form]</td>");
print ("<td>$row[ip]</td>");
print ("<td>$row[dt]</td>");
print ("<td>$row[firstname]</td>");
print ("<td>$row[lastname]</td>");
print ("<td>$row[businessname]</td>");
print ("<td>$row[email]</td>");
print ("<td>$row[about]</td>");
print ("<td>$row[referrer]</td>");
print ("<td>$row[mainservice]</td>");
print ("<td>$row[startupkit]</td>");
print ("<td>$row[officeassistant]</td>");
print ("<td>$row[retailsolution]</td>");
print ("</tr>");
$i++;
};
print ("</tbody>");
print ("</table>");
print ("</div><hr>");


$subscribers = mysqli_query($con,"SELECT * FROM subscribers ORDER BY dt");

print ("<div class='form-wrap'>");
$countrows = mysqli_num_rows($subscribers);
print ("<table class='allformdata'>");
print ("<tr>");
print ("<th scope='col'>Total Subcribers:</th>");
print ("<th scope='col'>$countrows</th>");
print ("</tr>");
print ("</table>");

print ("<table class='allformdata'>");
print ("<thead>");
print ("<tr>");
print ("<th scope='col'>IP</th>");
print ("<th scope='col'>Date and Time</th>");
print ("<th scope='col'>First Name</th>");
print ("<th scope='col'>Last Name</th>");
print ("<th scope='col'>Email Address</th>");
print ("</tr>");
print ("</thead>");

print ("<tbody>");
while($row=mysqli_fetch_array($subscribers)) {
	if ($i % 2 == 0) {
	$stripe = 'even';
} else {
	$stripe = 'odd';
};
print ("<tr class='$stripe'>");
print ("<td>$row[ip]</td>");
print ("<td>$row[dt]</td>");
print ("<td>$row[firstname]</td>");
print ("<td>$row[lastname]</td>");
print ("<td>$row[email]</td>");
print ("</tr>");
$i++;
};
print ("</tbody>");
print ("</table>");
print ("</div><hr>");

$contacted = mysqli_query($con,"SELECT * FROM connect ORDER BY dt");

print ("<div class='form-wrap'>");
$countrows = mysqli_num_rows($contacted);
print ("<table class='allformdata'>");
print ("<tr>");
print ("<th scope='col'>Total Comment/Message Submissions:</th>");
print ("<th scope='col'>$countrows</th>");
print ("</tr>");
print ("</table>");

print ("<table class='allformdata'>");
print ("<thead>");
print ("<tr>");
print ("<th scope='col'>IP</th>");
print ("<th scope='col'>Date and Time</th>");
print ("<th scope='col'>First Name</th>");
print ("<th scope='col'>Last Name</th>");
print ("<th scope='col'>Business Name</th>");
print ("<th scope='col'>Email Address</th>");
print ("<th scope='col'>Phone</th>");
print ("<th scope='col'>Comments</th>");
print ("</tr>");
print ("</thead>");

print ("<tbody>");
while($row=mysqli_fetch_array($contacted)) {
	if ($i % 2 == 0) {
	$stripe = 'even';
} else {
	$stripe = 'odd';
};

print ("<tr class='$stripe'>");
print ("<td>$row[ip]</td>");
print ("<td>$row[dt]</td>");
print ("<td>$row[firstname]</td>");
print ("<td>$row[lastname]</td>");
print ("<td>$row[businessname]</td>");
print ("<td>$row[email]</td>");
print ("<td>$row[phone]</td>");
print ("<td>$row[comments]</td>");
print ("</tr>");
$i++;
};
print ("</tbody>");
print ("</table>");
print ("</div>");
?>
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