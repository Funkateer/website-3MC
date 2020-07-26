<?php

  if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailForm = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "3arabmusiciansclub@gmail.com";
    $headers = "From: ".$mailForm;
    $txt = "You have a message from ".$name."\n\n".$message;

    mail($mailTo, $name, $txt, $headers);
    header("Location:index.html");
  }
?>
