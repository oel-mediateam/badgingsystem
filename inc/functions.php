<?php

	include("constant.php");
	
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}
	
	/* check form field for text inputs */
	function has_presence($value) {
		return isset($value) && $value !== "";
	}
	
	function validate_user($username, $password) {
		$user = array();
		$scrampled = "";
		$file = fopen("../../inc/logcred.txt","r") or exit("Unable to open file!");
		while (!feof($file)) {
			$user[] = trim(fgets($file));
		}
		fclose($file);
		if ($username == $user[0]) {
			// successful login
			$scrampled = md5($password.SALT_ID);
			if ($scrampled == $user[1]) {
				return true;
			} else {
				return false;
			}
		} else if ($username == $user[2]) {
			$scrampled = md5($password.SALT_FAC);
			if ($scrampled == $user[3]) {
				return true;
			}
		} else {
			return false;
		}
	}
	
	function getTeams($f) {
		$teams = array();
		$file = fopen($f,"r") or exit("Unable to open file!");
		while (!feof($file)) {
			$teams[] = preg_replace("/[\n\r]/","",fgets($file));
		}
		fclose($file);
		return ($teams);
	}
	
	function getNumTeam($f) {
		$teams = array();
		$teams = getTeams($f);
		$nTeams = count($teams);
		unset($teams);
		return ($nTeams);
	}
	
	function getTeamName($num) {
		$teams = array();
		$teams = getTeams("../inc/meta.txt");
		$tName = str_before($teams[($num-1)], "|");
		unset($teams);
		return ($tName);
	}
	
	function fileExist($file) {
		if (file_exists($file)) {
			return true;
		} else {
			return false;
		}
	}
	
	function updateFile($f,$content) {
		$file = fopen($f,"w+") or exit("Unable to open file!");
		fputs($file,$content);
		fclose($file);
	}
	
	function createMetaFile($tName,$tMember,$tImg) {
		$content = $tName."|".$tMember."|".$tImg."|";
		$metaFile = fopen("../../inc/meta.txt","w");
		fwrite($metaFile, $content."0000000000000000000000000000000000000000000000000000000000000000000000");
		fclose($metaFile);
	}
	
	function addToMetaFile($tName,$tMember,$tImg) {
		$content = $tName."|".$tMember."|".$tImg."|";
		$metaFile = file_put_contents("../../inc/meta.txt",
									  "\n".$content."0000000000000000000000000000000000000000000000000000000000000000000000",
									  FILE_APPEND);
		fclose($metaFile);
	}
	
	function get_page_name($url) {
		$page_url = explode("/", $url);
		$page = $page_url[count($page_url) - 1];
		$page_name = str_before($page, ".");
		$page_name = str_replace("_", " ", $page_name);
		return (ucwords($page_name !== "index" && $page_name != "" ? $page_name." - " : ""));
	}
	
	function str_before($string, $needle) {
		$p = strpos($string, $needle);
		return (substr($string, 0, $p));
	}
	
	function str_after($string, $needle) {
		$p = strpos($string, $needle);
		return (substr($string, ($p+1)));
	}

?>