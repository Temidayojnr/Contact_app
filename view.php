<?php

//echo $_GET['id'];
//die();
	include('server.php');
	$id = $_GET['id'];
	$sql="SELECT * FROM form WHERE ID =$id" ;
	$query = mysqli_query($db, $sql);
	$row = mysqli_fetch_array($query);


	
?>

<!DOCTYPE html>
<html>
<head>
	<title>View contact</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>

	<!--Navigation-->
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

	<header style="text-align: center;"><strong>View Contact</strong></header>

	<table class="table">
		  	<tr><td><strong>firstname</strong></td><td><?php echo $row["firstname"]; ?></td></tr>
		  	<tr><td><strong>lastname</strong></td><td><?php echo $row["lastname"]; ?></td></tr>
		  	<tr><td><strong>phone nmuber</strong></td><td><?php echo $row["phone"]; ?></td></tr>
		  	<tr><td><strong>email</strong></td><td><?php echo $row["email"]; ?></td></tr>
		  	<tr><td><strong>gender</strong></td><td><?php echo $row["gender"]; ?></td></tr>
	</table>

			<form>
				<p class="text-center">
					<a href="update.php?id=<?php echo $id ?>" class="btn btn-primary btn-lg">update</a>
					<a class="btn btn-danger btn-lg" href="?delete=<?php echo $id ?>">Delete</a>
				</p>
			</form>



</body>
</html>