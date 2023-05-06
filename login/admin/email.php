<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    // $name = htmlentities($_POST['name']);
    // $email = htmlentities($_POST['email']);
    $student_mail = htmlentities($_POST['student_mail']);
    $parent_email = htmlentities($_POST['parent_mail']);
    // $subject = htmlentities($_POST['subject']);
    $subject = htmlentities("Leave Application Info");
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'gppgirlshostel@gmail.com';
    $mail->Password = 'jxcmvisuzsqtlbje';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom("gppgirlshostel@gmail.com", "GPP Hostel");
    $mail->addAddress($parent_email);
    $mail->addAddress($student_mail);
    $mail->Subject = ("$subject");
    $mail->Body = $message;
    $mail->send();

    echo "<script>alert('Mail Sent Sucessfully');document.location='./stu-leave-application.php'</script>";

    
    // echo '<script type="text/javascript">';
    // echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
    // echo '</script>';

    // header("Location: ./stu-leave-application.php");
}
?>
