<div class="navbar navbar-fixed-top">
		<div class="container">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
			<a class="navbar-brand" href="./">HWM Badging System</a>
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="admin">Manage Team</a></li>
					<?php if ($isLogin == null) { ?>
					<li><a href="admin/login.php">Login</a></li>
					<?php } else { ?>
					<li><a href="admin/?lgty=1">Logout</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>