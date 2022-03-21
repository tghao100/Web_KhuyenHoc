<?php 
    session_start();
    header("Content-Type: text/html; charset-UTF-8");
    include 'ketnoi.php';
    if(isset($_REQUEST["btn_submit"])){
        $tk= addslashes($_GET['tk']);
    }
        // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
        // Đếm kết quả trả về khi tìm kiếm
    $sql = "SELECT * FROM dslop inner join danhsachhb on dslop.id_hb = danhsachhb.id_hb WHERE hoten like '%$tk%' OR tenlop like '%$tk%' OR lop like '%$tk%'";
    $query=mysqli_query($conn,$sql);
    $num = mysqli_num_rows($query);
    if (!$num > 0 ){
        $message = "Xin lỗi không có thông tin hiển thị!";
        echo "<script type='text/javascript'>alert('$message');</script>";
     }
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-5.15.4-web/css/all.css">
    <link href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.min.css">
    <title>Tìm Kiếm Thông Tin</title>

    <style>
        .hm{
            text-decoration: none;
            color: black;
            font-weight: bold;
            background-color: blue;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .hm:hover{
            background-color: yellow;
            text-decoration: none;
            color: red;
            font-weight: bold;
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
    </style>
</head>
<body>
<div class="tk">
            <form action="timkiem.php">
                <div class="seach_btn">
                    <div class="search">
                        <input type="text" name="tk" placeholder="Tìm Kiếm...">
                    </div>
                    <button class="btn_tk" type="submit" name="btn_submit" >Tìm Kiếm</button>
                </div>
            </form>
        </div>
<div class="card-body">
            <table class="table" border="3">
                
                <thead class="thead-light">
                    <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ và Tên</th>
                    <th scope="col">Lớp</th>
                    <th scope="col">Khối</th>
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
            
            <a class="hm" href="index.php?page_layout=danhsach">Home</a>
            </div>
            <script>
    function Del(name){
        return confirm("Bạn có chắc chắn muốn xóa Học Bổng: " + name + "?"); 
    }
</script> 
</body>
</html>