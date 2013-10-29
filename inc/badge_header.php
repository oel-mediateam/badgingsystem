<?php
require_once("../inc/functions.php");
require_once("../inc/session.php");

$tNum = $_GET["t"];
	
if ($tNum == null || trim($tNum) == "") {
	if($isLogin == "y") {
		redirect_to("admin/");
	} else {
		redirect_to("./");
	}
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Team <?php echo($tNum.": ".getTeamName($tNum)); ?></title>
	<link href="css/header_min.css" rel="stylesheet" />
	<link href="css/badge_system_min.css" rel="stylesheet" />
	<link href="css/badges_min.css" rel="stylesheet" />
	<link href="css/badge_position_min.css" rel="stylesheet" />
	<link href="css/popover_min.css" rel="stylesheet" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="scripts/bootstrap.min.js"></script>
	<script src="scripts/badge_system-min.js"></script>
</head>
<body>