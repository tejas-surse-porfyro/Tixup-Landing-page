<?php
include("fxn.php");

$fullname = e_d('e', $_POST['full_name']);
$email = e_d('e', $_POST['email']);
$message = e_d('e', $_POST['message']);

$query = "INSERT INTO contact (`fullname`, `email`, `message`) 
          VALUES ('$fullname', '$email', '$message')";

doThis($query);

header("Location: ../index.html");
exit();
?>
