<?php
  // Defining variables
  $name = $email = $message = "";
  // Checking for a POST request
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Sahil"; 
    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $message = ($_POST["message"]);
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $message;
  }
  ?>