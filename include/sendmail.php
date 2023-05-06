<?php 
    session_start();
    ob_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // send Mail PHP Mailer
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];


        require 'phpmailer/src/Exception.php';
        require 'phpmailer/src/PHPMailer.php';
        require 'phpmailer/src/SMTP.php';

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Host     = "smtp.gmail.com";
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = 'tls';  
        $mail->Port     = 587;  
        $mail->Username = "gppgirlshostel@gmail.com";
        $mail->Password = 'jxcmvisuzsqtlbje';
        $mail->Mailer   = "smtp";

        $mail->SetFrom("gppgirlshostel@gmail.com", $email);
        $mail->addAddress("gppgirlshostel@gmail.com");
        $mail->Subject = $subject;
        $mail->WordWrap = 80;
        $mail->MsgHTML($msg);
        $mail->IsHTML(true);

        if ($mail->Send()) {
            $_SESSION['response_msg'] = "Thanks For Filling Out We Will Contact You Soon!!";
            $_SESSION['response_msg_type'] = "success";
        } 
        else {
            $_SESSION['response_msg'] = "Oops...! Something Went Wrong!";
            $_SESSION['response_msg_type'] = "danger";
        }
        
        header("Location: contact.php");
        ob_end_flush();
        exit;
    }
?>