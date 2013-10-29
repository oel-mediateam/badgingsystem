<?php
	if (fileExist("../inc/meta.txt")) {
		$teams = array();
		$teams = getTeams("../inc/meta.txt");
		
		$the_code = str_after(str_after(str_after($teams[($tNum-1)],"|"),"|"),"|");
		
		unset($teams);
	}
	$code_array = str_split($the_code);
?>
<div id="page_wrapper">

	<div id="errorMsg"></div>

	<!-- the badge system -->
	<div class="badge_panel">
	
		<!-- progress bar -->
		<div class="progress_bar">
			<div class="bar_wrapper">
				<div class="begin">begin</div>
				<div class="bar">
					<div class="fill_container">
						<div class="fill"></div>
					</div>
				</div>
			<div class="complete">complete</div>
			</div>
		</div>
		<!-- save indicator -->
		<?php if (isset($_SESSION["saved"])) {?>
		<div class="saved">Successfully Saved</div>
		<?php 
			}
			$_SESSION["saved"] = null;
		?>
		<?php if($isLogin != null) { ?>
		<form action="admin/save.php" method="post">
		<input id="activeCode" type="hidden" value="" name="activeCode" />
		<input type="hidden" value="<?php echo($tNum); ?>" name="team" />
		<?php } ?>
		
		<!-- phase one -->
		<div class="phase one">
			<div class="phase_heading">Phase <span class="num_dot">1</span>
				<?php if($isLogin != null) { ?>
				<a href="admin/">MANAGE</a>
				<input class="save" type="submit" name="save" value="SAVE" />
				<?php } ?>
			</div>
			<div class="phase_content">
			
				<div class="phase_one two_branch one">
				
					<?php if ($code_array[0] == 1 && $code_array[2] == 1) {?>
					<div class="badge medium shadow one-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow one-one"></div>
					<?php } ?>
					
					<div class="badge medium gs pink one_one"></div>
					
					<?php if ($code_array[0] == 1) {?>
						<?php if ($code_array[1] == 1) {?>
						<div class="badge small shadow one-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow one-two active"></div>
						<?php } ?>
					<?php } else {?>
					<div class="badge small shadow one-two"></div>
					<?php } ?>
					
					<div class="badge small gs yellow one_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[0] == 1) {?>
							<label class="active_box"><input type="checkbox" id="one-two" checked /> Active</label>
							<?php } else {?>
							<label class="active_box"><input type="checkbox" id="one-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[1] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
							
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[2] == 1) {?>
						<?php if ($code_array[3] == 1) {?>
						<div class="badge small shadow one-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow one-three active"></div>
						<?php } ?>
					<?php } else {?>
					<div class="badge small shadow one-three"></div>
					<?php } ?>
					
					<div class="badge small gs blue one_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[2] == 1) {?>
							<label class="active_box"><input type="checkbox" id="one-three" checked /> Active</label>
							<?php } else {?>
							<label class="active_box"><input type="checkbox" id="one-three" /> Active</label>
							<?php } ?>
							<?php if ($code_array[3] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
				</div>
				
				<div class="phase_one two_branch two">
				
					<?php if ($code_array[4] == 1 && $code_array[6] == 1) {?>
					<div class="badge medium shadow two-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow two-one"></div>
					<?php } ?>
					
					<div class="badge medium gs  aqua two_one"></div>
					
					<?php if ($code_array[4] == 1) {?>
						<?php if ($code_array[5] == 1) {?>
						<div class="badge small shadow two-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow two-two active"></div>
						<?php } ?>
					<?php } else {?>
					<div class="badge small shadow two-two"></div>
					<?php } ?>
					
					<div class="badge small gs blue two_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[4] == 1) {?>
							<label class="active_box"><input type="checkbox" id="two-two" checked /> Active</label>
							<?php } else {?>
							<label class="active_box"><input type="checkbox" id="two-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[5] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[6] == 1) {?>
						<?php if ($code_array[7] == 1) {?>
						<div class="badge small shadow two-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow two-three active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow two-three"></div>
					<?php } ?>
					
					<div class="badge small gs red two_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[6] == 1) {?>
							<label class="active_box"><input type="checkbox" id="two-three" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="two-three" /> Active</label>
							<?php } ?>
							<?php if ($code_array[7] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
				</div>
				
				<div class="phase_one four_branch three">

					<?php if ($code_array[8] == 1 && $code_array[10] == 1 &&
							  $code_array[12] == 1 && $code_array[14] == 1) {?>
					<div class="badge medium shadow three-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow three-one"></div>
					<?php } ?>
					
					<div class="badge medium gs  green three_one"></div>
					
					<?php if ($code_array[8] == 1) {?>
						<?php if ($code_array[9] == 1) {?>
						<div class="badge small shadow three-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow three-two active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow three-two"></div>
					<?php } ?>
					
					<div class="badge small gs purple three_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[8] == 1) {?>
							<label class="active_box"><input type="checkbox" id="three-two" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="three-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[9] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[10] == 1) {?>
						<?php if ($code_array[11] == 1) {?>
						<div class="badge small shadow three-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow three-three active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow three-three"></div>
					<?php } ?>
					
					<div class="badge small gs yellow three_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[10] == 1) {?>
							<label class="active_box"><input type="checkbox" id="three-three" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="three-three" /> Active</label>
							<?php } ?>
							<?php if ($code_array[11] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
										
					<?php if ($code_array[12] == 1) {?>
						<?php if ($code_array[13] == 1) {?>
						<div class="badge small shadow three-four bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow three-four active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow three-four"></div>
					<?php } ?>
					
					<div class="badge small gs aqua three_four">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[12] == 1) {?>
							<label class="active_box"><input type="checkbox" id="three-four" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="three-four" /> Active</label>
							<?php } ?>
							<?php if ($code_array[13] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[14] == 1) {?>
						<?php if ($code_array[15] == 1) {?>
						<div class="badge small shadow three-five bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow three-five active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow three-five"></div>
					<?php } ?>
					
					<div class="badge small gs pink three_five">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[14] == 1) {?>
							<label class="active_box"><input type="checkbox" id="three-five" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="three-five" /> Active</label>
							<?php } ?>
							<?php if ($code_array[15] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
				
				<div class="phase_one five_branch four">
					
					<?php if ($code_array[16] == 1 && $code_array[18] == 1 &&
							  $code_array[20] == 1 && $code_array[22] == 1 &&
							  $code_array[24] == 1) {?>
					<div class="badge medium shadow four-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow four-one"></div>
					<?php } ?>
					
					<div class="badge medium gs  red four_one"></div>
					
					<?php if ($code_array[16] == 1) {?>
						<?php if ($code_array[17] == 1) {?>
						<div class="badge small shadow four-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow four-two active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow four-two"></div>
					<?php } ?>
					
					<div class="badge small gs yellow four_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[16] == 1) {?>
							<label class="active_box"><input type="checkbox" id="four-two" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="four-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[17] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[18] == 1) {?>
						<?php if ($code_array[19] == 1) {?>
						<div class="badge small shadow four-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow four-three active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow four-three"></div>
					<?php } ?>
					
					<div class="badge small gs pink four_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[18] == 1) {?>
							<label class="active_box"><input type="checkbox" id="four-three" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="four-three"/> Active</label>
							<?php } ?>
							<?php if ($code_array[19] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[20] == 1) {?>
						<?php if ($code_array[21] == 1) {?>
						<div class="badge small shadow four-four bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow four-four active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow four-four"></div>
					<?php } ?>
					
					<div class="badge small gs blue four_four">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[20] == 1) {?>
							<label class="active_box"><input type="checkbox" id="four-four" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="four-four" /> Active</label>
							<?php } ?>
							<?php if ($code_array[21] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[22] == 1) {?>
						<?php if ($code_array[23] == 1) {?>
						<div class="badge small shadow four-five bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow four-five active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow four-five"></div>
					<?php } ?>
					
					<div class="badge small gs purple four_five">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[22] == 1) {?>
							<label class="active_box"><input type="checkbox" id="four-five" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="four-five" /> Active</label>
							<?php } ?>
							<?php if ($code_array[23] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[24] == 1) {?>
						<?php if ($code_array[25] == 1) {?>
						<div class="badge small shadow four-six bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow four-six active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow four-six"></div>
					<?php } ?>
					
					<div class="badge small gs yellow four_six">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[24] == 1) {?>
							<label class="active_box"><input type="checkbox" id="four-six" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="four-six" /> Active</label>
							<?php } ?>
							<?php if ($code_array[25] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
				</div>
				
				<div class="phase_one two_branch five">
					
					<?php if ($code_array[26] == 1 && $code_array[28] == 1) {?>
					<div class="badge medium shadow five-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow five-one"></div>
					<?php } ?>
					
					<div class="badge medium gs purple five_one"></div>
					
					<?php if ($code_array[26] == 1) {?>
						<?php if ($code_array[27] == 1) {?>
						<div class="badge small shadow five-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow five-two active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow five-two"></div>
					<?php } ?>
					
					<div class="badge small gs green five_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[26] == 1) {?>
							<label class="active_box"><input type="checkbox" id="five-two" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="five-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[27] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					
					<?php if ($code_array[28] == 1) {?>
						<?php if ($code_array[29] == 1) {?>
						<div class="badge small shadow five-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow five-three active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow five-three"></div>
					<?php } ?>
					
					<div class="badge small gs blue five_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[28] == 1) {?>
							<label class="active_box"><input type="checkbox" id="five-three" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="five-three" /> Active</label>
							<?php } ?>
							<?php if ($code_array[29] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
				</div>
				
				<div class="phase_one two_branch six">
				
					<?php if ($code_array[30] == 1 && $code_array[32] == 1) {?>
					<div class="badge medium shadow six-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow six-one"></div>
					<?php } ?>
					
					<div class="badge medium gs aqua six_one"></div>
					
					<?php if ($code_array[30] == 1) {?>
						<?php if ($code_array[31] == 1) {?>
						<div class="badge small shadow six-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow six-two active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow six-two"></div>
					<?php } ?>
					
					<div class="badge small gs green six_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[30] == 1) {?>
							<label class="active_box"><input type="checkbox" id="six-two" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="six-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[31] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[32] == 1) {?>
						<?php if ($code_array[33] == 1) {?>
						<div class="badge small shadow six-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow six-three active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow six-three"></div>
					<?php } ?>
					
					<div class="badge small gs red six_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[32] == 1) {?>
							<label class="active_box"><input type="checkbox" id="six-three" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="six-three" /> Active</label>
							<?php } ?>
							<?php if ($code_array[33] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
				
				<div class="phase_one final seven">
					<div class="badge large shadow seven"></div>
					<div class="badge large gs blue seven_final"></div>
				</div>
				
			</div>
		</div>
		
		<!-- phase two -->
		<div class="phase two">
			<div class="phase_heading">Phase <span class="num_dot">2</span>
				<?php if($isLogin != null) { ?>
				<a href="admin/">MANAGE</a>
				<input class="save" type="submit" name="save" value="SAVE" />
				<?php } ?>
			</div>
			<div class="phase_content">
				
				<div class="phase_two four_branch eight">
				
					<?php if ($code_array[34] == 1 && $code_array[36] == 1 &&
							  $code_array[38] == 1 && $code_array[40] == 1) {?>
					<div class="badge medium shadow eight-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow eight-one"></div>
					<?php } ?>
					
					<div class="badge medium gs blue eight_one"></div>
					
					<?php if ($code_array[34] == 1) {?>
						<?php if ($code_array[35] == 1) {?>
						<div class="badge small shadow eight-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow eight-two active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow eight-two"></div>
					<?php } ?>
					
					<div class="badge small gs purple eight_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[34] == 1) {?>
							<label class="active_box"><input type="checkbox" id="eight-two" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="eight-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[35] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[36] == 1) {?>
						<?php if ($code_array[37] == 1) {?>
						<div class="badge small shadow eight-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow eight-three active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow eight-three"></div>
					<?php } ?>
					
					<div class="badge small gs yellow eight_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[36] == 1) {?>
							<label class="active_box"><input type="checkbox" id="eight-three" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="eight-three" /> Active</label>
							<?php } ?>
							<?php if ($code_array[37] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[38] == 1) {?>
						<?php if ($code_array[39] == 1) {?>
						<div class="badge small shadow eight-four bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow eight-four active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow eight-four"></div>
					<?php } ?>
					
					<div class="badge small gs red eight_four">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[38] == 1) {?>
							<label class="active_box"><input type="checkbox" id="eight-four" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="eight-four" /> Active</label>
							<?php } ?>
							<?php if ($code_array[39] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[40] == 1) {?>
						<?php if ($code_array[41] == 1) {?>
						<div class="badge small shadow eight-five bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow eight-five active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow eight-five"></div>
					<?php } ?>
					
					<div class="badge small gs green eight_five">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[40] == 1) {?>
							<label class="active_box"><input type="checkbox" id="eight-five" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="eight-five" /> Active</label>
							<?php } ?>
							<?php if ($code_array[41] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
				</div>
				
				<div class="phase_two two_branch nine">
				
					<?php if ($code_array[42] == 1 && $code_array[44] == 1) {?>
					<div class="badge medium shadow nine-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow nine-one"></div>
					<?php } ?>
					
					<div class="badge medium gs green nine_one"></div>
					
					<?php if ($code_array[42] == 1) {?>
						<?php if ($code_array[43] == 1) {?>
						<div class="badge small shadow nine-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow nine-two active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow nine-two"></div>
					<?php } ?>
					
					<div class="badge small gs blue nine_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[42] == 1) {?>
							<label class="active_box"><input type="checkbox" id="nine-two" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="nine-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[43] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[44] == 1) {?>
						<?php if ($code_array[45] == 1) {?>
						<div class="badge small shadow nine-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow nine-three active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow nine-three"></div>
					<?php } ?>
					
					<div class="badge small gs yellow nine_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[44] == 1) {?>
							<label class="active_box"><input type="checkbox" id="nine-three" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="nine-three" /> Active</label>
							<?php } ?>
							<?php if ($code_array[45] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
				</div>
				
				<div class="phase_two four_branch ten">
				
					<?php if ($code_array[46] == 1 && $code_array[48] == 1 &&
							  $code_array[50] == 1 && $code_array[52] == 1) {?>
					<div class="badge medium shadow ten-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow ten-one"></div>
					<?php } ?>
					
					<div class="badge medium gs aqua ten_one"></div>
					
					<?php if ($code_array[46] == 1) {?>
						<?php if ($code_array[47] == 1) {?>
						<div class="badge small shadow ten-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow ten-two active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow ten-two"></div>
					<?php } ?>
					
					<div class="badge small gs blue ten_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[46] == 1) {?>
							<label class="active_box"><input type="checkbox" id="ten-two" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="ten-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[47] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[48] == 1) {?>
						<?php if ($code_array[49] == 1) {?>
						<div class="badge small shadow ten-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow ten-three active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow ten-three"></div>
					<?php } ?>
					
					<div class="badge small gs aqua ten_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[48] == 1) {?>
							<label class="active_box"><input type="checkbox" id="ten-three" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="ten-three" /> Active</label>
							<?php } ?>
							<?php if ($code_array[49] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[50] == 1) {?>
						<?php if ($code_array[51] == 1) {?>
						<div class="badge small shadow ten-four bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow ten-four active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow ten-four"></div>
					<?php } ?>
					
					<div class="badge small gs purple ten_four">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[50] == 1) {?>
							<label class="active_box"><input type="checkbox" id="ten-four" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="ten-four" /> Active</label>
							<?php } ?>
							<?php if ($code_array[51] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[52] == 1) {?>
						<?php if ($code_array[53] == 1) {?>
						<div class="badge small shadow ten-five bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow ten-five active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow ten-five"></div>
					<?php } ?>
					
					<div class="badge small gs red ten_five">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[52] == 1) {?>
							<label class="active_box"><input type="checkbox" id="ten-five" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="ten-five" /> Active</label>
							<?php } ?>
							<?php if ($code_array[53] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
				</div>
				
				<div class="phase_two five_branch eleven">
				
					<?php if ($code_array[54] == 1 && $code_array[56] == 1 &&
							  $code_array[58] == 1 && $code_array[60] == 1 &&
							  $code_array[62] == 1) {?>
					<div class="badge medium shadow eleven-one active"></div>
					<?php } else { ?>
					<div class="badge medium shadow eleven-one"></div>
					<?php } ?>
					
					<div class="badge medium gs purple eleven_one"></div>
					
					<?php if ($code_array[54] == 1) {?>
						<?php if ($code_array[55] == 1) {?>
						<div class="badge small shadow eleven-two bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow eleven-two active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow eleven-two"></div>
					<?php } ?>
					
					<div class="badge small gs red eleven_two">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[54] == 1) {?>
							<label class="active_box"><input type="checkbox" id="eleven-two" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="eleven-two" /> Active</label>
							<?php } ?>
							<?php if ($code_array[55] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					
					<?php if ($code_array[56] == 1) {?>
						<?php if ($code_array[57] == 1) {?>
						<div class="badge small shadow eleven-three bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow eleven-three active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow eleven-three"></div>
					<?php } ?>
					
					<div class="badge small gs yellow eleven_three">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[56] == 1) {?>
							<label class="active_box"><input type="checkbox" id="eleven-three" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="eleven-three" /> Active</label>
							<?php } ?>
							<?php if ($code_array[57] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[58] == 1) {?>
						<?php if ($code_array[59] == 1) {?>
						<div class="badge small shadow eleven-four bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow eleven-four active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow eleven-four"></div>
					<?php } ?>
					
					<div class="badge small gs pink eleven_four">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[58] == 1) {?>
							<label class="active_box"><input type="checkbox" id="eleven-four" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="eleven-four" /> Active</label>
							<?php } ?>
							<?php if ($code_array[59] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[60] == 1) {?>
						<?php if ($code_array[61] == 1) {?>
						<div class="badge small shadow eleven-five bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow eleven-five active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow eleven-five"></div>
					<?php } ?>
					
					<div class="badge small gs green eleven_five">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[60] == 1) {?>
							<label class="active_box"><input type="checkbox" id="eleven-five" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="eleven-five" /> Active</label>
							<?php } ?>
							<?php if ($code_array[61] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
					<?php if ($code_array[62] == 1) {?>
						<?php if ($code_array[63] == 1) {?>
						<div class="badge small shadow eleven-six bonus active"></div>
						<?php } else {?>
						<div class="badge small shadow eleven-six active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge small shadow eleven-six"></div>
					<?php } ?>
					
					<div class="badge small gs green eleven_six">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[62] == 1) {?>
							<label class="active_box"><input type="checkbox" id="eleven-six" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="eleven-six" /> Active</label>
							<?php } ?>
							<?php if ($code_array[63] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
				
				<div class="phase_two one_branch twelve">
				
					<?php if ($code_array[64] == 1) {?>
						<?php if ($code_array[65] == 1) {?>
						<div class="badge medium shadow twelve bonus active"></div>
						<?php } else {?>
						<div class="badge medium shadow twelve active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge medium shadow twelve"></div>
					<?php } ?>
					
					<div class="badge medium gs pink twelve_final">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[64] == 1) {?>
							<label class="active_box"><input type="checkbox" id="twelve" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="twelve" /> Active</label>
							<?php } ?>
							<?php if ($code_array[65] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
					
				</div>
				
				<div class="phase_two final thirteen">
					<div class="badge large shadow thirteen"></div>
					<div class="badge large gs green thirteen_final"></div>
				</div>
				
			</div>
		</div>
		
		<!-- phase three -->
		<div class="phase three">
			<div class="phase_heading">Phase <span class="num_dot">3</span>
				<?php if($isLogin != null) { ?>
				<a href="admin/">MANAGE</a>
				<input class="save" type="submit" name="save" value="SAVE" />
				<?php } ?>
			</div>
			<div class="phase_content">
			
				<div class="phase_three one_branch fourteen">
				
					<?php if ($code_array[66] == 1) {?>
						<?php if ($code_array[67] == 1) {?>
						<div class="badge medium shadow fourteen bonus active"></div>
						<?php } else {?>
						<div class="badge medium shadow fourteen active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge medium shadow fourteen"></div>
					<?php } ?>
					
					<div class="badge medium gs aqua fourteen_final">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[66] == 1) {?>
							<label class="active_box"><input type="checkbox" id="fourteen" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="fourteen" /> Active</label>
							<?php } ?>
							<?php if ($code_array[67] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
				
				<div class="phase_three one_branch fifteen">
				
					
					<?php if ($code_array[68] == 1) {?>
						<?php if ($code_array[69] == 1) {?>
						<div class="badge medium shadow fifteen bonus active"></div>
						<?php } else {?>
						<div class="badge medium shadow fifteen active"></div>
						<?php } ?>
					<?php } else { ?>
					<div class="badge medium shadow fifteen"></div>
					<?php } ?>
					
					<div class="badge medium gs purple fifteen_final">
						<?php if($isLogin != null) { ?>
						<div class="controls">
							<?php if ($code_array[68] == 1) {?>
							<label class="active_box"><input type="checkbox" id="fifteen" checked /> Active</label>
							<?php } else { ?>
							<label class="active_box"><input type="checkbox" id="fifteen" /> Active</label>
							<?php } ?>
							<?php if ($code_array[69] == 1) {?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" checked /> Bonus</label>
							<?php } else { ?>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
				
				<div class="phase_three final sixteen">
					<div class="badge large shadow sixteen"></div>
					<div class="badge large gs pink sixteen_final"></div>
				</div>
				
			</div>
		</div>
		
		<?php if($isLogin != null) { ?>
		</form>
		<?php } ?>
		
		<div id="tooltip">
			<span class="bdgTitle"></span>
			<span class="bdgImg"></span>
			<span class="bdgTip"></span>
		</div>
		
	</div> <!-- end badge panel -->
	
</div>