<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "connor.m.schaffer@gmail.com";
  $subject = "Contact Form Submission from $name";
  $headers = "From: $email";
  
  mail($to, $subject, $message, $headers);

  // Redirect back to the contact page after sending the email
  header("Location: index.html");
  exit;
}
?>
