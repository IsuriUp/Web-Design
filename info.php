<?php
$server = "localhost";
$user = "root";
$passwd = "";
$tablename = "customers";

$con = mysqli_connect($server, $user, $passwd) or die("Can't connect to database");
mysqli_select_db($con, "db") or die("Can't connect to database");

$name = $_POST["name"];
$password = $_POST["password"];

$sql = "SELECT COUNT(NIC) FROM $tablename WHERE FullName='$name' AND Password='$password'";
$query = mysqli_query($con , $sql) or die("SQl error");
$array = mysqli_fetch_array($query) or die ("SQL error");

if ($array[0] != 0){
    echo "<p style ='font-size:18'>You are Logged in fashion store</p>";
    header("refresh:1;url=home.html");
}else{
    echo"<p style='font-size:18'>Can't log</p>";
    header("refresh:1;url=index.html");
}

mysqli_close($con);