<?php 
    header("Content-Type: text/html; charset-UTF-8");
    $sql_hb = "SELECT * FROM danhsachhb";
    $query_hb = mysqli_query($conn, $sql_hb);

    if(isset($_POST['sbm'])){
        $hoten = $_POST['hoten'];
        $tenlop = $_POST['tenlop'];
        $id_hb = $_POST['id_hb'];

        $sql = "INSERT INTO dslop (hoten,tenlop,id_hb) VALUES ('$hoten', '$tenlop', $id_hb)";
        $query = mysqli_query($conn, $sql);
        if($query_hb){
            header('location: index.php?page_layout=danhsach.php');
        }
        
    }  
?>
<div class="container-fluid">
    <div class="card">
        
        <div class="card-header">
            <h2>Thêm Học Sinh</h2>
            
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form_group">
                    <label for="">Họ và Tên</label>
                    <input type="text" name="hoten"  class="form-control" required>
                </div>
                <div class="form_group">
                    <label for="">Tên lớp</label>
                    <input type="text" name="tenlop"  class="form-control" required>
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
                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div> 