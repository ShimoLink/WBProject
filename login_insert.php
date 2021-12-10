<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$con = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['login'])){

    if (!empty($_POST['username']) && !empty($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO login_form(username,password) VALUES ('$username','$password')";
        $runi = mysqli_query($con,$query) or die(mysqli_error());

        if ($runi) {
          echo ("<script>alert('Login Successful. Welcome :))'); window.location.href = 'Dashboard.php';</script>");
        }
        else {
          echo "Error!";
        }

    }else{
      echo "all fields required";
    }

}
 ?>
