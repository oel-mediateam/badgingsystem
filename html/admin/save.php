<?php
require_once("../../inc/functions.php");
session_start();

if(isset($_POST["save"])) {

	$team = trim($_POST["team"]);
	$code = trim($_POST["activeCode"]);
	$field_required = array("team","activeCode");

	foreach ($field_required as $field) {
		$value = trim($_POST[$field]);
		if (!has_presence($value)) {
			$errors[$field] = "<li>" . ucwords(str_replace("_"," ",$field)) . " cannot be blank.</li>";
		}
	}

	if (empty($errors)) {
	
		if (fileExist("../../inc/meta.txt")) {
			
			$teams = array();
			$teams = getTeams("../../inc/meta.txt");
			
			$tName = str_before($teams[($team-1)], "|");
			$temp = str_after($teams[($team-1)],"|");
			$team_member = str_before($temp,"|");
			$temp = str_after(str_after($teams[($team-1)],"|"),"|");
			$team_img = str_before($temp,"|");
			
			$teams[($team-1)] = $tName."|".$team_member."|".$team_img."|".$code;
			
			$content = "";
			foreach($teams as $key=>$value) {
				if($key === (count($teams)-1)) {
					$content .= preg_replace("/[\n]/","",$value);
				} else {
					$content .= preg_replace("/[\n]/","",$value)."\n";
				}	
			}
			
			echo($content);
			
			$_SESSION["saved"] = "y";
			
			updateFile("../../inc/meta.txt",$content);
			unset($teams);
			redirect_to("../team.php?t=".$team);
			
		}
	} else {
		redirect_to("../");
	}
}
?>