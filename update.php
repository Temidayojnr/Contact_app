<?php 
	include('server.php');
	$id = $_GET['id'];
	$sql="SELECT * FROM form WHERE ID =$id" ;
	$query = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($query);
?>



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
		  <a class="navbar-brand" href="contact.php">New Contacts</a>
		    <form class="form-inline my-2 my-lg-0" method="GET">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="float: right;">Search</button>
		    </form>
		  </div>
		</nav>
		<!--header-->
		<header style="text-align: center;"><h1>Update Contact</h1></header>

	<!--form-->

	<form method="post" action="server.php">
		  <div class="form-group">
		    <label for="formGroupExampleInput"><strong>First Name</strong></label>
		    <input type="text" class="form-control" name="firstname" value="<?php echo $row["firstname"]; ?>">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput2"><strong>Last Name</strong></label>
		    <input type="text" class="form-control" name="lastname" value="<?php echo $row["lastname"]; ?>">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput"><strong>phone</strong></label>
		    <input type="text" class="form-control" name="phone" id="formGroupExampleInput" value="<?php echo $row["phone"]; ?>">
		  </div>
		  <div class="form-group">
		    <label for="formGroupExampleInput"><strong>Email</strong></label>
		    <input type="text" class="form-control" name="email" required id="formGroupExampleInput" value="<?php echo $row["email"]; ?>">
		  </div>

		  <div class="form-group">
		  	<label for="formGroupExampleInput"><strong>Gender</strong></label>
		  	<label class="custom-control custom-radio">
				    <input id="radioStacked1" name="gender" <?php echo  ($row["gender"]=='Male') ? 'checked' : ''  ?> value="Male" type="radio" class="custom-control-input">
				    <span class="custom-control-indicator"></span>
				    <span class="custom-control-description">Male</span>
				 	</label>
				  <label class="custom-control custom-radio">
				    <input id="radioStacked2" <?php echo  ($row["gender"]=='Female') ? 'checked' : ''  ?> name="gender" value="Female" type="radio" class="custom-control-input">
				    <span class="custom-control-indicator"></span>
				    <span class="custom-control-description">Female</span>
				  </label>
		  </div>
		  <p class="text-center">
				<input type="hidden" name="id" value="<?php echo $id?>" >
		  	<button type="submit" name="update" class="btn btn-primary btn-lg">update</button>
		    <button type="button" onclick="location.href='view.php'" class="btn btn-primary btn-lg">Back</button>
		  </p>
	</form>

</body>
</html>