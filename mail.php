<?php
    echo "ABC";
   
    // include_once('includes/connection.php');
    // session_start();
    
    // if(isset($_GET['id']))
    // {
        // $id=$_GET['id'];
    // } else {
        // header("location: login.php");
    // }
          
    // $sql = "SELECT email FROM contacts WHERE id='.$id.'";
    // $result = mysqli_query($db,$sql);
   
    // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // echo $row['email'];
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    //header('Content-Type: application/json');
    
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    
 
    require_once __DIR__ . '/vendor/autoload.php';
   


        // $mpdf = new \Mpdf\Mpdf();

        // $data = '<h2>This should learn.</h2>';
       


        //write pdf
        // $mpdf->WriteHTML($data);

        //pdf saved in a variable
        // $pdf = $mpdf->Output('','S');
        
    
        
        $result = '';
        function sendEmail()
        {
            
            $mail = new PHPMailer(true);
            try {
            $mail->isSMTP();          // Send using SMTP

              $mail->Host = 'sg2plcpnl0006.prod.sin2.secureserver.net';                    // Set the SMTP server to send through
              $mail->Port = 587;

              $mail->SMTPAuth   = true;                                   // Enable SMTP authentication

              $mail->Username   = 'service@photoboothicoutsourced.co.in';                     // SMTP username

              $mail->Password   = 'photobooth';                               // SMTP password
              
              $mail->setFrom('service@photoboothicoutsourced.co.in', 'ICOUTSOURCED LLP');

              $mail->addAddress($_POST["email"], '');     // Add a recipient

                          // Name is optional

              // Attachments

              $mail->addAttachment($_POST["image"], 'attachment.png');         // Add attachments

            // $mail->addAddress("vkgupta857@gmail.com", '');



              // Content

              $mail->isHTML(true);                                  // Set email format to HTML

              $mail->Subject = 'Message from ICOUTSOURCED LLP';

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