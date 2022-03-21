<?php 
    session_start();
    header("Content-Type: text/html; charset-UTF-8");
    include 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Công Tác Khuyến Học - Xã Hội Học Tập</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4-web/css/all.css">
    

    <style>
        .slideshow img{
            width: 50%;
            height: 300px;
            float: left;
            padding-bottom: 20px;
        }
        .tintuc .ad{
            font-size: 20px;
            padding-bottom: 5px;
        }
        .tintuc .ad a{
            color: brown;
            font-weight: bold;
        }
        .tintuc img{
            height: 50vh;
            width: 100%;
        }
        .tintuc p{
            padding-top: 10px;
            font-size: 18px;
            color: grey;
            float: right;
            text-align: justify;
            padding-right: 0;
            padding-bottom: 15px;
            
        }
        .quangcao1 img{
            margin-top: 600%;
            margin-right: 78%;
            float: right;
            width: 223%;
            height: 79vh;
        }
        .quangcao2, .quangcao1{
            width: 28%;
            margin-top: -400px;
            margin-right: 0;
            float: right;
        }

        .quangcao2 img{
            margin-top: 1238%;
            margin-right: -20%;
            float: right;
            width: 223%;
            height: 79vh;
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
        .quangcao{
            width: 30%;
            float: right;
        }
        article{
            width: 70%;
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
                    <li><a href="trangchu.php" target="_black">Trang Chủ</a></li>
                    <li><a href="gt.php" target="_black">Giới Thiệu</a></li>
                    <li><a href="hocbong.php" target="_black">Học Bổng</a></li>
                    <li><a href="xahoiht.php" target="_black">Xã Hội Học Tập</a></li>
                    <li class="active"><a href="tintuc.php" target="_black">Tin Tức-Sự kiện</a></li>
                    
                </ul>
            </div>
        </nav>
    <div class="main">
        
        <div class="slideshow">
            <img src="assets/img/a1.jpg">
            <img src="assets/img/a3.jpg">
        </div>
        <div class="quangcao">
                <div class="quangcao1">
                       <a href="https://uet.vnu.edu.vn/chuong-trinh-hoc-bong-bac-dai-hoc-panasonic-nam-2021/"><img src="assets/img/a25.jpg"></a>     
                    </div>
                <div class="quangcao2">
                    <a href="http://icd.edu.vn/372/moi-nop-ho-so-2021-chuong-trinh-hoc-bong-france-excellence.html/BPF/vi-VN/CMS_Cat/Cac-hoc-bong-ngoai-ngan-sach/CMS_Detail/1882"><img src="assets/img/a26.jpg"></a>     
                </div>
            </div>
        <article>
                <h3>Bài Mới Nhất</h3>
                
                <div class="tintuc">
                        <?php 
                            $result = mysqli_query($conn, "SELECT * FROM tintuc ORDER BY tintuc.id DESC") or die ("Lỗi truy vấn");          
                            while ($r = mysqli_fetch_array($result)){?>             
                                <div class="ad"><a href="<?php echo $r['link'];?>"><?php echo $r['tieude']; ?></a></div>
                                <div><a href="<?php echo $r['link'];?>"><img src="assets/img/<?php echo $r['hinhanh'];?>"></a></div>
                                <p><?php echo $r['noidung']; ?></p>
                        <?php }?>  
                        <div class="qua_trang">
                            <a href=""><i class="fas fa-angle-double-left"></i></a>
                            <a href="">1</a><a href="">2</a><a href="">3 ...</a>
                            <a href=""><i class="fas fa-angle-double-right"></i></a>
                        </div>      
                </div>
                
        </article>    
    </div>    
    
    <footer>
            <a href="trangchu.php"><img src="assets/img/logo.png" title="Quản Lý Công Tác Khuyến Học"></a>
            <div class="vb">
                <h1>Quản Lý Công Tác Khuyến Học</h1> <br>
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