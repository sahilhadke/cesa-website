<?php


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

$to = "sahil.hadke@gmail.com";
$subject = "HTML email";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sahil.hadke@gmail.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);


?>