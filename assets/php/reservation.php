<?php
session_start();

require_once('captcha/recaptchalib.php');
$privatekey = "6LerjrwUAAAAAKhSo82ER_Z8h8jZzNS7n_UdS6Au";
$result = recaptcha_check_answer ($privatekey,
                            $_SERVER["REMOTE_ADDR"],
                            $_POST["recaptcha_challenge_field"],
                            $_POST["recaptcha_response_field"]);

if($result->is_valid)
{
    $to = 'climb@mtu.edu';
    $subject = 'Group Event Reservation: ' . $_POST['organization'];
    $headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];

    $message = 'Name: ' . $_POST['name'] . "\n" .
        'Organization: ' . $_POST['organization'] . "\n" .
        'E-mail: ' . $_POST['email'] . "\n" .
        'Phone Number: ' . $_POST['phonenumber'] . "\n" .
        'Date: ' . $_POST['date'] . "\n" .
        'Climbing Length: ' . $_POST['length'] . " hours". "\n" .
        'Group Size: ' . $_POST['groupsize'] . "\n\n" .
        'Additional Info: ' . $_POST['message'];

    mail($to, $subject, $message, $headers);
    mail($_POST['email'], $subject, $message, $headers);
}
