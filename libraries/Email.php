<?php ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;

require_once __DIR__ . '/phpmailer/src/Exception.php';
require_once __DIR__ . '/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/phpmailer/src/SMTP.php';

class Email {
    
    public static function sendEmail($recipient, $subject, $body, $cc, $bcc, $fromEmail, $fromName, $attachment = null) {
        $fromName = !empty($fromName) ? $fromName : $fromEmail;
        $mail = new PHPMailer();
        $mail->IsHTML(true);
        $mail->AddAddress($recipient);
        $mail->SetFrom($fromEmail, $fromName);
        if(!empty($cc)) {
            $mail->addCC($cc);
        }
        if(!empty($bcc)) {
            $mail->addBCC($bcc);
        }
        $mail->AddReplyTo($fromEmail);
        if(!empty($bcc)) {
            $mail->addAttachment($attachment);
        }
        $mail->Subject = $subject;
        $mail->MsgHTML($body);
        if(!$mail->Send()) {
            return false;
        }
        return true;
    }
    
}
?>