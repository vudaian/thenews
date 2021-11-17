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
    <title>The news</title>
    <style>
        .main__content{
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
        }
        .main__content__title{
            font-size: 4rem;
            margin: 40px 0;
            line-height: 4.5rem;
        }
        .main__content__img{
            width: 100%;
            margin: 0 auto;
            display: block;
        }
        .sub-img{
            font-size: 1.5rem;
            margin-top: 10px;
        }
        .main__content__calendar{
            margin-top: 20px;
            display: flex;
            align-items: center;
        }
        .main__content__calendar p{
            margin-left: 10px;
        }
        .main__content__text{
            text-align: justify;
            font-size: 2rem;
            line-height: 4rem;
        }
        .comment{
            margin-top: 20px;
        }
        .comment__title {
            font-size: 2.5rem;
        }
        .comment__inf{
            margin-top: 20px;
        }
        .comment__inf__inp{
            width: 25%;
            outline: none;
            height: 35px;
            border: none;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
        .comment__text{
            margin-top:20px;
        }
        .comment__text__inp{
            width: 50%;
            height: 50px;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            outline: none;
            border: none;
        }
        .comment__btn{
            border: none;
            margin-top: 20px;
            padding: 10px 30px;
            background-color: #000;
            color: #fff;
            border-radius: 3px;
        }
        .recomment{
        }
        .recomment__title{
            font-size: 2.5rem;
            padding: 10px 0;
        }
        .recomment__list{
            list-style: none;
            padding: 5px;
        }
        .recomment__list hr{
            width: 30%;
            margin-left: 0px;
        }
        .recomment__member{
            display: flex;
            font-size: 2rem;
            padding: 15px 0;
        }
        .recomment__member p{
            margin-left: 15px;
        }
        .exchange{
            border-radius: 5px;
            border: 1px solid red;
            width: 100%;
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px 30px;
            background-color: #F9F5F5;
        }
    </style>
</head>
<body>
    <div class="app grid wide">
        <!-- Header -->
        <div class="header">
            <div class="header__navbar">
                <ul class="header__navbar-left m-8 c-12">
                    <li class="header__navbar-left-item">
                        <a href="index.php" class="header__navbar-right-link">Trang chủ</a>
                    </li>
                    <li class="header__navbar-left-item">
                        <a href="index_introduce.php" class="header__navbar-right-link">Giới thiệu</a>
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
                <div class="header__banner-search" style="position: relative;">
                    <input type="text" class="header__banner-search-input" placeholder="Tìm kiếm tại đây...">
                    <span class="header__banner-search-btn">
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
        <div class="main" style=" padding: 50px;">
            <div class="app" style="display: flex;">
                <?php
                    $conn = mysqli_connect("localhost","root","","datanews");
                    if (mysqli_connect_errno()) {
                        echo "Kết nối thất bại " . mysqli_connect_error();
                    }
                    $ID = '';
                    $titlesport = '';
                    $imagesport = '';
                    $timesport = '';
                    $detailsport = '';
                    if (isset($_GET['ID'])) {
                        $ID = $_GET['ID'];
                        $sql = "SELECT * FROM tinthethao WHERE ID = {$ID}";
                        $exe = mysqli_query($conn, $sql);
                        if ($exe) {
                            $result = mysqli_fetch_assoc($exe);
                        }
                    }
                    
                    $conn->close();

                ?>
                <div class="main__content l-9 m-12 c-12">
                        <h1 class="main__content__title"><?php echo $result['titlesport']; ?></h1>
                        <img src="<?php echo $result['imagesport']; ?>" alt="" class="main__content__img">
                        <p class="sub-img"><i>Nguon: Google</i></p>
                        <hr>
                    <div class="main__content__calendar">
                        <i class="fa fa-calendar-alt"></i>
                        <p><?php echo $result['timesport'];  ?></p>
                    </div>
                    <p class="main__content__text"><?php echo $result['detailssport'] ?>; </p>
                </div>
            </div>
            <div class="exchange">
                <div class="recomment">
                    <h2 class="recomment__title">Bình luận</h2>
                    <ul class="recomment__list">
                        <?php
                            $conn = mysqli_connect("localhost","root","","datanews");
                            if (mysqli_connect_errno())
                            {
                            echo "Kết nối thất bại " . mysqli_connect_error();
                            }
                            $query=mysqli_query($conn,"select * from `comment`");
                            while($row=mysqli_fetch_array($query)){
                            ?>
                            <li class="recomment__member">
                                <i class="fas fa-user-edit"></i>
                                <p><b><?php echo $row['name']; ?> : </b></p>
                                <p><?php echo $row['cmt']; ?></p>
                            </li>
                            <hr>
                        </tr>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="comment">
                    <form action="http://localhost/News/index_sport.php?ID=<?php echo $ID;?>" method="POST">
                        <div class="check" style="display: none;">
                            <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    $name = $_POST['name'];
                                    $cmt = $_POST['cmt'];
                                    if ($name == "" || $cmt == "") {
                                        echo "Bạn hãy nhập đầy đủ thông tin của tin tức";
                                    } else {
                                        $serverdetails = "localhost";
                                        $userdetails = "root";
                                        $password = "";
                                        $dbdetails = "datanews";
                                        $conn = new mysqli($serverdetails, $userdetails, $password, $dbdetails);
                                        mysqli_set_charset($conn, 'UTF8');
                                        if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                        }
                                        $sql = "INSERT INTO comment (name, cmt) VALUES ('$name', '$cmt')";
                                        if ($conn->query($sql) === TRUE) {
                                            print "Đã thêm tin";
                                        } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                        }
                                        $conn->close();
                                    }
                                }   
                            ?>
                        </div>
                        <h2 class="comment__title">Ý kiến của bạn</h2>
                            <div class="comment__inf">
                                <div class="comment__inf__name">
                                    <label class="comment__inf__lb" for="yname">Tên của bạn:</label><br>
                                    <input class="comment__inf__inp" type="text" name="name">
                                </div>
                            <div class="comment__text">
                                <label class="comment__text__lb" for="message">Bình luận:</label><br>
                                <input class="comment__text__inp" type="text" name="cmt">
                            </div>
                            <div class="comment__button">
                                <button type="submit" class="comment__btn">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
        <!-- Footer -->
        <div class="footer">
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
                        <li class="footer__content-item">Tin mới</li>
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