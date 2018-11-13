<?php
$logUsername = $_POST['username'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

include 'dbconfig.php';

//sets up the connection parammeters 
$con = mysqli_connect($host, $username, $password,$dbname) or die(mysql_error());
//the query to authorise the

$query = "INSERT INTO `antiquis_testRepo`.`Credentials` (`username`, `password`, `fName`, `lName`, `email`) VALUES ('$logUsername', '$password', '$fName', '$lName', '$email')";
if($password == $cpassword){
    mysqli_query($con, $query);
}

?>