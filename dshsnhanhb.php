<?php 
    session_start();
    header("Content-Type: text/html; charset-UTF-8");
    include 'ketnoi.php';
    $result = mysqli_query($conn, "SELECT * FROM dslop, danhsachhb WHERE dslop.id_hb=danhsachhb.id_hb ORDER BY dslop.id_hb ASC") or die ("Lỗi truy vấn");
    
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
    <link href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.min.css">
    <style>
        .hocbong b{
            font-weight: bold;
        }
        .list{
            background-color: blue;
            padding: 10px 24px;
            color: red;
            text-decoration: none;
            margin-bottom: 50px;
        }
        
        footer{
            margin-top: 245px;
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
        .list_item{
            list-style: none;
            background-color: #3909a7;
            text-align: center;
            margin: 0 60px;
            margin-bottom: 20px;
            padding: 0px 80px;
            height: 55px;
            
        }
        .list_item a{
            color: white;
            font-weight: bold;
            text-decoration: none;
            line-height: 55px;
            font-size: 16px;
            
        }
        .list_item a:hover{
            color: yellow;
        }
        .pad{
            display: flex;
            width: 850px;
            flex-wrap: wrap;
            margin-right: 0;
        }
        .seach_btn{
            display: flex;
            justify-content: flex-end;
            margin-right: 40%;
        }
        .btn_tk{
            background-color: blue;
            font-weight: bold;
        }
        .tk{
            padding-bottom: 30px;
            margin-right: -66%;
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
                <li><a href="hocbong.php" >Học Bổng Khuyến Học</a></li>
                <li><a href="lienhetaitro.php">Liên Hệ Tài Trợ Học Bổng</a></li>
                <li><a href="dshsnhanhb.php" class="active">DS.Học Sinh Nhận Học Bổng</a></li>
            </ul>
        </div>
        <article>
                    
                <div class="hocbong">
                <h3 class="fas fa-bookmark"> <b>Danh Sách Học Sinh Nhận Được Học Bổng</b></h3><br>
                <div class="tk">
            <form action="timkiemtc.php">
                <div class="seach_btn">
                    <div class="search">
                        <input type="text" name="tk" placeholder="Tìm Kiếm...">
                    </div>
                    <button class="btn_tk" type="submit" name="btn_submit" >Tìm Kiếm</button>
                </div>
            </form>
        </div>
                    <?php
                        $i=1;
                        $row=mysqli_fetch_array($result);
                        ?>
                    <div class="pad">
                        <div class="list_pad">
                            <ul>
                                <li class="list_item"><a href="cthb.php?id_hb=26">Lớp 1</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=27">Lớp 2</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=28">Lớp 3</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=29">Lớp 4</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=30">Lớp 5</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=31">Lớp 6</a></li>
                        </div>
                        <div class="list_pad">
                                <li class="list_item"><a href="cthb.php?id_hb=32">Lớp 7</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=33">Lớp 8</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=34">Lớp 9</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=35">Lớp 10</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=36">Lớp 11</a></li>
                                <li class="list_item"><a href="cthb.php?id_hb=37">Lớp 12</a></li>
                            </ul>
                        </div>
                    </div>
                    
            </div>
                        
                        <?php  ?>
                </tbody>
            </table>
            
            </div>
    </div>
</div>             
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