<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){

    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['Password']) && !empty($_POST['Password2'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['Password'];
        $password2 = $_POST['Password2'];

        $query = "INSERT INTO registration_form(name,email,password,password2) VALUES ('$name','$email','$password', '$password2')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if ($run) {
          echo ("<script>alert('Registration Successful. Welcome :))'); window.location.href = 'Dashboard.php';</script>");
        }
        else {
          echo "Error!";
        }

    }else{
      echo "all fields required";
    }

}
 ?>
