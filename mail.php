<?php
    $to = 'trangiahao2020@gmail.com';
    $subject = 'Test mail';
    $message = 'Tài trợ';
    $headers = 'From: trangiahao2020@gmail.com';
    if(mail($to, $subject, $message, $headers)){
        echo "đã gửi mail thành công!";
    }else{
        echo "lỗi!";
    }
?>