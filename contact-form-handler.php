<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'ibmusa000gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User message: $message.\n";

    $to = "ibmusa000@gmail.com";

    $header = "From: $email_from \r\n";

    $header = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$header);

    header("Location: contact-form.html");
?>