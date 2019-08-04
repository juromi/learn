<?php

// Included header
require '../header/header_out.php';

// define variables and set to empty values
$name = $email = $password = $confirm_password "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Password: <input type="text" name="password">

  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>



</body>
</html>
