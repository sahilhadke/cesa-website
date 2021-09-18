<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';


function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = preg_replace('!\s+!', ' ', $data);
    return $data;
}

$name = validate_input($_POST["name"]);
$email = validate_input($_POST["email"]);
$phone = validate_input($_POST["phone"]);
$event = validate_input($_POST["event"]);
$message = validate_input($_POST["message"]);

$emailBody = <<<EMAIL


  <table style="font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 350px;">
  <tr>
    <th style="padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #04AA6D;
    color: white; border: 1px solid #ddd;
    padding: 8px;" colspan=2>
        CESA 2K21 Registrations
    </th>
  </tr>

  <tr>
    <td style=" border: 1px solid #ddd;
    padding: 8px;">
        Name
    </td><td style=" border: 1px solid #ddd;
    padding: 8px;">
    $name
    </td>
  </tr>

  <tr>
    <td style=" border: 1px solid #ddd;
    padding: 8px;">
        Phone
    </td><td style=" border: 1px solid #ddd;
    padding: 8px;">
    $phone
    </td>
  </tr>

  <tr>
    <td style=" border: 1px solid #ddd;
    padding: 8px;">
        Email
    </td><td style=" border: 1px solid #ddd;
    padding: 8px;">
    $email
    </td>
  </tr>

  <tr>
    <td style=" border: 1px solid #ddd;
    padding: 8px;">
        Event
    </td><td style=" border: 1px solid #ddd;
    padding: 8px;">
    $event
    </td>
  </tr>

  <tr>
    <td style=" border: 1px solid #ddd;
    padding: 8px;">
        Message
    </td><td style=" border: 1px solid #ddd;
    padding: 8px;">
        $message
    </td>
  </tr>
  
</table>
EMAIL;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                   
    $mail->SMTPAuth   = true;     
    $mail->SMTPSecure = 'ssl';                           
    $mail->Username   = 'mrgamez123456789@gmail.com';                   
    $mail->Password   = 'YPDvKQmYeMFGUF3';                             
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('mrgamez123456789@gmail.com');
    $mail->addAddress('sahilhadke@gmail.com');


    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $emailBody;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>