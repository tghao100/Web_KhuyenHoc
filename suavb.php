<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.min.css">
    <title>Sửa Thông Tin Văn Bản - Đề án</title>
</head>
<body>
    

<?php 
    session_start();
    header("Content-Type: text/html; charset-UTF-8");
    include("ketnoi.php");
    $id = $_GET['id'];
    $sql_up = "SELECT * FROM vanban where id=$id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $vanban = $_POST['vanban'];
        $dean = $_POST['dean'];
        
        $linkvb = $_POST['linkvb'];
        $linkda = $_POST['linkda'];
        $sql = "UPDATE vanban SET vanban='$vanban', dean='$dean', linkvb='$linkvb', linkda='$linkda' WHERE id=$id";
        $query = mysqli_query($conn, $sql);
        header('location: vanban.php');
    }  
?>
<div class="container-fluid">
    <div class="card">
        
        <div class="card-header">
            <h2>Sửa Thông Tin Văn Bản - Đề án</h2>
        </div>
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data">
        <div class="form_group">
                    <label for="">Văn Bản</label>
                    <input type="text" name="vanban"  class="form-control" required value="<?php echo $row_up['vanban']; ?>">
                </div>
                <div class="form_group">
                    <label for="">Đề án</label>
                    <input type="text" name="dean"  class="form-control" required value="<?php echo $row_up['dean']; ?>">
                </div>
    
                <div class="form_group">
                    <label for="">Link liên kết Văn Bản</label>
                    <input type="text" name="linkvb"  class="form-control" value="<?php echo $row_up['linkvb']; ?>">
                </div>
                <div class="form_group">
                    <label for="">Link liên kết Đề án</label>
                    <input type="text" name="linkda"  class="form-control" value="<?php echo $row_up['linkda']; ?>">
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div> 
</body>
</html>