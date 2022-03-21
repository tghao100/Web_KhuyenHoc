<?php
    session_start();
    if(!isset($_SESSION["username"])){
        header("location: dangnhap.php");
    }

    include 'ketnoi.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="../Web_QLCTKH/assets/css/css-bootstrap/bootstrap.min.css">
        <title>Trang ADMIN</title>

        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;   
            }

            html{
                font-family: Arial, Helvetica, sans-serif;
            }

            header{
                background-color: blueviolet;
                height: 46px;
                margin-bottom: 10px;
                position: relative;
            }
            h1{
                font-size: 40px;
                color: white;
                text-shadow: 2px 0 0 red, -2px 0 0 red, 0 2px 0 red, 0 -2px 0 red, 1px 1px red, -1px -1px 0 red, 1px -1px 0 red, -1px 1px 0 red;
                font-weight: bold;
                padding-left: 47%;
            }

            .logout{
                width: 100px;
                background-color: yellow;
                color: black;
                font-weight: bold;
                font-size: 20px;
                height: 25px;
                right: 10px;
                top: 10px;
                position: absolute;
            }

            .logout a{
                text-decoration: none;
                color: black;
                line-height: 25px;
                font-weight: bold;
                font-size: 15px;
                justify-content: center;
                display: flex;
            }

            .logout a:hover{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php 
            if(isset($_GET['page_layout'])){
                switch ($_GET['page_layout']){
                    case 'danhsach':
                        require_once 'danhsach.php';
                        break;
                    case 'them':
                        require_once 'them.php';
                        break;
                    case 'sua':
                        require_once 'sua.php';
                        break;
                    case 'xoa':
                        require_once 'xoa.php';
                        break;
                    
                    default:
                        require_once 'danhsach.php';
                        break;

                }
            }else{
                    require_once 'danhsach.php';
                }
        ?>
    </body>
    </html>