<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.min.css">
    <title>Thêm Học Bổng</title>
</head>
<body>
    

<?php 
     session_start();
    header("Content-Type: text/html; charset-UTF-8");
    include 'ketnoi.php';
    if(isset($_POST['sbm'])){
        $tenhb = $_POST['tenhb'];
        $noidung = $_POST['noidung'];
        $hinhanh = $_FILES['hinhanh']['name'];
        $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
        $link = $_POST['link'];
        $sql = "INSERT INTO hocbong (tenhb,noidung,hinhanh,link) VALUES ('$tenhb', '$noidung','$hinhanh','$link')";
        $query = mysqli_query($conn, $sql);
        move_uploaded_file($hinhanh_tmp, 'assets/img/'.$hinhanh);
        if($query){
            header('location: dshocbong.php');
        }
    }  
?>
<div class="container-fluid">
    <div class="card">
        
        <div class="card-header">
            <h2>Thêm Học Bổng</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="">Học Bổng</label>
                    <input type="text" name="tenhb"  class="form-control" >
                </div>
                <div class="form_group">
                    <label for="">Nội Dung</label>
                    <input type="text" name="noidung"  class="form-control" >
                </div>
                <div class="form_group">
                    <label for="">Hình Ảnh</label>
                    <input type="file" name="hinhanh"  class="form-control">
                </div>
                <div class="form_group">
                    <label for="">Link liên kết</label>
                    <input type="text" name="link"  class="form-control">
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div> 
</body>
</html>