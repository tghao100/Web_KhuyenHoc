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
    <title>Quản Lý Công Tác Khuyến Học - Học Bổng</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/danhmuc.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4-web/css/all.css">
    <style>
        table .ab{
            font-size: 13px;
            padding: 8px;
            float: left;
            padding-left: 10px;
            color: blue;
            padding-top: 5px;
            font-weight: bold;

        }
        table .ac{
            top: 50px;
            float: left;
            width: 90%;
            padding-right: 10px;
            padding-bottom: 25px;
            color: rgb(124, 116, 116);
            font-size: 14px;
            text-align: justify;
        }

        table .af{
            float: left;
            color: blue;
            font-size: 13px;
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
                <li><a href="hocbong.php" class="active">Học Bổng Khuyến Học</a></li>
                
                <li><a href="lienhetaitro.php">Liên Hệ Tài Trợ Học Bổng</a></li>
                <li><a href="dshsnhanhb.php" >DS.Học Sinh Nhận Học Bổng</a></li>
            </ul>
        </div>
        <article>
            <div class="hocbong">
                <h3 class="fas fa-bookmark"> <b>HỌC BỔNG TÀI TRỢ:</b></h3><br>
                <div class="list2">
                    <div class="item">
                        <table border="0">
                        <?php 
                            $result = mysqli_query($conn, "SELECT * FROM hocbong ORDER BY hocbong.id DESC") or die ("Lỗi truy vấn");
                            
                            if(mysqli_num_rows($result)>0){
                            while ($r = mysqli_fetch_array($result)):?>
                                <tr>
                                    
                                    <th  class="ab"><a href="<?php echo $r['link'];?>"><?php echo $r['tenhb'];?></a></th>
                                </tr>
                                <tr>
                                    <td class="ac">
                                        <a href="<?php echo $r['link'];?>"><img src="assets/img/<?php echo $r['hinhanh'];?>"></a>
                                        <?php echo $r['noidung']; ?>
                                    </td>   
                                </tr>
                        <?php endwhile;}?>
                            
                        </table>
                       
                        <div class="qua_trang">
                            <a href=""><i class="fas fa-angle-double-left"></i></a>
                            <a href="">1</a><a href="">2</a><a href="">3 ...</a>
                            <a href=""><i class="fas fa-angle-double-right"></i></a>
                        </div>                      
                    </div>
                </div>
                    <h3 class="fas fa-bookmark"> <b>HỌC BỔNG KHÁC:</b></h3><br>
                <div class="dshocbongkhac">
                <table border="0">
                        <?php 
                            $result = mysqli_query($conn, "SELECT * FROM hocbong ORDER BY hocbong.id DESC") or die ("Lỗi truy vấn");
                            
                            while ($r = mysqli_fetch_array($result)){?>
                                <tr>
                                    
                                    <th  class="af"> <a href="<?php echo $r['link'];?>"><?php echo $r['tenhb']; ?></a></th>
                                </tr>
                        <?php }?>
                        </table>
                </div>
            </div>
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