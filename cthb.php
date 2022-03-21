<?php 
    session_start();
    header("Content-Type: text/html; charset-UTF-8");
    include 'ketnoi.php';
    $id_hb=$_GET['id_hb'];
    $result = mysqli_query($conn, "SELECT * FROM dslop, danhsachhb  WHERE danhsachhb.id_hb=dslop.id_hb and danhsachhb.id_hb=$id_hb");
    
?>
<?php 
    $id_hb=$_GET['id_hb'];
    $result_id = mysqli_query($conn, "SELECT * FROM dslop, danhsachhb  WHERE danhsachhb.id_hb=dslop.id_hb and danhsachhb.id_hb=$id_hb");
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

        .hocbong h4{
            font-size: 20;
            color: black;
            font-weight: bold;
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
        .nut_dropdown {
            background-color: yellow;
            color: #1f1e1e;
            font-weight: bold;
            padding: 16px;
            font-size: 16px;
            border: none;
            margin-left: 20px;
            }
            
        .dropdown {
            position: relative;
            display: inline-block;
        }
            
        .noidung_dropdown {
            top: 100%;
            left: 20px;
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
            
        .noidung_dropdown a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .noidung_dropdown a:hover {background-color: #ddd;}

        .dropdown:hover .noidung_dropdown {display: block;}
            
        .dropdown:hover .nut_dropdown {background-color: #00bfff;}

        .pad{
            display: flex;
            width: 147px;
            flex-wrap: wrap;
            margin-right: 0;
        }
        .ds{
            color: blue;
            font-size: 18px;
            font-weight: bold;
            padding-top: 30px;
            text-align: center;
            padding-bottom: 0;
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
                <div class="dropdown">
                    <button class="nut_dropdown">Danh Sách Lớp</button>
                    <div class="noidung_dropdown">
                    <?php
                        $i=1;
                        $row=mysqli_fetch_array($result_id);
                        ?>
                        <div class="pad">
                        <div class="list">
                            <a class="dropdown-item" href="cthb.php?id_hb=26">lớp 1</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=27">lớp 2</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=28">lớp 3</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=29">lớp 4</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=30">lớp 5</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=31">lớp 6</a>
                        </div>
                        <div class="list">
                            <a class="dropdown-item" href="cthb.php?id_hb=32">lớp 7</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=33">lớp 8</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=34">lớp 9</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=35">lớp 10</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=36">lớp 11</a>
                            <a class="dropdown-item" href="cthb.php?id_hb=37">lớp 12</a>
                        </div>
                        </div>
                    </div>
                    </div>
    
                    
                        <?php ?>
                <p class="ds">Danh Sách Học Sinh <?php echo $row['lop']?></p>
                <div class="card-body">
            <table class="table" border="3">
                
                <thead class="thead-light">
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ và Tên</th>
                    <th scope="col">Tên Lớp</th>
                    <th scope="col">Lớp</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                       
                        while($row_id=mysqli_fetch_array($result)){
                        ?>
                        
                        <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row_id['hoten']; ?></td>
                        <td><?php echo $row_id['tenlop']; ?></td>
                        <td><?php echo $row_id['lop']; ?></td>
                    </tr>
                        <?php }?>
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