<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"SELECT * FROM user WHERE userid='$id'");
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="thestyle.css">
		<link rel="icon" href="images/favicon.png">
		<title>Editing the form | Student | Ranking </title>

  </head>

<body>
	<center>
	<div class="container2 m-5">
		<h2>You can make your edits here</h2>
		<br>
		<br>
		<form method="POST" action="update.php?id=<?php echo $id; ?>">
			<label>Firstname </label><br /><input type="text" value="<?php echo $row['firstname']; ?>" name="firstname"
			placeholder="Change the firstname">
			<br>
			<br>
			<label>Lastname
			</label><br /><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname"
			placeholder="Change the lastname">
	    <br>
			<br>
			<input type="submit" name="submit" class="btn">
			<button type="submit" formaction="Filling.php" class="back">Back</button>
	  </div>
	</form>
	</center>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
