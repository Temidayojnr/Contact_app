<?php include('server.php'); 

//fetch data to be updated
	if (isset($_GET['id'])) {
	$id = $_GET['view'];

	$rec = mysql_query($db, "SELECT * FROM form WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$firstname = $record['firstname'];
	$lastname = $record['lastname'];
	$phone = $record['phone'];
	$email = $record['email'];
	$gender = $record['gender'];
	$id = $record['id'];
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
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="text" placeholder="Search">
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
				<th><a href="view.php?view=<?php echo $row['id']; ?>">Other Details</a></th>
			</tr>
		</thead>

		<tbody>
			<?php 
				while ($row = mysqli_fetch_array($results)) { ?>
				<tr>
					<td><?php echo $row['ID']; ?></td>
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><button type="button" class="btn btn-primary btn-md">View Full Details</button></td>
				</tr>
				<?php }?>
			<tr>
				<tr>
				<td>2</td>
				<td>Olamide</td>
				<td>0808808888</td>
				<td><button type="button" class="btn btn-primary btn-md">View Full Details</button></td>
			</tr>
			<tr>
				<td>3</td>
				<td>Osagie</td>
				<td>0808808888</td>
				<td><button type="button" class="btn btn-primary btn-md">View Full Details</button></td>
			</tr>
			<tr>
				<td>4</td>
				<td>Uchechukwu</td>
				<td>0808808888</td>
				<td><button type="button" class="btn btn-primary btn-md">View Full Details</button></td>
			</tr>
			</tr>
		</tbody>
	</table>





</body>
</html>