<!DOCTYPE html>
<html>

<head>
    <title>Layout</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="https://itplus-academy.edu.vn/upload/1346815686_logo_itplus_300x300.jpg">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="./itPlus/b3/homework/files/">
</head>

<body>
    <header>
        <div class="logo1">
            <a href="#">
                <img width="150" src="http://itplus-academy.edu.vn/public/images/logo.png">
            </a>
        </div>
        <div class="tex-header">
            <h2>Trường đại học sư phạm nghệ thuật trung ương</h2>
            <span>National University of Art Education</span>
        </div>
        <div class="logo2">
            <a href="#">
                <img width="150" src="http://portal.ptit.edu.vn/wp-content/uploads/2016/04/ptit-logo.png">
            </a>
        </div>
    </header>
    <nav>
        <a href="#" class="menu">Trang chủ</a>
        <a href="#" class="menu">Giới thiệu</a>
        <a href="#" class="menu">Sản phẩm</a>
        <a href="#" class="menu">Tin tức</a>
        <a href="#" class="menu">Tuyển dụng</a>
        <a href="#" class="menu">Đặt hàng sản phẩm</a>
        <a href="#" class="menu">Đăng ký thực tập</a>
        <a href="#" class="menu">Liên hệ</a>
    </nav>
    <div class="container">
        <div class="left">
            <?php
                include("controller.php");
            ?>
        </div>
        <div class="right">
            <?php
                include("./partial/menu.php");
            ?>
        </div>
    </div>

    <footer>
        <h2>Bản quyền thuộc về ITPlus Academy</h2>
    </footer>
</body>

</html>