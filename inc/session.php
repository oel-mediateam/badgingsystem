<?php
	require_once("functions.php");
	session_start();
	
	$isLogin = (isset($_SESSION["login"]) ? $_SESSION["login"] : null);
	
	if (fileExist("../inc/meta.txt")) {
		$_SESSION["numTeam"] = getNumTeam("../inc/meta.txt");
	} else {
		$_SESSION["numTeam"] = null;
	}
	
	$teamCreated = (isset($_SESSION["teamCreated"]) ? $_SESSION["teamCreated"] : null);
	$teamDeleted = (isset($_SESSION["teamDeleted"]) ? $_SESSION["teamDeleted"] : null);
	
	/* ADD NEW TEAM FORM INPUT VALUES */
	$_SESSION["teamName"] = null;
	$_SESSION["teamMember"] = null;
	$_SESSION["teamImage"] = null;

?>