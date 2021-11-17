<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="app grid wide">
        <!-- Header -->
        <div class="header">
            <div class="header__navbar">
                <ul class="header__navbar-left m-8 c-12">
                    <li class="header__navbar-left-item">
                        <a href="./index.php" class="header__navbar-right-link">Trang chủ</a>
                    </li>
                    <li class="header__navbar-left-item">
                        <a href="./index_introduce.php" class="header__navbar-right-link">Giới thiệu</a>
                    </li>
                    <li class="header__navbar-left-item">
                        <a href="login.php" style="cursor: pointer;" class="header__navbar-right-link">Đăng nhập</a>
                    </li>
                </ul>
                <ul class="header__navbar-right m-4 c-0">
                    <li class="header__navbar-right-item">
                        <a href="" class="header__navbar-left-link">
                            <i class="header__navbar-right-icon fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="header__navbar-right-item">
                        <a href="" class="header__navbar-left-link">
                            <i class="header__navbar-right-icon fab fa-twitter-square"></i>
                        </a>
                    </li>
                    <li class="header__navbar-right-item">
                        <a href="" class="header__navbar-left-link">
                            <i class="header__navbar-right-icon fab fa-google-plus-square"></i>
                        </a>
                    </li>
                    <li class="header__navbar-right-item">
                        <a href="" class="header__navbar-left-link">
                            <i class="header__navbar-right-icon fab fa-pinterest-square"></i>
                        </a>
                    </li>
                    <li class="header__navbar-right-item">
                        <a href="" class="header__navbar-left-link">
                            <i class="header__navbar-right-icon fab fa-youtube-square"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__banner">
                <div class="header__banner-logo">
                    <img class="header__banner-logo-img" src="./assets/img/logo.png" alt="">
                </div>
                <div class="header__banner-search">
                    <input type="text" class="header__banner-search-input" placeholder="Tìm kiếm tại đây...">
                    <span class="header__banner-search-btn" style="position: relative;">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
            <ul class="header__menu m-0 c-0">
                <li class="header__menu-item">
                        <i class="header__menu-item-home-icon fas fa-home"></i>
                    </a>
                </li>
                <li class="header__menu-item">
                    <h3 class="header__menu-item-title">Thể thao</h3>
                    <i class="header__menu-item-icon fas fa-angle-down"></i>
                    <ul class="header__menu-list">
                        <li class="header__menu-list-item">Ngoại hạng Anh</li>
                        <li class="header__menu-list-item">Việt Nam</li>
                        <li class="header__menu-list-item">Laliga</li>
                        <li class="header__menu-list-item">Đức</li>
                    </ul>
                </li>
                <li class="header__menu-item">
                    <h3 class="header__menu-item-title">Thời trang</h3>
                    <i class="header__menu-item-icon fas fa-angle-down"></i>
                    <ul class="header__menu-list">
                        <li class="header__menu-list-item">Tuần lễ thời trang</li>
                        <li class="header__menu-list-item">Show diễn</li>
                        <li class="header__menu-list-item">Xu hướng</li>
                    </ul>
                </li>
                <li class="header__menu-item">
                    <h3 class="header__menu-item-title">An ninh</h3>
                    <i class="header__menu-item-icon fas fa-angle-down"></i>
                    <ul class="header__menu-list">
                        <li class="header__menu-list-item">Biển đảo</li>
                        <li class="header__menu-list-item">Biên giới</li>
                        <li class="header__menu-list-item">An ninh đất nước</li>
                        <li class="header__menu-list-item">An ninh xã hội</li>
                    </ul>
                </li>
                <li class="header__menu-item">
                    <h3 class="header__menu-item-title">Xã hội</h3>
                    <i class="header__menu-item-icon fas fa-angle-down"></i>
                    <ul class="header__menu-list">
                        <li class="header__menu-list-item">Trong nước</li>
                        <li class="header__menu-list-item">Nước ngoài</li>
                        <li class="header__menu-list-item">Vấn đề nóng</li>
                        <li class="header__menu-list-item">Môi trường</li>
                        <li class="header__menu-list-item">Giao Thông</li>
                    </ul>
                </li>
                <li class="header__menu-item">
                    <h3 class="header__menu-item-title">Giải trí</h3>
                    <i class="header__menu-item-icon fas fa-angle-down"></i>
                    <ul class="header__menu-list">
                        <li class="header__menu-list-item">Show truyền hình</li>
                        <li class="header__menu-list-item">Phim hay</li>
                        <li class="header__menu-list-item">Nhạc hay</li>
                        <li class="header__menu-list-item">Showbis</li>
                    </ul>
                </li>
                <li class="header__menu-item">
                    <h3 class="header__menu-item-title">Công nghệ</h3>
                    <i class="header__menu-item-icon fas fa-angle-down"></i>
                    <ul class="header__menu-list">
                        <li class="header__menu-list-item">Công nghệ mới</li>
                        <li class="header__menu-list-item">Điện thoại</li>
                        <li class="header__menu-list-item">Máy tính</li>
                        <li class="header__menu-list-item">Windown</li>
                        <li class="header__menu-list-item">Macbook</li>
                        <li class="header__menu-list-item">Xaomi</li>
                    </ul>
                </li>
                <li class="header__menu-item">
                    <h3 class="header__menu-item-title">Ẩm thực</h3>
                    <i class="header__menu-item-icon fas fa-angle-down"></i>
                    <ul class="header__menu-list">
                        <li class="header__menu-list-item">Món ngon</li>
                        <li class="header__menu-list-item">Dinh dưỡng</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Container -->
            <?php
                if (isset($_POST["submit"])) {
                    // lấy thông tin người dùng
                    $username = $_POST["login"];
                    $password = $_POST["password"];
                    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
                    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
                    $username = strip_tags($username);
                    $username = addslashes($username);
                    $password = strip_tags($password);
                    $password = addslashes($password);
                    $conn = mysqli_connect("localhost","root","","datanews");
                    if (mysqli_connect_errno())
                    {
                    echo "Kết nối thất bại " . mysqli_connect_error();
                    }
                    $sql = "select * from customer where customer_name = '$username' and customer_pass = '$password' ";
                    $query = mysqli_query($conn,$sql);
                    $num_rows = mysqli_num_rows($query);
                    if ($num_rows==0) {
                        echo '<script language="javascript">alert("Sai tên đăng nhập hoặc mật khẩu, hãy nhập lại!"); window.location="login.php";</script>';
                    }else{
                        echo '<script language="javascript">alert("Đã đăng nhập, bấm OK để về trang chủ!"); window.location="index.php";</script>';
                    }
                }
            ?>
            <form class="form-3" onsubmit="return validate()" method="POST">
                <p class="clearfix">
                    <label for="login">Tên đăng nhập</label>
                    <input type="text" name="login" id="login" placeholder="Username">
                </p>
                <p class="clearfix">
                    <label for="password">Mật khẩu</label>
                    <input type="password" name="password" id="password" placeholder="Password">
                </p>
                <p class="clearfix">
                    <label for="password">
                        <a href="register.php" style="display: block; width: 200px;">Bạn chưa có tài khoản?</a>
                    </label>
                </p>
                <p class="clearfix">
                    <input type="submit" name="submit" value="Đăng nhập">
                </p>
            </form>
            <script>
                function validate() {
                var u = document.getElementById("login").value;
                var p = document.getElementById("password").value;
                
                if(u== "") {
                alert("Vui lòng nhập tên!");
                return false;
                }
                if(p == "") {
                alert("Vui lòng nhập mật khẩu!");
                return false;
                }   
                return true;
                }
            </script>
        <!-- Footer -->
        <div class="footer" style="margin-top: 90px;">
            <div class="footer__content">
                <div class="footer__content-right l-4 m-6 c-12">
                    <h3 class="footer__content-title">LIÊN HỆ</h3>
                    <p>Email: contact@nhanh.vn</p><br>
                    <p>Hotline: 1900.2008</p><br>
                    <p>Trụ sở chính: Tòa nhà Vân Hồ, 51 Lê Đại Hành, Hai Bà Trưng, Hà Nội</p><br>
                </div>
                <div class="footer__content-center l-4 m-6 c-12">
                    <h3 class="footer__content-title">VỀ CHÚNG TÔI</h3>
                    <ul class="footer__content-list">
                        <li class="footer__content-item">Trang chủ</li>
                        <li class="footer__content-item">Liên hệ</li>
                        <li class="footer__content-item">Giới thiệu</li>
                    </ul>
                </div>
                <div class="footer__content-left l-4 m-6 c-12">
                    <h3 class="footer__content-title">LIÊN KẾT</h3>
                    <div class="footer__content-left-contact">
                        <i class="icon-facebook fab fa-facebook-square"></i>
                        <h3>FACEBOOK</h3>
                    </div>
                    <div class="footer__content-left-contact">
                        <i class="icon-twitter fab fa-twitter-square"></i>
                        <h3>TWITTER</h3>
                    </div>
                </div>
            </div>
            <div class="footer__end">
                <h3>@ - BY ASS</h3>
            </div>
        </div>
    </div>

    
</body>
</html>