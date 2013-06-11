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
		$subscribeErrors .= "Please enter your name.";
	};

	/* Email */
	if ($_POST['email'] != '')
	{
		$sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if(!filter_var($sanemail, FILTER_VALIDATE_EMAIL))
		  {
		  	$subscribeErrors .= "Please enter a valid email.";
		  } else {
		  	$email = $sanemail;
		  };
	}
	else
	{
		$subscribeErrors .= "Please enter your email address.";
	};

	/* Send to DB */
	if ($subscribeErrors == NULL)
	{
		mysqli_query($con,"INSERT INTO subscribers (name, email)
		VALUES ('$name', '$email')");

		echo '<script> window.location = "/"; </script>';
	}
	else
	{
		echo '<script> window.location = "/"; </script>';
		// echo $subscribeErrors;
	};

};

/* CONNECT */
if ( isset( $_POST['submit2'] ) )
{

	/* Name */
	if ($_POST['name'] != '')
	{
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$connectErrors .= "Please enter your name.";
	};

	/* Business Name */
	if ($_POST['businessName'] != '')
	{
		$businessName = filter_var($_POST['businessName'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$connectErrors .= "Please enter your Business's name.";
	};

	/* Email */
	if ($_POST['email'] != '')
	{
		$sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if(!filter_var($sanemail, FILTER_VALIDATE_EMAIL))
		  {
		  	$connectErrors .= "Please enter a valid email address.";
		  } else {
		  	$email = $sanemail;
		  };
	}
	else
	{
		$connectErrors .= "Please enter your email address.";
	};

		/* Phone */
	if ($_POST['phone'] != '')
	{
		$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
	}
	else
	{
		$connectErrors .= "Please enter your phone number.";
	};

	/* Comments */
	$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);


	/* Send to DB */
	if ($connectErrors == NULL)
	{
		mysqli_query($con,"INSERT INTO connect (name, businessName, email, phone, comments)
		VALUES ('$name', '$businessName', '$email', '$phone', '$comments')");

		echo '<script> window.location = "/"; </script>';
	}
	else
	{
		echo '<script> window.location = "/XFR/#connect"; </script>';
		// echo $connectErrors;
	};

};

/* SURVEY */
if ( isset( $_POST['submit3'] ) )
{

	/* First Name */
	if ($_POST['firstName'] != '')
	{
		$firstName = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$surveyErrors .= "Please enter your firstName.";
	};

	/* Last Name */
	if ($_POST['lastName'] != '')
	{
		$lastName = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$surveyErrors .= "Please enter your lastName.";
	};

	/* Business Name */
	if ($_POST['businessName'] != '')
	{
		$businessName = filter_var($_POST['businessName'], FILTER_SANITIZE_STRING);
	}
	else
	{
		$surveyErrors .= "Please enter your businessName.";
	};

	/* Email */
	if ($_POST['email'] != '')
	{
		$sanemail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		if(!filter_var($sanemail, FILTER_VALIDATE_EMAIL))
		  {
		  	$surveyErrors .= "Please enter a valid email address.";
		  } else {
		  	$email = $sanemail;
		  };
	}
	else
	{
		$connectErrors .= "Please enter your email address.";
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
		$surveyErrors .= "Please select the package you are most interest in.";
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

		echo '<script> window.location = "/"; </script>';
	}
	else
	{
		echo '<script> window.location = "/"; </script>';
		// echo $surveyErrors;
	};

};

mysqli_close($con);
?>