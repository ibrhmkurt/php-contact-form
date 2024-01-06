<?php

if (!$_POST) {
    echo("Wrong method");
} else {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!$fullName) {
        echo("Full name is required");
    } else {
        if (!$email) {
            echo("Email is required");
        } else {
            if (!$subject) {
                echo("Subject is required");
            } else {
                if (!$message) {
                    echo("Message is required");
                } else {
                    echo("<b>Full name:</b>".$fullName."<br>");
                    echo("<b>E-mail:</b>".$email."<br>");
                    echo("<b>Subject:</b>".$subject."<br>");
                    echo("<b>Message:</b>".$message."<br>");
                    echo("<b>IP:</b>".$ip."<br>");
                }  
            }
        }      
    }
}
 
?>