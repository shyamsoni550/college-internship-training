<?php require 'feedback.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Feedback Form</title>
  <link rel="stylesheet" href="form2.css">

</head>

<body>

  <?php
  // Defining variables
  $name = $email = $message = "";
  $_SAVE=false;
  // Checking for a POST request
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SAVE=false;
    $name = ($_POST["name"]);
    $email = ($_POST["email"]);
    $message = ($_POST["message"]);
    // echo "<h2>Your Input:</h2>";
    // echo $name;
    // echo "<br>";
    // echo $email;
    // echo "<br>";
    // echo $message;
    if($_CONN){
      $query = "INSERT INTO feedback(name,email,message) VALUES('".$name."','".$email."','".$message."')";
      $result = $conn->multi_query($query);
      $_SAVE=true;
    }
  }
  ?>

  <div class="container">
    <h2>Feedback Form</h2>
    <form action="" method="post" id="feedback-form">
      <br>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit">Submit</button>
    </form>
    <div id="form-messages">
      <?php
        if($_SAVE){
          echo '<p style="color:#ffffff ; text-align:center; margin-top:10px; ">Thank you! Your feedback has been submitted.</p>';
        }
      ?>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script src="form.js"></script> -->
</body>

</html>