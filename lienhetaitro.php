<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Công Tác Khuyến Học - Học Bổng</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/danhmuc.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4-web/css/all.css">
<style>
    section .containerForm{
     width: 70%;
     padding: 35px 120px;
     background: #fff;
     box-shadow: 0 50px 50px rgba(0,0,0,0.5);
    }
    section .containerForm h2{
        color: #0f3959;
        font-size: 24px;
        font-weight: 500;
    }
    section .formBox{
    
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding-top: 30px;
    }
    section .inputBox{
       padding: 5px;
        margin: 0 0 35px 0;
    }
    section .inputBox.w50{
        width: 40%;
    }
    section .inputBox.w100{
        width: 100%;
    }
    section .inputBox textarea{
        width: 100%;
        padding: 5px 0;
        resize: none;
        font-size: 18px;
        font-weight: 400;
        color: #333;
        border: none;
        border-bottom: 1px solid #777;
        outline: none;
    }
    section .inputBox textarea{
        min-height: 120px;
    }
    section .inputBox input[type="submit"]{
        cursor: pointer;
        background: #0f3959;
        color: #fff;
        border: none;
        max-width: 150px;
        padding: 2px;
    }
    section .inputBox input[type="submit"]:hover{
        background:  #ff568c;
    }
    footer .vb p{
            color: white;
            font-size: 13px;
            display: block;
            position: absolute;
            margin-top: -81px;
            margin-left: 250px;
        }
        footer .vb h1{
            position: absolute;
            font-size: 15px;
            display: inline-block;
            margin-top: -87px;
            margin-left: 250px;
            color: red;
        }
    </style>
    
</head>
<body>
    <header>
            <a href="trangchu.php"><img src="assets/img/logo.png" title="Quản Lý Công Tác Khuyến Học"></a>
            <h1>Quản Lý Công Tác khuyến Học</h1>
        </header>
        <nav>
            <div class="menu">
            <ul>
                    <li><a href="trangchu.php">Trang Chủ</a></li>
                    <li><a href="gt.php" target="_black">Giới Thiệu</a></li>
                    <li class="active"><a href="hocbong.php" target="_black">Học Bổng</a></li>
                    <li><a href="xahoiht.php" target="_black">Xã Hội Học Tập</a></li>
                    <li><a href="tintuc.php" target="_black">Tin Tức-Sự kiện</a></li>    
                </ul>
            </div>
        </nav>
    <div class="main">
        
        <div class="back">
            <h3 class="fas fa-list">    Học Bổng</h3>
            <ul>
                <li><a href="hocbong.php">Học Bổng Khuyến Học</a></li>
                
                <li><a href="lienhetaitro.php" class="active">Liên Hệ Tài Trợ Học Bổng</a></li>
                <li><a href="dshsnhanhb.php" >DS.Học Sinh Nhận Học Bổng</a></li>    
            </ul>
        </div>
        <article>
        <section>
        <?php
            if(isset($_POST['send'])==true){
                Guimail();
        }
        function Guimail(){
                require "assets/php/PHPMailer.php";
                require "assets/php/SMTP.php";
                require "assets/php//Exception.php";
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);
            try{
                $mail->SMTPDebug=0;
                $mail->isSMTP();
                $mail->CharSet="utf-8";
                $mail->Host='smtp.gmail.com';
                $mail->SMTPAuth=true;
                $mail->Username='taitrohocbong2020@gmail.com';
                $mail->Password='taitrohocbong';
                $mail->SMTPSecure='ssl';
                $mail->Port=465;
                $mail->setFrom($_POST['email'],'Khách Hàng');
                $mail->addAddress('trangiahao2020@gmail.com','Hào');
                $mail->isHTML(true);
                $mail->Subject='Thư từ Form liên hệ';
                $noidung=file_get_contents("noidung.txt");
                $noidung=str_replace(
                        ['{name}' , '{email}' ,'{sdt}','{conten}'], [ $_POST['name'], $_POST['email'], $_POST['sdt'], $_POST['conten']], $noidung
                );
                $mail->Body=$noidung;
                $mail->smtpConnect(array(
                    "ssl" => array(
                        "verify_peer" =>false,
                        "verify_peer_name" =>false,
                        "allow_selt_signed" =>true
                    )
                    ));
                $mail->send();
                $message = "Mail đã được gửi thành công, cảm ơn bạn đã liên hệ. Chúng tôi sẽ liên hệ với bạn sớm nhất có thể!";
                echo "<script type='text/javascript'>alert('$message');</script>";

            }catch(Exception $e){
                echo 'Mail không gửi được!', $mail->ErrorInfo;
            }  
        }
    ?>
        <form action="" method="post">
   <div class="container">
    <div class="containerinfo"></div>
       <!-- Bắt đầu đoạn mã mới-->
       <div class="containerForm">
        
           <h2>Vui lòng để lại thông tin tài trợ cho chúng tôi</h2>
           <div class="formBox">
               <div class="inputBox w50">
                    <span>Họ và Tên</span>
                   <input type="text" name="name" id="name" required>
                   
               </div>
               <div class="inputBox w50">
                    <span>Email</span>
                    <input type="email" name="email" id="email" required>
                   
               </div>
               <div class="inputBox w50">
                    <span>Số Điện Thoại</span>
                    <input type="number" name="sdt" id="sdt" required>
                   
               </div>
               <div class="inputBox w100">
                    <span>Lời Nhắn Của Bạn</span>
                    <textarea name="conten" id="conten" required></textarea>
                   
               </div>
               <div class="inputBox w100">
                    <input type="submit" value="send" name="send">
               </div>
           </div>
       </div>
      <!-- Kết thúc đoạn mã mới-->
   </div>
        </form>
 </section>
        </article> 
        
    </div>
    <footer>
            <a href="trangchu.php"><img src="assets/img/logo.png" title="Quản Lý Công Tác Khuyến Học"></a>
            <div class="vb">
                <h1>Quản Lý Công Tác Khuyến Học</h1><br>
                <p>Địa Chỉ: Số 60Đ, Lộ Ngân Hàng, An Khánh, Ninh Kiều, Cần Thơ</p><br>
                <p>Điện Thoại: 0359196513 - 0839032613</p><br>
                <p>Email: qlctkh@gmail.com</p><br>
            </div>
            <div class="icon">
                <p class="icon_lh">Liên Hệ:
                    <a href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjMyMzc5NzIxLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D" target="_black" class="icon_lh"><i class="fab fa-facebook"></i></a>
                    <a href="https://accounts.google.com/ServiceLogin/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2F%3Fhl%3Dvi&followup=https%3A%2F%2Faccounts.google.com%2F%3Fhl%3Dvi&hl=vi&authuser=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin&cid=1&TL=AM3QAYa6k8ctTIEm9aUUWqAjDnP79SGnyLHQg0Hoe4Dl8OcoDeLi5uMMzt0460jq" target="_black" class="icon_lh"><i class="fab fa-google-plus-g"></i></a>
                    <a href="https://www.youtube.com/" target="_black" class="icon_lh"><i class="fab fa-youtube"></i></a>
                </p>
            </div>
        </footer>
</body>
</html>