<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Your PHP code here
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "miniproject";
  session_start();

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    // Your code to handle form data here
    $name_ = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $landmark = mysqli_real_escape_string($conn, $_POST['landmark']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $bloodtype = mysqli_real_escape_string($conn, $_POST['bloodtype']);


    $sql = "INSERT INTO registration (name_, gender, age, bloodtype, landmark, pincode, email, mobile) VALUES ('$name', '$gender', $age, '$bloodtype', '$landmark', $pincode, '$email', '$mobile')";
  }

  mysqli_close($conn);
} else {
  echo "Invalid request method.";
}
