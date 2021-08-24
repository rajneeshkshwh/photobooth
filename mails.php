<?php
    echo "ABC";
   
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    
 
    require_once __DIR__ . '/vendor/autoload.php';

        $result = '';
        function sendEmail()
        {
            
            $mail = new PHPMailer(true);
            try {
            $mail->isSMTP();          // Send using SMTP

              $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
              $mail->Port = 587;

              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

              $mail->Username   = 'articled.write@gmail.com';                     // SMTP username

              $mail->Password   = 'udgam@reads4411';                               // SMTP password
              
              $mail->setFrom('officialudgam@gmail.com', 'UDGAM');

              $mail->addAddress('iqlipsen@gmail.com', '');     // Add a recipient
              $mail->addAddress('mahesh29sharm@gmail.com', '');     // Add a recipient
              $mail->addAddress('sajalrai96309@gmail.com', '');     // Add a recipient

                          // Name is optional

              // Attachments

            //   $mail->addAttachment($_POST["image"], 'attachment.png');         // Add attachments

            // $mail->addAddress("vkgupta857@gmail.com", '');



              // Content

              $mail->isHTML(true);                                  // Set email format to HTML

              $mail->Subject = 'Message from Udgam';

              $mail->Body    = '<h1>Here is your image.</h1>';

              $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



              $mail->send();

              $result = "Email has been sent";

          } catch (Exception $e) {

              $e->getMessage();
              echo $mail->ErrorInfo;

          }
        //   echo $result;
        }
        sendEmail();
       
      
?>