<?php

$name = $email = $subject = $mailFrom = $message
$a = true; 
if ($a == true){
    return 'gg';
 }
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input ($_POST['name']);
    $subject = test_input ($_POST['subject']);
    $mailFrom = test_input ($_POST['mail']);
    $message = test_input ($_POST['message']);

    $mailTo = "dennieau.amandine@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "E-mail reçu de la part de" .$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>