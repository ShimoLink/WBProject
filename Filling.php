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
    <title>Filling the form | Student | Ranking </title>

  </head>


<body>
  <center>
	<div class="container my-5">
		<form method="POST" action="add.php">

      <h1>Please fill this quick detail below</h1>
      <br>
			<label>Your first name</label>
      <input type="text" name="firstname"
      placeholder="Enter your first name" autocomplete="off">
      <br>
      <br>
			<label>Your last name</label>
      <input type="text" name="lastname"
      placeholder="Enter your last name" autocomplete="off">
       <br>
       <br>
			<input type="submit" name="add" class="btn">
      <br>
      <br>
		</form>
	</div>
	<br>
	<div>
    <h2>The table below shows the number of people registered</h2>
    <br>
		<table border="1">
			<thead>
				<th scope="col">Firstname</th>
				<th scope="col">Lastname</th>
				<th></th>
</thead>
  <tbody>

    <!--PHP TO SHOW CONNECTION-->
<?php
  include('conn.php');
  $query=mysqli_query($conn,"SELECT * FROM user");
  while($row=mysqli_fetch_array($query)){
    ?>
    <tr>
      <td><?php echo $row['firstname']; ?></td>
      <td><?php echo $row['lastname']; ?></td>
      <td>
        <!--EDIT AND DELETE ATTACHED-->
        <a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
        <a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
      </td>
    </tr>
    <?php
  }
?>
    </tbody>
  </table>
</div>
</center>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
