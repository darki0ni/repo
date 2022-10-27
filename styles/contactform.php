<?php

    if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "dennieau.amandine@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "E-mail reçu de la part de" .$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>