<?php
session_start();

$post_data = http_build_query(
    array(
        'secret' => "6LerjrwUAAAAAKhSo82ER_Z8h8jZzNS7n_UdS6Au",
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
    )
);
$context  = stream_context_create($opts);
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result = json_decode($response);

if($result->success)
{
    $to = 'climb@mtu.edu'; // Replace with your email
    $subject = 'Contact-Us Form: ' . $_POST['subject']; // Replace with your $subject
    $headers = 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'];

    $message = 'Name: ' . $_POST['name'] . "\n" .
        'E-mail: ' . $_POST['email'] . "\n" .
        'Subject: ' . $_POST['subject'] . "\n" .
        'Message: ' . $_POST['message'];

    mail($to, $subject, $message, $headers);
    if( $_POST['copy'] == 'on' )
    {
        mail($_POST['email'], $subject, $message, $headers);
    }
}
