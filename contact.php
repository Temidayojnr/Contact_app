<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">New Contacts</a>
		    <form class="form-inline my-2 my-lg-0" method="GET">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="float: right;">Search</button>
		    </form>
		  </div>
		</nav>

	<!--form-->

		<form method="post" action="server.php">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
		  <div class="form-group">
		    <label for="formGroupExampleInput"><strong>First Name</strong></label>
		    <input type="text" class="form-control" minlength="2" id="formGroupExampleInput" required name = "firstname" placeholder="First Name">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2"><strong>Last Name</strong></label>
		    <input type="text" class="form-control" id="formGroupExampleInput2" required name="lastname" placeholder="Last Name">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput"><strong>phone</strong></label>
		    <input type="text" class="form-control" required id="formGroupExampleInput" name="phone" placeholder="phone" >
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput"><strong>Email</strong></label>
		    <input type="email" class="form-control" id="formGroupExampleInput" required name="email" placeholder="Email">
		  </div>

		  <div class="form-group">
		  	<label for="formGroupExampleInput"><strong>Gender</strong></label>
		  	<label class="custom-control custom-radio">
				    <input id="radioStacked1" action="gender.php" name="gender" value="Male" type="radio" class="custom-control-input" >
				    <span class="custom-control-indicator"></span>
				    <span class="custom-control-description">Male</span>
				    
				 	</label>
				  <label class="custom-control custom-radio">
				    <input id="radioStacked2" action="gender.php" required name="gender" value="Female" type="radio" class="custom-control-input" >
				    <span class="custom-control-indicator"></span>
				    <span class="custom-control-description">Female</span>
				  </label>
		  </div>
		  <p class="text-center">
		  	<?php if ($edit_state == false): ?>
		  		<button type="submit" name="save" class="btn btn-primary btn-lg">save</button>
		  	<?php else: ?>
		  		<button type="button" name="cancel" class="btn btn-primary btn-lg">cancel</button>
		  	<?php endif ?>
		  	
		  </p>
	</form>

</body>
</html>