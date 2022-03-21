<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.min.css">
    <title>Thêm Giới Thiệu</title>
</head>
<body>
    

<?php 
     session_start();
    header("Content-Type: text/html; charset-UTF-8");
    include 'ketnoi.php';
    if(isset($_POST['sbm'])){
        $ctkh = $_POST['ctkh'];
        $chucnang = $_POST['chucnang'];

        $sql = "INSERT INTO gioithieu (ctkh,chucnang) VALUES ('$ctkh', '$chucnang')";
        $query = mysqli_query($conn, $sql);
        if($query){
            header('location: gtql.php');
        }
    }  
?>
<div class="container-fluid">
    <div class="card">
        
        <div class="card-header">
            <h2>Giới Thiệu</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="">Công Tác Khuyến Học</label>
                    <input type="text" name="ctkh"  class="form-control" >
                </div>
                <div class="form_group">
                    <label for="">Chức Năng và Nhiệm Vụ</label>
                    <input type="text" name="chucnang"  class="form-control" >
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div> 
</body>
</html>