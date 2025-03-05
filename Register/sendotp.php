<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Konfigurasi SMTP Mailtrap
    $mail->isSMTP();
    $mail->Host       = 'sandbox.smtp.mailtrap.io'; // Sesuaikan dengan Mailtrap
    $mail->SMTPAuth   = true;
    $mail->Username   = '5181dae37ab95b'; // Ganti dengan Mailtrap username
    $mail->Password   = 'ad3297fe4dc6f4'; // Ganti dengan Mailtrap password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 2525; // Port default Mailtrap

    // Pengirim & Penerima
    $mail->setFrom('no-reply@cendekia-academy.com', 'Cendekia Academy');
    $mail->addAddress('bio@gmail.com', 'Bio'); // Ganti dengan email penerima

    // Konten Email
    $mail->isHTML(true);
    $mail->Subject = 'Kode OTP Anda';
    $otp = rand(100000, 999999); // Generate kode OTP
    $mail->Body    = "Kode OTP Anda: <b>$otp</b>";

    $mail->send();
    echo 'Email OTP berhasil dikirim!';
} catch (Exception $e) {
    echo "Gagal mengirim email. Error: {$mail->ErrorInfo}";
}
?>
