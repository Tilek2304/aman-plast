<?php

  require("PHPMailer/src/PHPMailer.php");
  require("PHPMailer/src/SMTP.php");
  header('Content-Type: application/json');


  $name = $_POST['nameFF'];
  $phone = $_POST['telFF'];
  $textarea = $_POST['projectFF'];

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "aman.plast.site@gmail.com";
    $mail->Password = "develop06may";
    $mail->SetFrom("aman.plast.site@gmail.com");
    $mail->Subject = 'aman-plast.store';
$mail->Body    = '
        Пользователь оставил данные <br> <br>
    Имя: ' . $name . ' <br><br>
    Номер телефона: ' . $phone . '<br><br>
    Cообщение: ' .$textarea . '';
    $mail->AddAddress("aman.plast.site@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>
