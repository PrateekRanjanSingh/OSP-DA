<?php
session_start();
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["uname"];
  $password = $_POST["pwd"];
  // echo $name;
  $sql = "SELECT * FROM user WHERE username = '$name' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	    echo "User login successfully"; 
      global $name,$password;
      $_SESSION["name"] = $name;
      $_SESSION["password"] = $password;
      header('Location: about.php'); 
	} else {
	    // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      echo '<script language="javascript">';
      echo 'alert("Wrong user credentials")';
      echo '</script>';
      // header('Location: login.php');
	}
}
?>