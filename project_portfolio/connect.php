<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resume";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE hireme (
  'name' VARCHAR(30) NOT NULL,
  'email' VARCHAR(30) NOT NULL,
  'contact' INT(50) NOT NULL,
  'message' VARCHAR(50) NOT NULL)";
  
        $name = $_REQUEST['name'];
        $email =  $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $message = $_REQUEST['message'];

        $sql = "INSERT INTO hireme  VALUES ('$name',
        '$email','$contact','$message')";

if ($conn->query($sql) === TRUE) {
  echo "Your message is sent..!";
  echo nl2br("\nName : $name\nEmail : $email\n "
                . "Contact : $contact\nMessage :  $message\n ");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>