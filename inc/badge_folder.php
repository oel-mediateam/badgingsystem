<?php
	if (fileExist("../inc/meta.txt")) {
		$teams = array();
		$teams = getTeams("../inc/meta.txt");
		
		if($tNum > (count($teams))) {
			redirect_to("404.php");
		}
		
		$tName = str_before($teams[($tNum-1)],"|");
		
		$temp = str_after($teams[($tNum-1)],"|");
		$members = str_before($temp,"|");
		
		$t_members = array();
		$t_members = explode(",", $members);
		foreach ($t_members as $key => $member) {
			$t_members[$key] = str_replace(":"," - ",trim($member));
		}
		
		$temp = str_after(str_after($teams[($tNum-1)],"|"),"|");
		$tImg = str_before($temp,"|");
		
	}
?>

<?php
try {
	$pdf= "https://mediastreamer.doit.wisc.edu/uwli-ltc/hwm/assets/".strtolower(str_replace(" ","_",trim($tName))).".pdf";
	$curl = curl_init($pdf);
	curl_setopt($curl, CURLOPT_NOBODY, true);
	$result = curl_exec($curl);
	$ret = false;
	if ($result !== false) {
		$statusCode = curl_getinfo($curl,CURLINFO_HTTP_CODE);
		if ($statusCode == 200) {
			$ret = true;
		}
	}
	curl_close($curl);
} catch(Exception $e) {
	echo($e);
}
?>

<div class="wrapper">
	<div class="badging_company_folder">
		<div class="company_name"><a href="<?php echo(($ret ? $pdf : "javascript:void(0)")); ?>"><?php echo($tName); ?></a></div>
		<div class="view_more"><a href="./">View Other Companies &raquo;</a></div>
		<div class="company_logo">
		<a href="<?php echo(($ret ? $pdf : "javascript:void(0)")); ?>">
		
			<?php
			
			if ($tImg == 0) {
				echo("<img src=\"img/header/company_abc.jpg\" width=\"315\" height=\"174\" alt=\"\" border=\"0\" />");
			} else if ($tImg == 1) {
				echo("<img src=\"img/header/company_efg.jpg\" width=\"315\" height=\"174\" alt=\"\" border=\"0\" />");
			} else if ($tImg == 2) {
				echo("<img src=\"img/header/company_lmn.jpg\" width=\"315\" height=\"174\" alt=\"\" border=\"0\" />");
			} else if ($tImg == 3) {
				echo("<img src=\"img/header/company_tuv.jpg\" width=\"315\" height=\"174\" alt=\"\" border=\"0\" />");
			} else if ($tImg == 4) {
				echo("<img src=\"img/header/company_xyz.jpg\" width=\"315\" height=\"174\" alt=\"\" border=\"0\" />");
			} else {
				echo("<img src=\"img/header/company.jpg\" width=\"315\" height=\"174\" alt=\"\" border=\"0\" />");
			}
			
			?>
			
		</a>
		</div>
		<div class="folder_paperclip"></div>
		<div class="company_board_member">
			<ul>
				<?php
				foreach ($t_members as $member) {
					echo("<li>".$member."</li>");
				}
				unset($t_members);
				?>
			</ul>
		</div>
	</div>
</div>