<?php
echo "agh"
// Connect to the database
$servername = "twinedb.ch3d33yazhdx.us-west-2.rds.amazonaws.com";
$username = "admin";
$password = "Password";
$dbname = "dodgeball";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve all data from the table
$sql = "SELECT * FROM `teams`";

// Execute the query and store the result
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
