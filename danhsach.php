<?php 
    header("Content-Type: text/html; charset-UTF-8");
    include 'ketnoi.php';
    $sql = "SELECT * FROM dslop inner join danhsachhb on dslop.id_hb = danhsachhb.id_hb
            ORDER BY dslop.id_hb ASC, dslop.tenlop ASC, dslop.hoten ASC ";
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Học Sinh Nhận Học Bổng</title>

    <style>
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
</head>
<body>

<div class="container-fluid">
    <div class="card">
        <header>
        <h4>Chào Mừng Bạn Đến Với Trang ADMIN</h4><h1>ADMIN</h1></header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <h3>Menu</h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="gtadmin.php">Giới Thiệu</a>
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
            <h2>Danh Sách Học Sinh Nhận Học Bổng</h2>
        </div>
        <div class="tk">
            <form action="timkiem.php">
                <div class="seach_btn">
                    <div class="search">
                        <input type="text" name="tk" placeholder="Nhập Tìm Kiếm...">
                    </div>
                    <button class="btn_tk" type="submit" name="btn_submit" >Tìm Kiếm</button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <table class="table">
                <a class="btn btn-primary" href="index.php?page_layout=them">Thêm Mới</a>
                <thead class="thead-light">
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ và Tên</th>
                    <th scope="col">Tên Lớp</th>
                    <th scope="col">Lớp</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                        $i=1;
                        while($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['hoten']; ?></td>
                                <td><?php echo $row['tenlop']; ?></td>
                                <td><?php echo $row['lop']; ?></td>
                                <td>
                                    <a href="index.php?page_layout=sua&id=<?php echo $row['id_lop']; ?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return Del('<?php echo $row['hoten'];?>')" href="index.php?page_layout=xoa&id=<?php echo $row['id_lop']; ?>">Xóa</a>
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
        return confirm("Bạn có chắc chắn muốn xóa học sinh: " + name + "?"); 
    }
</script>
</body>
</html>