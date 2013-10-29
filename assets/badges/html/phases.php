<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Phases</title>
	<link href="css/badge_system.css" rel="stylesheet" />
	<link href="css/badges.css" rel="stylesheet" />
	<link href="css/badge_position.css" rel="stylesheet" />
	<link href="css/bootstrap.css" rel="stylesheet" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="scripts/bootstrap.min.js"></script>
	<script src="scripts/badge_system.js"></script>
</head>
<body>

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
			<!--
<div class="nav">
				<ul>
					<li><a class="onOffToggle" href="#">On</a></li>
					<li><a class="controlOffToggle" href="#">Hide Form</a></li>
				</ul>
			</div>
-->
		</div>
		
		<form action="" method="get">
		<input id="activeCode" type="hidden" value="" name="activeCode" />
		
		<!-- phase one -->
		<div class="phase one">
			<div class="phase_heading">Phase <span class="num_dot">1</span> <input class="save" type="submit" value="SAVE" /></div>
			<div class="phase_content">
			
				<div class="phase_one two_branch one">
					<div class="badge medium shadow one-one"></div>
					<div class="badge medium gs pink one_one"></div>
					<div class="badge small shadow one-two"></div>
					<div class="badge small gs yellow one_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="one-two" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow one-three"></div>
					<div class="badge small gs blue one_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="one-three" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_one two_branch two">
					<div class="badge medium shadow two-one"></div>
					<div class="badge medium gs  aqua two_one"></div>
					<div class="badge small shadow two-two"></div>
					<div class="badge small gs blue two_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="two-two" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow two-three"></div>
					<div class="badge small gs red two_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="two-three" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_one four_branch three">
					<div class="badge medium shadow three-one"></div>
					<div class="badge medium gs  green three_one"></div>
					<div class="badge small shadow three-two"></div>
					<div class="badge small gs purple three_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="three-two" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow three-three"></div>
					<div class="badge small gs yellow three_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="three-three" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow three-four"></div>
					<div class="badge small gs aqua three_four">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="three-four" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow three-five"></div>
					<div class="badge small gs pink three_five">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="three-five" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_one five_branch four">
					<div class="badge medium shadow four-one"></div>
					<div class="badge medium gs  red four_one"></div>
					<div class="badge small shadow four-two"></div>
					<div class="badge small gs yellow four_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="four-two"/> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow four-three"></div>
					<div class="badge small gs pink four_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="four-three"/> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow four-four"></div>
					<div class="badge small gs blue four_four">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="four-four" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow four-five"></div>
					<div class="badge small gs purple four_five">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="four-five" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow four-six"></div>
					<div class="badge small gs yellow four_six">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="four-six" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_one two_branch five">
					<div class="badge medium shadow five-one"></div>
					<div class="badge medium gs  purple five_one"></div>
					<div class="badge small shadow five-two"></div>
					<div class="badge small gs green five_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="five-two" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow five-three"></div>
					<div class="badge small gs blue five_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="five-three" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_one two_branch six">
					<div class="badge medium shadow six-one"></div>
					<div class="badge medium gs  aqua six_one"></div>
					<div class="badge small shadow six-two"></div>
					<div class="badge small gs green six_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="six-two" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow six-three"></div>
					<div class="badge small gs red six_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="six-three" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
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
			<div class="phase_heading">Phase <span class="num_dot">2</span> <input class="save" type="submit" value="SAVE" /></div>
			<div class="phase_content">
				
				<div class="phase_two four_branch eight">
					<div class="badge medium shadow eight-one"></div>
					<div class="badge medium gs blue eight_one"></div>
					<div class="badge small shadow eight-two"></div>
					<div class="badge small gs purple eight_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="eight-two" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow eight-three"></div>
					<div class="badge small gs yellow eight_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="eight-three" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow eight-four"></div>
					<div class="badge small gs red eight_four">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="eight-four" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow eight-five"></div>
					<div class="badge small gs green eight_five">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="eight-five" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_two two_branch nine">
					<div class="badge medium shadow nine-one"></div>
					<div class="badge medium gs aqua nine_one"></div>
					<div class="badge small shadow nine-two"></div>
					<div class="badge small gs blue nine_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="nine-two" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow nine-three"></div>
					<div class="badge small gs aqua nine_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="nine-three" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_two two_branch ten">
					<div class="badge medium shadow ten-one"></div>
					<div class="badge medium gs green ten_one"></div>
					<div class="badge small shadow ten-two"></div>
					<div class="badge small gs blue ten_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="ten-two" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow ten-three"></div>
					<div class="badge small gs yellow ten_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="ten-three" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_two five_branch eleven">
					<div class="badge medium shadow eleven-one"></div>
					<div class="badge medium gs purple eleven_one"></div>
					<div class="badge small shadow eleven-two"></div>
					<div class="badge small gs red eleven_two">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="eleven-two" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow eleven-three"></div>
					<div class="badge small gs yellow eleven_three">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="eleven-three" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow eleven-four"></div>
					<div class="badge small gs pink eleven_four">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="eleven-four" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow eleven-five"></div>
					<div class="badge small gs green eleven_five">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="eleven-five" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
					<div class="badge small shadow eleven-six"></div>
					<div class="badge small gs green eleven_six">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="eleven-six" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_two one_branch twelve">
					<div class="badge medium shadow twelve"></div>
					<div class="badge medium gs pink twelve_final">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="twelve"  /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
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
			<div class="phase_heading">Phase <span class="num_dot">3</span> <input class="save" type="submit" value="SAVE" /></div>
			<div class="phase_content">
			
				<div class="phase_three one_branch fourteen">
					<div class="badge medium shadow fourteen"></div>
					<div class="badge medium gs aqua fourteen_final">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="fourteen" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_three one_branch fifteen">
					<div class="badge medium shadow fifteen"></div>
					<div class="badge medium gs purple fifteen_final">
						<div class="controls">
							<label class="active_box"><input type="checkbox" id="fifteen" /> Active</label>
							<label class="bonus_box"><input type="checkbox" rel="bonus" /> Bonus</label>
						</div>
					</div>
				</div>
				
				<div class="phase_three final sixteen">
					<div class="badge large shadow sixteen"></div>
					<div class="badge large gs pink sixteen_final"></div>
				</div>
				
			</div>
		</div>
		
		</form>
		
		<div id="tooltip">
			<span class="bdgTitle"></span>
			<span class="bdgImg"></span>
			<span class="bdgTip"></span>
		</div>
		
	</div> <!-- end badge panel -->
	
</div>

</body>
</html>