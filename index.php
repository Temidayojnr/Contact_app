<?php include('server.php'); 
//fetch data to be updated
	
	if (isset($_GET['Search'])) {
		$search = $_GET['Search'];
		$results = mysqli_query($db, "SELECT * FROM form WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>

	<?php if (isset($_SESSION['msg'])): ?>
	<div class="msg" style="margin: 30px; padding: 10px; border-radius: 5px; color: #000080 background: #dff0d8; border: 1px solid #3c763d; width: 50%; text-align: center;">
		<?php
		 	echo $_SESSION['msg'];
		 	unset($_SESSION['msg']);
		?>
	</div>
	<?php endif ?>


	<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="contact.php">New Contacts</a>
		    <form class="form-inline my-2 my-lg-0" method="GET">
		      <input class="form-control mr-sm-2" name="Search" type="text" placeholder="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
<!--table-->


	<table class="table">
		<thead>
			<tr>
				<th>S/N</th>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Other Details</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				while ($row = mysqli_fetch_array($results)) { ?>

				
				<tr>
					<td><?php echo $row["ID"]; ?></td>
					<td><?php echo $row["firstname"]; ?></td>
					<td><?php echo $row["phone"]; ?></td>
					<td>
						<button type="button" class="btn btn-secondary btn-md">
							<a href="view.php?id=<?php echo$row['ID']; ?>">View Full Details</a>
						</button>
					</td>

					
				</tr>
				<?php }?>
		</tbody>
	</table>





</body>
</html>