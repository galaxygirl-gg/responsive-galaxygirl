<?php
  if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $mail_to_send_to = "kayla@galaxygirl.me";
    $from_email = "kayla@galaxygirl.me";
    $headers = "From: $from_email"."\r\n"."Reply-to: $email"."\r\n";
    $txt = "You have received an email!\n\n".$message;

    mail($mail_to_send_to,$subject,$txt,$headers);
    header("Location: index.html?mailSend");
  }
?>