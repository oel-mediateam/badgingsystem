<?php
	
	include("../../inc/admin_header.php");
	
	if ($isLogin != null) {
		redirect_to("./");
	} else {
		
		require_once("../../inc/functions.php");
		
		$errors = array();
		$username = "";
		$message = "";
	
		if(isset($_POST["submit"])) {
	
			$username = trim($_POST["username"]);
			$password = trim($_POST["password"]);
		
			$field_required = array("username","password");
	
			foreach ($field_required as $field) {
				$value = trim($_POST[$field]);
				if (!has_presence($value)) {
					$errors[$field] = "<li>" . ucfirst($field) . " cannot be blank.</li>";
					$message .= $errors[$field];
				}
			}
		
			if (empty($errors)) {
				// try to login
				if (validate_user($username, $password)) {
					$isLogin = "y";
					$_SESSION["login"] = $isLogin;
					redirect_to("./");
				} else {
					$isLogin = null;
					$_SESSION["login"] = $isLogin;
					$message = "The username or password is incorrect. Please try again.";
				}
			}
			
		}
			
	}
	
?>

	<div class="container">
	
		<form class="form-signin" action="login.php" method="post" autocomplete="off">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="form-signin-heading">Login</h3>
				</div>
				<?php if ($message != "") { ?>
				
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<?php echo($message); ?>
				</div>
				<?php } ?>
				<input type="text" class="form-control input-large" name="username" placeholder="Username" value="<?php echo($username); ?>" autofocus>
				<input type="password" class="form-control input-large" name="password" placeholder="Password">
				<button class="btn btn-primary btn-large btn-block" name="submit" type="submit">Login</button>
				<div class="panel-footer"><a class="btn btn-link" href="../"><span class="glyphicon glyphicon-chevron-left"></span> Back Home</a></div>
			</div>
		</form>
		
	</div>

<?php include("../../inc/admin_footer.php"); ?>