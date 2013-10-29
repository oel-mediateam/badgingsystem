<?php
	include("../../inc/admin_header.php");
	
	if ($isLogin == null) {
		redirect_to("./");
	} else {
	
		if(isset($_POST["submit"])) {
	
			$tNum = trim($_POST["team"]);
			
			if (fileExist("../../inc/meta.txt")) {
			
				$teams = array();
				$teams = getTeams("../../inc/meta.txt");
				$teamDeleted = str_before($teams[$tNum],"|");
				$_SESSION["teamDeleted"] = $teamDeleted;
				unset($teams[$tNum]);
				implode(" ,", $teams);
				$teams = array_values($teams);
				
				if (count($teams) <= 0) {
					unlink('../../inc/meta.txt');
				} else {
					$content = "";
					foreach($teams as $key=>$value) {
						if($key === (count($teams)-1)) {
							$content .= preg_replace("/[\n]/","",$value);
						} else {
							$content .= preg_replace("/[\n]/","",$value)."\n";
						}				
					}
			
					updateFile("../../inc/meta.txt",$content);
			
				}
				
				
			unset($teams);
			echo($teamDeleted);
			redirect_to("./");
			
			} else {
				redirect_to("../");
			}
		}
			
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
				<li><a href="./">Manage Team</a></li>
				<li><a href="./?lgty=1">Logout</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
	<div class="page-header">
		<h1>Delete A Team</h1>
		<p>Please select the team to delete.</p>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-lg-12">
			<form action="delete_a_team.php" method="post">
				<div class="form-group">
					<label for="team" >Team:</label>
					<select class="form-control input-large" name="team">
						<?php
							$nTeams = array();
							$nTeams = getTeams("../../inc/meta.txt");
							foreach($nTeams as $key=>$t) {
								$team_name = str_before($t, "|");
								echo("<option value=\"".$key."\">Team ".($key+1).": ".$team_name."</option>");
							}
							unset($nTeams);
						?>
					</select>
					<span class="help-block"><strong>WARNING:</strong> The team will be permanently deleted including any saved data.</span>
				</div>
				<button type="submit" name="submit" class="btn btn-danger">Delete</button>
				<a class="btn btn-link" href="./">Cancel</a>
			</form>
		</div>
	</div>
</div>