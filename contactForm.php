<?php

  if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailForm = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = $_POST['3arabmusiciansclub@gmail.com'];
    $headers = "from: ".$mailForm;
    $txt = "You have a message ".$name".\n\n".$message;

    mail($mailTo, $name, $txt, $headers);

    header("Location:index.html?MessageSent")
  }
?>