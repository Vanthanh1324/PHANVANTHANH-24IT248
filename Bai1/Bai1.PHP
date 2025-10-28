<?php
require "D:\CN_LTW\Lap 8\PHPMailer\src\PHPMailer.php";
require "D:\CN_LTW\Lap 8\PHPMailer\src\SMTP.php";
require "D:\CN_LTW\Lap 8\PHPMailer\src\Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->SMTPDebug = 2; // hoặc = 3 nếu muốn xem chi tiết hơn
$mail->Debugoutput = 'html';

try {
    // $mail->SMTPDebug = 2; // 0,1,2: chế độ debug
    $mail->isSMTP();
    $mail->CharSet = "utf-8";
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $nguoigui = 'ghosvn623@gmail.com';
    $matkhau = 'uvsyosojrxohrjyg'; // mật khẩu ứng dụng Gmail
    $tennguoigui = 'Tao';

    $mail->Username = $nguoigui;
    $mail->Password = $matkhau;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;


    $mail->setFrom($nguoigui, $tennguoigui);

    $to = "thanhtv.24it@vku.udn.vn";
    $to_name = "May";
    $mail->addAddress($to, $to_name);

    $mail->isHTML(true);
    $mail->Subject = 'Gửi thư từ PHP';
    $mail->Body = "<b>Chào bạn!</b><br>Chúc an lành!";

    // File đính kèm (nếu có)
    $mail->addAttachment("D:/CN_LTW/Lap 8/Bai1/capybara.png", "picture");

    // Kết nối an toàn (nếu chạy localhost)
    $mail->smtpConnect([
        "ssl" => [
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        ]
    ]);

    $mail->send();
    echo '✅ Đã gửi mail thành công!';
} catch (Exception $e) {
    echo '❌ Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
}
?>
