 <?php
$logUsername = $_POST['username'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$email = $_POST['email'];
$logpassword = $_POST['password'];
$cpassword = $_POST['cpassword'];

include 'dbconfig.php';

//sets up the connection parammeters 
$con = mysqli_connect($host, $username, $password,$dbname) or die(mysql_error());
//the query to authorise the

$query = "INSERT INTO `antiquis_testRepo`.`Credentials` (`username`, `password`, `fName`, `lName`, `email`) VALUES ('$logUsername', '$logpassword', '$fName', '$lName', '$email')";

if($logpassword == $cpassword){
    echo "sign up success";
    mysqli_query($con, $query);
    echo "<br>".$query ."<br>";
}

?>