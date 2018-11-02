<?php
$login = $_POST['username'];
$passwd = $_POST['password'];

include 'dbconfig.php';

//sets up the connection parammeters 
$con = mysqli_connect($host, $username, $password,$dbname) or die(mysql_error());
//the query to authorise the
$query = "SELECT * FROM Creds WHERE login = '$login'";
$results = mysqli_query($con, $query);


echo "<br>".$query ."<br>";
while($row = mysqli_fetch_array($results)) {
  $the_user = $row["login"];
  }
  echo "The users name is  $the_user ";

?>