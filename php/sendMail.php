<?php
    $user_mail = filter_input(INPUT_POST, 'user_mail', FILTER_VALIDATE_EMAIL);
    $user_name = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
    $user_subject = filter_input(INPUT_POST, 'user_subject', FILTER_SANITIZE_STRING);
    $user_message = filter_input(INPUT_POST, 'user_message', FILTER_SANITIZE_STRING);

    if ($user_mail && $user_name && $user_subject && $user_message) {
        $to = "e.redote@student.helmo.be";
        $headers = "From: " . $user_mail;

        /* Send the mail to the administrator */
        mail($to, $user_subject, $user_message, $headers);

        /* Send a copy of the mail to the user */
        mail($user_mail, $user_subject, $user_message, $headers);
    }
?>