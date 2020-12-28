<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
// define variables and set to empty values
$user = $pswd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = test_input($_POST["USER"]);
  $pswd = test_input($_POST["PASSWORD"]);
  
}

function test_input($data) {
  $data = trim($user);
  $data = stripslashes($user);
  $data = htmlspecialchars($user);
  return $data;

  $data = trim($pswd);
  $data = stripslashes($pswd);
  $data = htmlspecialchars($pswd);
  return $data;
}

if(!isset($user)) {window.alert("invalid input")
}

if(!isset($pswd)) {window.alert("invalid input")
}
?>
</body>

</html>
