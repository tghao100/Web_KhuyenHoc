
<?php 
    session_start();
    header("Content-Type: text/html; charset-UTF-8");
    include 'ketnoi.php';
    if(!isset($_SESSION["username"])){
        header("location: dangnhap.php");
    }
        $sql = "SELECT * FROM hocbong ORDER BY hocbong.id DESC";
        $query=mysqli_query($conn,$sql);
?>
                    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.min.css">
    <title>Danh Sách Học Bổng</title>
</head>
<style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;   
            }

            html{
                font-family: Arial, Helvetica, sans-serif;
            }

            header{
                background-color: blueviolet;
                height: 46px;
                margin-bottom: 10px;
                position: relative;
            }
            h1{
                font-size: 40px;
                color: white;
                text-shadow: 2px 0 0 red, -2px 0 0 red, 0 2px 0 red, 0 -2px 0 red, 1px 1px red, -1px -1px 0 red, 1px -1px 0 red, -1px 1px 0 red;
                font-weight: bold;
                padding-left: 47%;
            }

            .logout{
                width: 100px;
                background-color: yellow;
                color: black;
                font-weight: bold;
                font-size: 20px;
                height: 25px;
                right: 10px;
                top: 10px;
                position: absolute;
            }

            .logout a{
                text-decoration: none;
                color: black;
                line-height: 25px;
                font-weight: bold;
                font-size: 15px;
                justify-content: center;
                display: flex;
            }

            .logout a:hover{
                color: red;
            }

            h3{
                color: green;
                font-weight: bold;
                padding-right: 15px;
            }

            h4{
                color: white;
                font-size: 15px;
                font-weight: bold;
                float: left;
            }
            .seach_btn{
                display: flex;
                justify-content: flex-end;
            }

            .btn_tk{
                background-color: blue;
                font-weight: bold;
            }
        </style>
<body>
    

<div class="container-fluid">
    <div class="card">
        <header>
            <h4>Chào Mừng Bạn Đến Với Trang ADMIN</h4>
            <h1>ADMIN</h1>
        </header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <h3>Menu</h3>
                <button class="navbar-toggler" type="button" row-toggle="collapse" row-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page_layout=danhsach">Danh Sách Học Sinh Nhận Học Bổng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dshocbong.php">Danh Sách Học Bổng</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="gtql.php">Giới Thiệu</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="vanban.php">Văn bản - Đề án</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="hn.php">Hướng Nghiệp</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" href="tintucql.php">Tin Tức</a>
                    </li>              
                    </ul>
                </div>
            </nav>
        <div class="logout">
            <a href="logout.php" title="Logout">Đăng xuất</a>
            </div>
            
        <div class="card-header">
            <h2>Danh Sách Học Bổng</h2>
        </div>
       
        <div class="card-body">
            <table class="table">
                <a class="btn btn-primary" href="themhb.php">Thêm Mới</a>
                <thead class="thead-light">
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Học Bổng</th>
                    <th scope="col">Nội Dung</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Link</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['tenhb']; ?></td>
                        <td><?php echo $row['noidung']; ?></td>
                        <td>
                            <img style="width: 100px;" src="assets/img/<?php echo $row['hinhanh'];?>">

                        </td>
                        <td><?php echo $row['link']; ?></td>
                        <td><a href="suahb.php?id=<?php echo $row['id']; ?>">Sửa</a></td>
                        <td>
                        <a onclick="return Del('<?php echo $row['tenhb'];?>')" href="xoahb.php?id=<?php echo $row['id']; ?>">Xóa</a>
                        </td>
                    </tr>
                        <?php }?>
                    
                    
                </tbody>
            </table>
            
            </div>
    </div>
</div>

<script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa Học Bổng: " + name + "?"); 
    }
</script>
</body>
</html>