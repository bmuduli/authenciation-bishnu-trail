<?php
$connection = mysqli_connect('localhost','root');


mysqli_select_db($connection,'authentication');


$email = $_POST['email'];
$password = $_POST['password'];

$query = $connection->prepare("SELECT * FROM signup WHERE EMAIL = ? AND PASSWORD = ?");
$query->bind_param("ss", $email, $password);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    header('location:home.php');
} else {
    echo "Invalid username or password";
}

$query->close();
$connection->close();

?>