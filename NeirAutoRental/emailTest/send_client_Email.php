<?php


if (!isset($_SESSION)) {
    session_start();
}

echo "hehe " . $_SESSION["userEmail"];

use PHPMailer\PHPMailer\PHPMailer;

$name = "Neirautorental";
$email = "nia.16ma@gmail.com"; //hada ghir bach kantesti
$subject = "Customer Service Evaluation";
$body = "http://127.0.0.1:8080/niaProgs/projet%20web/ClientEvaluation_Form.php";

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

$mail = new PHPMailer();

//SMTP Settings
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "neirautorental@gmail.com";
$mail->Password = '987123AZWX';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

//Email Settings
$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->addAddress($email);
$mail->Subject = ("($subject)");
$mail->Body = $body;

if ($mail->send()) {
    $status = "success";
    $response = "Email is sent!";
} else {
    $status = "failed";
    $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
}

exit(json_encode(array("status" => $status, "response" => $response)));

?>
