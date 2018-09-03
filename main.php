<?php
$servername = "localhost";
$username = "prateek";
$password = "";
$dbname = "OSPDA";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully\n";
// Create database
// $sql = "CREATE DATABASE OSPDA";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully\n";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

/* Creating Tables */
// $sql = "CREATE TABLE user (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// username VARCHAR(30) NOT NULL,
// password VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// phone VARCHAR(11)
// )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table UserDetail created successfully\n";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["uname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["pwd"];
  // echo $name;
  $sql = "INSERT INTO user (username, password, email, phone)
	VALUES ('$name', '$password', '$email','$phone')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	    header('Location: login.php'); 
	} else {
	    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	    echo '<script language="javascript">';
	      echo 'alert("Any of the values entered is wrong")';
	      echo '</script>';
	}
}
?>