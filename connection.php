<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "gym_user_info";

// creating connection
$con = mysqli_connect($servername, $username, $pass, $dbname);
if ($con) {
    echo "connection established <br>";
} else {
    echo "connection fail" . mysqli_connect_error();
}

// get value with post

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$locality = $_POST['locality'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];

// sql command to insert value
$query = "INSERT INTO user_information (Name, Age, Gender, Locality, EmailId, Ph_Number) VALUES ('$name', $age, '$gender', '$locality', '$email', $phonenumber)";


// insert into database

$data = mysqli_query($con, $query);
if($data)
{
    echo "Data inserted <br>";
}
else{
    echo "Not";
}
 
    ?>