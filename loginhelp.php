<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'authentication');

// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$data = "amitchauhan07@yahoo.in";
$data2 = "amitkyc07";

if ($email == $data && $pass == "$data2") {
    header('location:loginsuccessful.php');
}
else {
    echo "Error while logging In";
 
}

mysqli_query ($connection, $data, $data2);


?>