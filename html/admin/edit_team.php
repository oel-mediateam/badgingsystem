<?php
	include("../../inc/admin_header.php");
	
	if ($isLogin == null) {
		redirect_to("./");
	} else {
		
		$errors = array();
		$teams = array();
		$message = "";
		$team = isset($_GET["t"]) ? $_GET["t"] : "";
		
		if ($team == "") {
			redirect_to("./");
		}
		
		if (fileExist("../../inc/meta.txt")) {
			if (getNumTeam("../../inc/meta.txt") <= 0) {
				redirect_to("./");
			}
			$teams = getTeams("../../inc/meta.txt");
		} else {
			redirect_to("./");
		}
		
		if(isset($_POST["update"])) {
	
			$teamName = trim($_POST["team_name"]);
			$teamMember = trim($_POST["member_name"]);
			$teamImg = isset($_POST["team_image"]) ? $_POST["team_image"] : -1;
			
			$teamName = str_replace("|", "-", $teamName);
			$teamMember = str_replace("|", "-", $teamMember);
		
			$field_required = array("team_name","member_name","team_image");
	
			foreach ($field_required as $field) {
				$value = isset($_POST[$field]) ? $_POST[$field]: "";
				if (!has_presence($value)) {
					$errors[$field] = "<li>" . ucwords(str_replace("_"," ",$field)) . " cannot be blank.</li>";
					$message .= $errors[$field];
				}
			}
		
			if (empty($errors)) {
				
				$tName = $teamName;
				$team_member = $teamMember;
				$team_img = $teamImg;
				$code = str_after(str_after(str_after($teams[($team-1)],"|"),"|"),"|");
				$teams[($team-1)] = $teamName."|".$teamMember."|".$teamImg."|".$code;
			
				$content = "";
				foreach($teams as $key=>$value) {
					if($key === (count($teams)-1)) {
						$content .= preg_replace("/[\n]/","",$value);
					} else {
						$content .= preg_replace("/[\n]/","",$value)."\n";
					}	
				}
					
				$_SESSION["teamName"] = $teamName;
				updateFile("../../inc/meta.txt",$content);
				unset($teams);

			} else {
				$tName = $teamName;
				$team_member = $teamMember;
				$team_img = $teamImg;
			}
			
		} else {
				
			$tName = str_before($teams[($team-1)], "|");
			$temp = str_after($teams[($team-1)],"|");
			$team_member = str_before($temp,"|");
			$temp = str_after(str_after($teams[($team-1)],"|"),"|");
			$team_img = str_before($temp,"|");			
			
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
		<h1>Edit Team <small>(<?php echo($tName); ?>)</small></h1>
		<p>Please fill in the form to add a new team.</p>
	</div>
	<div class="row">
		<div class="col-12 col-sm-12 col-lg-12">
			<?php if ($message != "") { ?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo($message); ?>
			</div>
			<?php } ?>
			
			<?php if (isset($_SESSION["teamName"])) { ?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo("<strong>Success!</strong> ".$_SESSION["teamName"]." is successfully updated."); ?>
			</div>
			<?php } ?>
			
			
			<form action="edit_team.php?t=<?php echo($team); ?>" method="post">
				<div class="form-group">
					<label for="teamName" >Team (or Company) Name:</label>
					<input type="text" class="form-control" id="teamName" name="team_name" value="<?php echo($tName); ?>" >
					<span class="help-block"><strong>NOTE:</strong> No pipe ( | ) character is allowed in the name. Any pipe character will be replaced with a hyphen ( - ).</span>
				</div>
				<hr />
				<div class="form-group">
					<label for="memberName" >Member Names and Roles:</label>
					<span class="help-block">Enter each member's first name follow by a colon ( : ) and his or her role. Separate each name by using a comma.<br />For example: Ethan:Developer, Bryan:Developer, Patrick:CEO, etc.</span>
					<input type="text" class="form-control" id="memberName" name="member_name" value="<?php echo($team_member); ?>">
					<span class="help-block"><strong>NOTE:</strong> No pipe ( | ) character is allowed in the name or the role. Any pipe character will be replaced with a hyphen ( - ).</span>
				</div>
				<hr />
				<div class="form-group">
				<label>Company Profile Image:</label>
				<span class="help-block">Select the company profile image for this team or company.</span>
					<div class="row">
					
						<div class="col-3 col-sm-3 col-lg-3">
							<div class="radio">
								<label>
									<input type="radio" name="team_image" value="0" <?php echo($team_img == 0 ? "checked" : ""); ?> >
									<img src="../img/header/company_abc.jpg" width="158" height="87" border="0" alt="Company ABC"/>
								</label>
							</div>
						</div>
						
						<div class="col-3 col-sm-3 col-lg-3">
							<div class="radio">
								<label>
									<input type="radio" name="team_image" value="1" <?php echo($team_img == 1 ? "checked" : ""); ?> >
									<img src="../img/header/company_efg.jpg" width="158" height="87" border="0" alt="Company EFG"/>
								</label>
							</div>
						</div>
						
						<div class="col-3 col-sm-3 col-lg-3">
							<div class="radio">
								<label>
									<input type="radio" name="team_image" value="2" <?php echo($team_img == 2 ? "checked" : ""); ?> >
									<img src="../img/header/company_lmn.jpg" width="158" height="87" border="0" alt="Company LMN"/>
								</label>
							</div>
						</div>
						
						<div class="col-3 col-sm-3 col-lg-3">
							<div class="radio">
								<label>
									<input type="radio" name="team_image" value="3" <?php echo($team_img == 3 ? "checked" : ""); ?> >
									<img src="../img/header/company_tuv.jpg" width="158" height="87" border="0" alt="Company TUV"/>
								</label>
							</div>
						</div>
						
						<div class="col-3 col-sm-3 col-lg-3" >
							<div class="radio">
								<label>
									<input type="radio" name="team_image" value="4" <?php echo($team_img == 4 ? "checked" : ""); ?> >
									<img src="../img/header/company_xyz.jpg" width="158" height="87" border="0" alt="Company xyz"/>
								</label>
							</div>
						</div>
					</div>
				</div>
				<hr />
				<button type="submit" name="update" class="btn btn-default">Update</button>
				<a class="btn btn-link" href="./">Cancel</a>
			</form>
		</div>
	</div>

</div>	
<?php
$_SESSION["teamName"] = null;
include("../../inc/admin_footer.php");
?>