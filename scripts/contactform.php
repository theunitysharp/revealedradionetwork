<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "info@revealedradionetwork.com";
    $headers = "From: ".$email;
    $txt = "You have received an E-mail from ".$name.". | Revealed Radio Network Website.\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../index.html?mailsend");
}
