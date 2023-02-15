<?php
$connection = mysqli_connect('localhost','root');

// if($connection){
//     echo "connection established";
// }else{
//     echo "error in connection";
// }

mysqli_select_db($connection,'authentication');

$name = $_POST['fullname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile = $_POST['mob'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$idname = $_POST['idtype'];
$idnumber = $_POST['idnumber'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$dist = $_POST['district'];
$state = $_POST['st'];


$data = "INSERT INTO signup (NAME, DOB, EMAIL, MOBILE, GENDER, PASSWORD, IDNAME, ID, ADDRESS, PINCODE, DISTRICT, STATE) VALUES ('$name', '$dob', '$email', '$mobile', '$gender', '$password', '$idname', '$idnumber', '$address', '$pincode', '$dist', '$state')";

mysqli_query ($connection, $data);
header('location:login.php');

$connection->close();
?>