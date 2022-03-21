<?php 
    $id = $_GET['id'];
    $sql = "DELETE FROM dslop where id_lop = $id";
    $query = mysqli_query($conn, $sql);
    header('location: index.php?page_layout=danhsach');
?>