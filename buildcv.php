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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
        <title>CV builder</title>

		<script type="text/javascript">
			
     $(document).ready(function(){
           var maxField = 10; 
           var addButton = $('.add_button'); 
           var wrapper = $('.field_wrapper'); 
           var fieldHTML = '<div><input class=" form-control" type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img class="float-left" src="sub.png" width="25"/></a></div>'; 
         
		 
		 
		   var x = 1; 
    
    
    $(addButton).click(function(){
        
        if(x < maxField){ 
            x++; 
            $(wrapper).append(fieldHTML); 
        }
    });
    
    
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); 
        x--; 
    });
});



        </script>
          
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
				<form id="signup-form" class="form" action="includes/buildcv.inc.php" method="post">
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
								<input type="text" class="form-control" name="field_name[]">
								<a href="javascript:void(0);" class="add_button" title="Add field"><img src="add.png" width="30"/></a>
							</div>
							

							<div class="col-sm-4 form-group">
								<label>Major Skills</label>
								<input type="text" class="form-control" name="field_name[]">
								<a href="javascript:void(0);" class="add_button" title="Add field"><img src="add.png" width="30"/></a>	
							</div>

							


							<div class="col-sm-4 form-group">
								<label>Languages</label>
								<input type="text" class="form-control" name="field_name[]">
								<a href="javascript:void(0);" class="add_button" title="Add field"><img src="add.png" width="30"/></a>	
							</div>		
						</div>

						
						</div>


						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Achievements</label>
								<input type="text" class="form-control">
							</div>

							<div class="col-sm-6 form-group">
								<label>Experience</label>
								<input type="text" class="form-control">
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
