<?php
  $team_name = $_POST["team_name"];
  $name1 = $_POST["name1"];
  $name2 = $_POST["name2"];
  $name3 = $_POST["name3"];
  $name4 = $_POST["name4"];
  $name5 = $_POST["name5"];
  $name6 = $_POST["name6"];


  // Connect to the database
  $servername = "twinedb.ch3d33yazhdx.us-west-2.rds.amazonaws.com";
  $username = "admin";
  $password = "Password";
  $dbname = "dodgeball";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Insert the first name into the database
  $sql = "INSERT INTO `teams`(`teamName`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`) VALUES ('$team_name','$name1','$name2','$name3','$name4','$name5','$name6')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

  header("Location:success.html")
?>
