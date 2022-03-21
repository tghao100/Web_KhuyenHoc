<?php
  session_start();
  include 'ketnoi.php';
  if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
  if($username == '' || $password == ''){
      $message = "Vui lòng nhập đầy đủ thông tin đăng nhập!";
      echo "<script type='text/javascript'>alert('$message');</script>";
      
  }else{
    $slq = "select * from admin where username='$username' and password = '$password' ";
    $query = mysqli_query($conn,$slq);
    $num_rows = mysqli_num_rows($query);
    if($num_rows==0){
      $message = "Tên đăng nhập hoặc mật khẩu không đúng!";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }else{
      $_SESSION['username']=$username;
      header('location: index.php');
    }
  }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang đăng nhập</title>
    <link rel="stylesheet" href="./assets/css/dangnhap.css">
</head>
<body>
    <header>
        <div class="form-tt">
            <h2>Đăng nhập</h2>
                <form action="dangnhap.php" method="post">

                    <input type="text" name="username" placeholder="Nhập tài khoản" />
                    <input type="password" name="password" placeholder="Nhập mật khẩu" />
                    <input type="checkbox" id="checkbox" name="checkbox"><label class="checkbox-text">Nhớ đăng nhập lần sau</label>
                    <input type="submit" name="submit" value="Đăng nhập" />
                    <label class="psw-text">Quên mật khẩu</label>
            
                </form>
        </div>
    </header> 
</body>
</html>