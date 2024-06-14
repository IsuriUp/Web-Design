<?php
$server = "localhost";
$user = "root";
$passwd = "";
$tablename = "customers";

// Connect to the database named 'db'
$con = mysqli_connect($server, $user, $passwd) or die("Can't connect to database");
mysqli_select_db($con, "db") or die("Can't connect to database");


// Get data from customer registration form by $_POST array
$fullName = $_POST["FullName"];
$nic = $_POST["NIC"];
$email = $_POST["Email"];
$mobile = $_POST["MobileNumber"];
$password = $_POST["Password"];

// Checking is this customer already exist in the database.
$sql = "SELECT COUNT(NIC) FROM $tablename WHERE NIC='$nic'";
$query = mysqli_query($con, $sql) or die("SQL error");
$outarray = mysqli_fetch_array($query) or die("SQL error");

// If customer doesn't exist in the database add the new customer to the database.
if ($outarray[0] == 0) {
    $sql = "INSERT INTO $tablename (FullName, NIC, Email, MobileNumber, Password) VALUES 
    ('$fullName', '$nic', '$email', '$mobile', '$password')";
    $query = mysqli_query($con, $sql) or die("SQL error");

    echo "<p style='font-size: 18'>User added</p>";
    header("refresh:1;url=index.html");
} else {
    echo "<p style='font-size: 18'>User already exist</p>";
    header("refresh:1;url=joinus.html");
}

mysqli_close($con);
?>