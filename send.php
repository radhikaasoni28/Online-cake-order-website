<?php
// database connection code
require_once "connection.php";

echo"Hello";
$con = mysqli_connect('localhost', 'root', '','cakedata');

// get the post records
        $unm = $_GET['usernm'];
        $email = $_GET['email'];
        $pass = $_GET['pw'];
        $conpass = $_GET['confirmpw'];
        $btn = $_GET['register'];


// database insert SQL code
$query = "INSERT INTO record VALUES ('$unm','$email','$pass','$conpass')";

// insert in database 
$rs = mysqli_query($con, $query);

if($rs)
{
	header('location:login.php');
}
else

echo "Couldn't insert data ";
?>
