<?php
include("../inc/badge_header.php");
if($_SESSION["numTeam"] > 0) {
	include("../inc/badge_folder.php");
	include("../inc/phases.php");
} else {
	redirect_to("./");
}
include("../inc/badge_footer.php");
?>