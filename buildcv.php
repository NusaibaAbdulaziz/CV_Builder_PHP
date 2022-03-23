<?php

session_start();

?>

<!DOCTYPE html>

<html>



<head>

	<meta charset="utf-8" />

	<meta name="descripation" content="curriculum vitae builder">

	<meta name="viewport" content="width=device-width, intial-scale=0.1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"

		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"

		integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="

		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="css/bootstrap.css">

	<title>CV builder</title>
	<style>

	.buttonIn {
		width: 300px;
		position: relative;
	}
	
	#input1 {
		margin: 0px;
		padding: 0px;
		width: 100%;
		outline: none;
		height: 30px;
		border-radius: 5px;
	}
	
	#button1 {
		position: absolute;
		top: 0;
		border-radius: 5px;
		right: 0px;
		z-index: 2;
		border: none;
		top: 2px;
		height: 30px;
		cursor: pointer;
		transform: translateX(2px);
	}

	

	

</style>



	<script type="text/javascript">

		var maxGeneralSkills = 10;
		var countGeneralSkills = 1;

		var maxMajorSkills = 10;
		var countMajorSkills = 1;

		var maxLanguages = 10;
		var countLanguages = 1;

		var maxAchievements = 10;
		var countAchievements = 1;

		var maxExperience = 10;
		var countExperience = 1;

	

		function add_function(name) {

		

			var fieldHTML = '<div class="buttonIn"><input id="input1" class="form-control" type="text" name="' + name + '[]" /><button id="button1" type="button" onclick="remove(\'' + name + '\',this)"  class="remove_button "><img src="sub.png" width="25"/></div>';
            
			if (name == "General_skills") {
				if (countGeneralSkills < maxGeneralSkills) {
					countGeneralSkills++;
					$("#GeneralSkillsId").append(fieldHTML);
				}
			}
			else if(name == "MajorSkills") {
				if (countMajorSkills < maxMajorSkills) {
					countMajorSkills++;
					$("#MajorSkillsId").append(fieldHTML);
				} }
			else if(name == "Languages") {
				if (countLanguages < maxLanguages) {
					countLanguages++;
					$("#Languages").append(fieldHTML);
				}
			}
			else if(name == "Achievements") {
				if (countAchievements < maxAchievements) {
					countAchievements++;
					$("#Achievements").append(fieldHTML);
				}
			}
			else if(name == "Experience") {
				if (countExperience < maxExperience) {
					countExperience++;
					$("#Experience").append(fieldHTML);
				}
			}
		}

		function remove(name, elem) {
			$(elem).parent('div').remove();
			if (name == "General_skills") {
				countGeneralSkills--;

			}
			else if (name == "MajorSkills") {
				countMajorSkills++;

			}
			else if (name == "Languages") {
				countLanguages++;

			}
			else if (name == "Achievements") {
				countAchievements++;

			}
			else if (name == "Experience") {
				countExperience++;

			}
		}





	</script>



</head>



<body>



	<?php



	include_once 'header.php';



	?>







	<section class="text-secondary p-5 text-center" style="background-color: #BEDCFE;">



		<div class="container">

			<h1 class="well">Start building your CV</h1>
			<br>
			<br>

			<div class="col-lg-12 well">

				<div class="row">

					<form id="signup-form" class="form" action="" method="post">

						<div class="col-sm-12">

							<div class="row">

								<div class="col-sm-6 form-group">

									<label>Full Name</label>

									<input type="text" class="form-control">

								</div>

								<div class="col-sm-6 form-group">

									<label>Major</label>

									<input type="text" class="form-control">

								</div>

							</div>

							<div class="form-group">

								<label>Profile</label>

								<textarea rows="3" class="form-control"></textarea>

							</div>







							<div class="row field_wrapper">



								<div class="col-sm-4 form-group">

									<label>General skills</label>

									<div class="buttonIn"><div class="row" id="GeneralSkillsId">

										<div><input type="text" id="input1" class="form-control" name="General_skills[]"></div>

									</div>

									<button id="button1" type="button" onclick="add_function('General_skills')" class="add_button"

										title="Add field"><img src="add.png" width="30" /></div>

								</div>





								<div class="col-sm-4 form-group">

									<label>Major Skills</label>

							
									<div class="buttonIn"><div class="row" id="MajorSkillsId">

										<div><input type="text" id="input1" class="form-control" name="MajorSkills[]"></div>

									</div>

									<button id="button1" type="button" onclick="add_function('MajorSkills')" class="add_button"

										title="Add field"><img src="add.png" width="30" /></div>

								</div>







								<div class="col-sm-4 form-group">

									<label>Languages</label>


										<div class="buttonIn"><div class="row" id="Languages">

										<div><input type="text" id="input1" class="form-control" name="Languages[]"></div>

									</div>

									<button id="button1" type="button" onclick="add_function('Languages')" class="add_button"

										title="Add field"><img src="add.png" width="30" /></div>

								</div>





							





						</div>





						<div class="row vertical-center-row" style="display: flex; justify-content: center;">
						<div class=" col-md-4  form-group">
						<label>Achievements</label>
						<div class="buttonIn"><div class="row" id="Achievements">

                        <div><input type="text" id="input1" class="form-control" name="Achievements[]"></div>

                        </div>

                        <button id="button1" type="button" onclick="add_function('Achievements')" class="add_button"

                       title="Add field"><img src="add.png" width="30" /></div>

					  </div>


					    <div class="col-md-4 form-group">
						<label>Experiences</label>
						<div class="buttonIn"><div class="row" id="Experience">

                        <div><input type="text" id="input1" class="form-control" name="Experience[]"></div>

                        </div>

                        <button id="button1" type="button" onclick="add_function('Experience')" class="add_button"

                       title="Add field"><img src="add.png" width="30" /></div>

					  </div>



						</div>
						</div>







						<div class="row">

							<div class="col-sm-4 form-group">

								<label>Phone Number</label>

								<input type="text" class="form-control">

							</div>

							<div class="col-sm-4 form-group">

								<label>Email Address</label>

								<input type="email" class="form-control">

							</div>

							<div class="col-sm-4 form-group">

								<label>City</label>

								<input type="text" class="form-control">

							</div>

						</div>
						<br>
			<br>









						<button type="button" class="btn btn-lg btn-info">Submit</button>

				</div>

				</form>

			</div>

		</div>

		</div>





	</section>











	<?php



	include_once 'footer.php';



	?>









</body>



<script src="JQ.js" type="text/javascript"></script>



</html>