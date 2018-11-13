<?php
$login = $_POST['username'];
$passwd = $_POST['password'];

include 'dbconfig.php';

//sets up the connection parammeters 
$con = mysqli_connect($host, $username, $password,$dbname) or die(mysql_error());
//the query to authorise the
$query = "SELECT * FROM Credentials WHERE username = '$login'";
$results = mysqli_query($con, $query);


echo "<br>".$query ."<br>";
while($row = mysqli_fetch_array($results)) {
  $the_user = $row["username"];
  }
  echo "The users name is  $the_user ";

?>