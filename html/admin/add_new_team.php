<?php
	include("../../inc/admin_header.php");
	
	if ($isLogin == null) {
		redirect_to("./");
	} else {
		
		
		
		$errors = array();
		$message = "";
		$metaFileExist = false;
		$totalTeam = 0;
		
		if (fileExist("../../inc/meta.txt")) {
			$metaFileExist = true;
			$totalTeam = getNumTeam("../../inc/meta.txt");
		}
	
		if(isset($_POST["submit"])) {
	
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
			
				if (!$metaFileExist) {
					createMetaFile($teamName,$teamMember,$teamImg);
				} else {
					addToMetaFile($teamName,$teamMember,$teamImg);
				}
				
				$teamCreated = $teamName;
				$_SESSION["teamCreated"] = $teamName;
				
				redirect_to("./");
			} else {
				
				$_SESSION["teamName"] = $teamName;
				$_SESSION["teamMember"] = $teamMember;
				$_SESSION["teamImage"] = $teamImg;
				
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
		<h1>Add New Team <small>(<?php if ($metaFileExist) { echo("Team ".($totalTeam + 1)); } else { echo('Team 1'); } ?>)</small></h1>
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
			<form action="add_new_team.php" method="post">
				<div class="form-group">
					<label for="teamName" >Team (or Company) Name:</label>
					<input type="text" class="form-control" id="teamName" name="team_name" value="<?php echo(isset($_SESSION["teamName"]) ? $_SESSION["teamName"] : ""); ?>" autofocus >
					<span class="help-block"><strong>NOTE:</strong> No pipe ( | ) character is allowed in the name. Any pipe character will be replaced with a hyphen ( - ).</span>
				</div>
				<hr />
				<div class="form-group">
					<label for="memberName" >Member Names and Roles:</label>
					<span class="help-block">Enter each member's first name follow by a colon ( : ) and his or her role. Separate each name by using a comma.<br />For example: Ethan:Developer, Bryan:Developer, Patrick:CEO, etc.</span>
					<input type="text" class="form-control" id="memberName" name="member_name" value="<?php echo(isset($_SESSION["teamMember"]) ? $_SESSION["teamMember"] : ""); ?>">
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
									<input type="radio" name="team_image" value="0" <?php echo(isset($_SESSION["teamImage"]) && $_SESSION["teamImage"] == 0 ? "checked" : ""); ?> >
									<img src="../img/header/company_abc.jpg" width="158" height="87" border="0" alt="Company ABC"/>
								</label>
							</div>
						</div>
						
						<div class="col-3 col-sm-3 col-lg-3">
							<div class="radio">
								<label>
									<input type="radio" name="team_image" value="1" <?php echo(isset($_SESSION["teamImage"]) && $_SESSION["teamImage"] == 1 ? "checked" : ""); ?> >
									<img src="../img/header/company_efg.jpg" width="158" height="87" border="0" alt="Company EFG"/>
								</label>
							</div>
						</div>
						
						<div class="col-3 col-sm-3 col-lg-3">
							<div class="radio">
								<label>
									<input type="radio" name="team_image" value="2" <?php echo(isset($_SESSION["teamImage"]) && $_SESSION["teamImage"] == 2 ? "checked" : ""); ?> >
									<img src="../img/header/company_lmn.jpg" width="158" height="87" border="0" alt="Company LMN"/>
								</label>
							</div>
						</div>
						
						<div class="col-3 col-sm-3 col-lg-3">
							<div class="radio">
								<label>
									<input type="radio" name="team_image" value="3" <?php echo(isset($_SESSION["teamImage"]) && $_SESSION["teamImage"] == 3 ? "checked" : ""); ?> >
									<img src="../img/header/company_tuv.jpg" width="158" height="87" border="0" alt="Company TUV"/>
								</label>
							</div>
						</div>
						
						<div class="col-3 col-sm-3 col-lg-3" <?php echo(isset($_SESSION["teamImage"]) && $_SESSION["teamImage"] == 4 ? "checked" : ""); ?> >
							<div class="radio">
								<label>
									<input type="radio" name="team_image" value="4" >
									<img src="../img/header/company_xyz.jpg" width="158" height="87" border="0" alt="Company xyz"/>
								</label>
							</div>
						</div>
					</div>
				</div>
				<hr />
				<button type="submit" name="submit" class="btn btn-default">Add</button>
				<a class="btn btn-link" href="./">Cancel</a>
			</form>
		</div>
	</div>

</div>	
<?php
$_SESSION["teamName"] = null;
$_SESSION["teamMember"] = null;
$_SESSION["teamImage"] = null;
include("../../inc/admin_footer.php");
?>