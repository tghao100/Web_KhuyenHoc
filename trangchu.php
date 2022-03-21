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
    <title>Quản Lý Công Tác Khuyến Học</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4-web/css/all.css">

    <style>
        .menu_phu .in{
            background-color: rgb(255, 255, 255);
            border-radius: 2px;
            border: 2px solid rgb(29, 15, 218);
            box-sizing: border-box;
            float: none;
            margin-top: -934%;
            outline: 0;
            padding: 15px 20px;
            vertical-align: baseline;
            color: black;
            box-shadow: 0 0 10px gray;
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

        table .ab a{
            color: black;
            font-weight: none;
            padding-left: 10px;
        }
        li{
            font-size: 15px;
            text-align: justify;
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
                    <li><a href="hocbong.php" target="_black">Học Bổng</a></li>
                    <li><a href="xahoiht.php" target="_black">Xã Hội Học Tập</a></li>
                    <li><a href="tintuc.php" target="_black">Tin Tức-Sự kiện</a></li>
                    
                </ul>
            </div>
        </nav>
    <div class="main">
        
        
        <div class="slider">
            <img src="assets/img/hinh5.jfif" title="Công Tác Khuyến Học Cần Thơ">
        </div>
        <article>
                <h3>Danh Sách Học bổng</h3>
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
                <h3>xã hội học tập</h3>
            <div class="list3">
                <div class="item">
                    <table border="0">       
                        <ul>
                            <?php 
                                $result = mysqli_query($conn, "SELECT * FROM vanban ORDER BY vanban.id DESC") or die ("Lỗi truy vấn");
                                if(mysqli_num_rows($result)>0){
                                while ($r = mysqli_fetch_array($result)):?>
                                    <li class="ab"><a href="<?php echo $r['linkvb'];?>"><?php echo $r['vanban'];?></a></li>
                            <?php endwhile;}?>         
                        </ul>
                    </table>      
                    <h5>Hướng nghiệp</h5>
                    <table border="0">
                        <?php 
                            $result = mysqli_query($conn, "SELECT * FROM huongnghiep ORDER BY huongnghiep.id DESC") or die ("Lỗi truy vấn");
                            
                            while ($r = mysqli_fetch_array($result)){?>
                                <tr>
                                    <th  class="ab"><a href="<?php echo $r['link'];?>"><?php echo $r['tieude']; ?></a> </th>
                                </tr>
                                <tr>
                                    <td class="ac">
                                    <a href="<?php echo $r['link'];?>"><img src="assets/img/<?php echo $r['hinhanh'];?>"></a>
                                    <?php echo $r['noidung']; ?>
                                    </td>
                                
                                    
                                </tr>
                        <?php }?>
                        </table>
                        <div class="qua_trang">
                            <a href=""><i class="fas fa-angle-double-left"></i></a>
                            <a href="">1</a><a href="">2</a><a href="">3 ...</a>
                            <a href=""><i class="fas fa-angle-double-right"></i></a>
                        </div>  
                </div>
            </div>
        </article>
        <div class="menu_phu">
            <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="XixyWHrz"></script>
            <div class="in">
                <h4>Địa chỉ liên hệ</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.8378924582566!2d105.75017402998033!3d10.030232664418625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a088415f041e45%3A0x21378e49dee92a20!2zSOG6u20gVOG7lSA4IEtWNSwgQW4gS2jDoW5oLCBOaW5oIEtp4buBdSwgQ-G6p24gVGjGoSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1634792931295!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <h4>Fanpage</h4>
                <div class="fb-page" data-href="https://www.facebook.com/Qu%E1%BA%A3n-L%C3%BD-C%C3%B4ng-T%C3%A1c-Khuy%E1%BA%BFn-H%E1%BB%8Dc-1212965278794588" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Qu%E1%BA%A3n-L%C3%BD-C%C3%B4ng-T%C3%A1c-Khuy%E1%BA%BFn-H%E1%BB%8Dc-1212965278794588" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Qu%E1%BA%A3n-L%C3%BD-C%C3%B4ng-T%C3%A1c-Khuy%E1%BA%BFn-H%E1%BB%8Dc-1212965278794588">Quản Lý Công Tác Khuyến Học</a></blockquote></div>
            </div>

        </div>
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