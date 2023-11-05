<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $meassage = $_POST['message'];


    $email_from = 'asateama2z@gmail.com';


    $email_subject = "Submission";


    $email_body = "User Name: $name.\n"
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
                


    $to = "abhaysaini221@gmail.com";

    $headers = "Form: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("location: contact page.html");


?>