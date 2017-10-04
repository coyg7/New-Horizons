<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    //Load composer's autoloader
    require 'vendor/autoload.php';


    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $cmessage = $_POST['cmessage'];
    $cphoneno = $_POST['cphoneno'];
    echo $cname;
    echo $cemail;
    echo $cmessage;
    echo $cphoneno;

    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        
        //$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
        $mail->Host = 'smtp.gmail.com';

        $mail->SMTPAuth = true;                               // Enable SMTP authentication

        //$mail->Username = 'user@example.com';                 // SMTP username
        //$mail->Password = 'secret';                           // SMTP password

        $mail->Username = 'sachit.1si13cs104@gmail.com';                 // SMTP username
        $mail->Password = 'mesutozil11';                           // SMTP password

        //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        //$mail->Port = 587;                                    // TCP port to connect to

        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($cemail, $cname);
        //$mail->addAddress('joe@example.net', 'Joe User');

             // Add a recipient
        $mail->addAddress('ssachit3761@gmail.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Contact Us Form Application';
        $mail->Body    = $cmessage.'<br>'.$cphoneno.'<br><br><br>'.'Please reply to:'.'<br>'.$cemail;

        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if($mail -> send()){

             header('location:../index.php');
          

        }
        else{
            echo 'Something went wrong';
        }
        
    } catch (Exception $e) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
?>




<script type="text/javascript">
function Confirm(){
alert("Thank you for getting in touch"); 
form.submit();
}

