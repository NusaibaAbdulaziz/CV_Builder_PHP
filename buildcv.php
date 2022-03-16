<?php
 session_start();
 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="descripation" content="curriculum vitae builder">
        <meta name="viewport" content="width=device-width, intial-scale=0.1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap.css">
        <title>CV builder</title>
          
    </head>
    <body >
<?php
 
include_once 'header.php';

?>



          <section class="text-secondary p-5 text-center" style="background-color: #BEDCFE;">

          <div class="container">
          <h1 class="well">Start building your CV</h1>
	      <div class="col-lg-12 well">
	      <div class="row">
				<form id="signup-form" class="form" action="includes/signup.inc.php" method="post">
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
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>General skills</label>
								<input type="text" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Major Skills</label>
								<input type="text" class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Languages</label>
								<input type="text" class="form-control">
							</div>		
						</div>
                        <div class="form-group">
							<label>Achievements</label>
							<textarea rows="3" class="form-control"></textarea>
						</div>
                        <div class="form-group">
							<label>Experience</label>
							<textarea rows="3" class="form-control"></textarea>
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
</html>
