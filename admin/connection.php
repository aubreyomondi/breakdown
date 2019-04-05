<?php
$Host_Name="localhost"; 
$Database_User="root"; 
$Password="";
$Database_Name="breakdown";
// Create connection
$conn = new mysqli($Host_Name, $Database_User, $Password, $Database_Name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_select_db($conn,"breakdown");
?>