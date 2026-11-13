 
<?php
 include($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
 $mymail = get_field('field_5a2fd3b776c9c', 24846);
    
 
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

// Принимаем данные с формы

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$form_name=$_POST['form_name'];
$form_name1=$_POST['form_name1']; 


// ----------------------------конфигурация-------------------------- //
//$mail->SMTPDebug = 3;
 /*                         // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
    */
 
 
$mail->setFrom('info@zelmatik.ru', 'Заявка с сайта');

$mail->addAddress($mymail); 

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заказ с сайта';

//---------------------------------------------------------------------- //


// ----------------------------РџРёСЃСЊРјРѕ РєР»РёРµРЅС‚Сѓ-------------------------- //
$mail->Body = "Добрый день, $name!\n
Ваша заявка принята, наши менеджеры свяжутся с вами в ближайшее время.
";

$date=date("d.m.y"); // число.месяц.год
$time=date("H:i"); // часы:минуты:секунды


$msg = "<br><p><strong>Форма с сайта:</strong></p>";
$msg .="<p>Форма: $form_name  </p>\r\n";
$msg .="<p>Имя: $name </p>\r\n";
$msg .="<p>Телефон: $phone </p>\r\n";
$msg .="<p>Email: $email </p>\r\n";
$msg .="<p>Сообщение: $message </p>\r\n";
$msg .="<p>Страница: $form_name1  </p>\r\n";

$mail->Body    = $msg;



/* Отпарвляем письмо */
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
};







?>