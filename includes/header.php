<?php 
	$companyName = "Franklin's Fine Dinning";
	include("includes/arrays.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo TITLE; ?></title>
	<link rel="stylesheet" href="styles.css">
	<style>
		hr {
    	background: url(img/hr.png) center center no-repeat;
		}
	</style>
</head>
<body id="final-example">
	<div class="wrapper">
		<div id="banner">
			<a href="/"><img src="img/banner.png" alt=""></a>
		</div>
		<!-- banner -->
		<div id="nav">
			<?php include("includes/nav.php"); ?>
		</div>
		<!-- nav -->
		<div class="content">