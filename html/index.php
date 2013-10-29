<?php	
	include("../inc/header.php");
	include("../inc/nav.php");
	$nTeam = $_SESSION["numTeam"];
?>
	
	<div class="container">
		<?php if ($nTeam > 0) { ?>
			<div class="page-header">
				<h1>Teams</h1>
				<p>Click the team name to view.</p>
			</div>
			<?php if (fileExist("../inc/meta.txt")) {
				$teams = array();
				$teams = getTeams("../inc/meta.txt");
				echo("<div class=\"row\"><div class=\"col-12 col-sm-12 col-lg-12\">");
				foreach ($teams as $key=>$t) {
					$team_name = str_before($t, "|");
					
					$temp = str_after($t,"|");
					$team_member = str_before($temp,"|");
					$team_member = str_replace(":", " - ", $team_member);
					
					echo("<div class=\"row teamList\">");
					echo("<div class=\"col-12 col-sm-12 col-lg-12\"><a href=\"team.php?t=".($key+1)."\"><span class=\"glyphicon glyphicon-user\"></span> Team ".($key+1).": ".$team_name."</a><p><small>".$team_member."</small></p></div>");
					echo("</div>");
				}
				echo("</div></div>");
				unset($teams);
				} ?>
				
		<?php } else { ?>
	
		<div class="page-header">
			<h1>No team is available!</h1>
		</div>
		<div class="row">
			<div class="col-12 col-sm-12 col-lg-12">
			<?php if ($isLogin == null) { ?>
			<h3>Please <a href="admin/login.php">login</a> to create a team.</h3>
			<?php } else { ?>
			<h3>Please go to <a href="admin/">Manage Team</a> page to create a team.</h3>
			<?php } ?>
			</div>
		</div>
		
<?php } ?>
	</div>
<?php
	include("../inc/footer.php");
?>
