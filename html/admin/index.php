<?php
	include("../../inc/admin_header.php");
	
	if ($isLogin == null) {
		redirect_to("login.php");
	}
	
	if (isset($_GET["lgty"])) {
		$_SESSION["login"] = null;
		redirect_to("../");
	}
?>	
<div class="navbar navbar-fixed-top">
	<div class="container">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
		<a class="navbar-brand" href="../">HWM Badging System</a>
		<div class="nav-collapse collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="javascript:void()">Manage Team</a></li>
				<li><a href="?lgty=1">Logout</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="page-header">
		<h1>Manage Teams</h1>
		<p>Click the team name to view and manage badges. To add a new team, click the <strong><span class="glyphicon glyphicon-plus"></span> Add New Team</strong> link. To delete a team, click the <strong><span class="glyphicon glyphicon-trash"></span> Delete a Team</a></strong> link.</p>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-lg-12">
			<?php if (isset($teamCreated) && $teamCreated != null) { ?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php
				echo("<strong>Success!</strong> Team ".$teamCreated." has been created and ready for badges.");
				$teamCreated = null;
				$_SESSION["teamCreated"] = $teamCreated;
				?>
			</div>
			<?php } ?>
			<?php if (isset($teamDeleted) && $teamDeleted != null) { ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php
				echo("<strong>Team deleted!</strong> Team ".$teamDeleted." has been deleted and no longer available.");
				$teamDeleted = null;
				$_SESSION["teamDeleted"] = $teamDeleted;
				?>
			</div>
			<?php } ?>
		</div>
		<div class="row">
			<div class="col-6 col-sm-4 col-lg-3">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="add_new_team.php"><span class="glyphicon glyphicon-plus"></span> Add New Team</a></li>
					<li><a href="delete_a_team.php"><span class="glyphicon glyphicon-trash"></span> Delete a Team</a></li>
				</ul>
			</div>
			
			<div class="col-6 col-sm-8 col-lg-9">
				
	<?php
		if (fileExist("../../inc/meta.txt")) {
			$teams = array();
			$teams = getTeams("../../inc/meta.txt");
			foreach ($teams as $key=>$t) {
				$team_name = str_before($t, "|");
				
				$temp = str_after($t,"|");
				$team_member = str_before($temp,"|");
				$team_member = str_replace(":", " - ", $team_member);
				
				echo("<div class=\"row teamList\">");
				echo("<div class=\"col-12 col-sm-12 col-lg-12\"><a href=\"../team.php?t=".($key+1)."\"><span class=\"glyphicon glyphicon-user\"></span> Team ".($key+1).": ".$team_name."</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class=\"btn btn-primary btn-small\" href=\"edit_team.php?t=".($key+1)."\"><span class=\"glyphicon glyphicon-pencil\"></span></a><p><small>".$team_member."</small></p></div>");
				echo("</div>");
			}
			unset($teams);
		} else {
			echo("<p><em>No team is available.</em></p>");
		}
	?>

			</div>
		</div>
	</div>

</div>	
<?php include("../../inc/admin_footer.php"); ?>