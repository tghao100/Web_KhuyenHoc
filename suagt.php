<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.min.css">
    <title>Sửa Giới Thiệu</title>
</head>
<body>
    

<?php 
    session_start();
    header("Content-Type: text/html; charset-UTF-8");
    include("ketnoi.php");
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM gioithieu where id=$id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $ctkh = $_POST['ctkh'];
        $chucnang = $_POST['chucnang'];
        
        $sql = "UPDATE gioithieu SET ctkh='$ctkh', chucnang='$chucnang' WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        header('location: gtql.php');
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
                    <label for="">Công Tác KH</label>
                    <input type="text" name="ctkh"  class="form-control"  value="<?php echo $row_up['ctkh']; ?>">
                </div>
                <div class="form_group">
                    <label for="">Chức Năng và Nhiệm Vụ</label>
                    <input type="text" name="chucnang"  class="form-control"  value="<?php echo $row_up['chucnang']; ?>">
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div> 
</body>
</html>