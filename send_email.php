<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'algirdas@devs.lt';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo 'Message sent successfully!';
  } else {
    echo 'Sorry, there was an error sending your message.';
  }
}
?>
