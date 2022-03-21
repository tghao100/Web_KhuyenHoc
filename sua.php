<?php 
    $id = $_GET['id'];
    $sql_hb = "SELECT * FROM danhsachhb";
    $query_hb = mysqli_query($conn, $sql_hb);

    $sql_up = "SELECT * FROM dslop where id_lop=$id";
    $query_up = mysqli_query($conn, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $hoten = $_POST['hoten'];
        $tenlop = $_POST['tenlop'];
        $id_hb = $_POST['id_hb'];

        $sql = "UPDATE dslop SET hoten='$hoten', tenlop='$tenlop', id_hb=$id_hb WHERE id_lop=$id";
        $query = mysqli_query($conn, $sql);
        header('location: index.php?page_layout=danhsach');
    }  
?>
<div class="container-fluid">
    <div class="card">
        
        <div class="card-header">
            <h2>Sửa Thông Tin Học Sinh</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="">Họ và Tên</label>
                    <input type="text" name="hoten"  class="form-control" required value="<?php echo $row_up['hoten']; ?>">
                </div>
                <div class="form_group">
                    <label for="">Tên lớp</label>
                    <input type="text" name="tenlop"  class="form-control" required value="<?php echo $row_up['tenlop']; ?>">
                </div>
                <div class="form_group">
                    <label for="">Lớp</label>
                   <select class="form-control" name="id_hb" required>
                       <?php 
                            while($row_hb = mysqli_fetch_assoc($query_hb)){?>
                            <option value="<?php echo $row_hb['id_hb'];?>"><?php echo $row_hb['lop']?></option>   
                    <?php }?>
                   </select>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div> 