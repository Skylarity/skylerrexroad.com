<?php
/**
 * Get the relative path.
 * @see https://raw.githubusercontent.com/kingscreations/farm-to-you/master/php/lib/_header.php FarmToYou Header
 **/
require_once(dirname(dirname(__DIR__)) . "/root-path.php");
$CURRENT_DEPTH = substr_count($CURRENT_DIR, "/");
$ROOT_DEPTH = substr_count($ROOT_PATH, "/");
$DEPTH_DIFFERENCE = $CURRENT_DEPTH - $ROOT_DEPTH;
$PREFIX = str_repeat("../", $DEPTH_DIFFERENCE);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
			  rel="stylesheet"/>

		<!-- Custom CSS -->
		<link type="text/css" href="<?php echo $PREFIX; ?>css/style.css" rel="stylesheet"/>

		<!-- Favicon stuff -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $PREFIX; ?>images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $PREFIX; ?>images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $PREFIX; ?>images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $PREFIX; ?>images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $PREFIX; ?>images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $PREFIX; ?>images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $PREFIX; ?>images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $PREFIX; ?>images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $PREFIX; ?>images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $PREFIX; ?>images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $PREFIX; ?>images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $PREFIX; ?>images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $PREFIX; ?>images/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo $PREFIX; ?>images/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php echo $PREFIX; ?>images/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- Swipebox CSS -->
		<link type="text/css" href="<?php echo $PREFIX; ?>css/swipebox.css" rel="stylesheet"/>

		<!-- Animate.css -->
		<link type="text/css" href="<?php echo $PREFIX; ?>css/animate.css" rel="stylesheet"/>

		<!-- Google Fonts -->
		<link
			href='https://fonts.googleapis.com/css?family=Comfortaa:300|Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,900,700italic,900italic'
			rel='stylesheet' type='text/css'>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- js-cookie -->
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.2/js.cookie.min.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript"
				src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/additional-methods.min.js"></script>

		<!-- Swipebox JS -->
		<script type="text/javascript" src="<?php echo $PREFIX; ?>js/jquery.swipebox.min.js"></script>

		<!-- Mobile-friendly-ifying -->
		<script type="text/javascript" src="<?php echo $PREFIX; ?>js/move-website-text.js"></script>

		<!-- Custom JS -->
		<script type="text/javascript" src="<?php echo $PREFIX; ?>js/fire-swipebox.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<title><?php echo $PAGE_TITLE; ?></title>
	</head>