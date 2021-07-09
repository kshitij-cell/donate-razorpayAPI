<?php
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';
	require 'src/Exception.php';
 
    use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer();

    $mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";
	$mail->Username = "aaryathakur315@gmail.com";
	$mail->Password = "Sanitary143@$$";

    $mail->Subject = "Test email using PHPMailer";
    $mail->setFrom('aaryathakur315@gmail.com', 'SPARKS');
    $mail->isHTML(true);
	$mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is". $_POST['hello'] . "html paragraph</p>";
	$mail->addAddress('nityathakur206@gmail.com');
    $mail->send();
    $mail->smtpClose();
?>