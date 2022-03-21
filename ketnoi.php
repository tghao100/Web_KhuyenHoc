<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'qlctkh');
    if($conn){
        mysqli_query($conn, "SET NAMES 'UTF8'");
    }else{
        echo 'Ket noi that bai';
    }
?>