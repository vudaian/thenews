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
</head>
<body>
    <div class="app grid wide">
        <!-- Header -->
        <div class="header">
            <div class="header__navbar">
                <ul class="header__navbar-left m-8 c-12">
                    <li class="header__navbar-left-item">
                        <a href="#" class="header__navbar-right-link">Trang chủ</a>
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
            <div class="container__silde">
                <div class="slides-show">
                    <img class="mySlides" src="./assets/img/slide1.jpg">
                    <img class="mySlides" src="./assets/img/slide2.png">
                    <img class="mySlides" src="./assets/img/slide3.jpg">
                    <div class="btn-mySlide">
                        <button class="btn-slide-next next-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="btn-slide-next next-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>
                </div>
                <script>
                    var slideIndex = 1;
                    showDivs(slideIndex);
                    
                    function plusDivs(n) {
                    showDivs(slideIndex += n);
                    }
                    
                    function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";  
                    }
                        x[slideIndex-1].style.display = "block";  
                    }
                </script>
            </div>
            <!-- Content -->
            <div class="container__content">
                <div class="container__content-right l-8 m-12 c-12">
                    <div class="container__content-news">
                        <div class="container__content-right-news">
                            <div class="container__content-right-news-title">
                                <h2 class="news-title">
                                    <a href="">Tin mới</a>
                                </h2>
                            </div>
                        </div>
                        <div class="container__content-right-main_content grid">
                            <ul class="container__content-right-list">
                                <?php
                                    $conn = mysqli_connect("localhost","root","","datanews");
                                    if (mysqli_connect_errno())
                                    {
                                    echo "Kết nối thất bại " . mysqli_connect_error();
                                    }
                                    $query=mysqli_query($conn,"select * from `tinmoi`");
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                    <li class="container__content-right-news-item" style="height: 150px;">
                                        <div class="container__content-right-news-item-image">
                                            <img src="<?php echo $row['imagenew']; ?>" alt="" class="container__content-right-news-item-img">
                                        </div>
                                        <div class="container__content-right-news-item-label" style="width: 75%;">
                                            <h3><a href="index_news.php?ID=<?php echo $row['ID']; ?>" style="text-decoration: none; color: #000;"><?php echo $row["titlenew"]; ?></a></h3>
                                            <div class="calendar">
                                                <i class="fa fa-calendar-alt"></i>
                                                <p><?php echo $row["timenew"]; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="container__content-news">
                        <div class="container__content-right-news">
                            <div class="container__content-right-news-title">
                                <h2 class="news-title">
                                    <a href="">Thể thao</a>
                                </h2>
                            </div>
                        </div>
                        <div class="container__content-right-main_content grid">
                            <ul class="container__content-right-list">
                                <?php
                                    $conn = mysqli_connect("localhost","root","","datanews");
                                    if (mysqli_connect_errno())
                                    {
                                    echo "Kết nối thất bại " . mysqli_connect_error();
                                    }
                                    $query=mysqli_query($conn,"select * from `tinthethao`");
                                    while($row=mysqli_fetch_array($query)){
                                    ?>
                                    <li class="container__content-right-news-item" style="height: 150px;">
                                        <div class="container__content-right-news-item-image">
                                            <img src="<?php echo $row['imagesport']; ?>" alt="" class="container__content-right-news-item-img">
                                        </div>
                                        <div class="container__content-right-news-item-label" style="width: 75%;">
                                            <h3><a href="index_sport.php?ID=<?php echo $row['ID']; ?>" style="text-decoration: none; color: #000;"><?php echo $row["titlesport"]; ?></a></h3>
                                            <div class="calendar">
                                                <i class="fa fa-calendar-alt"></i>
                                                <p><?php echo $row["timesport"]; ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container__content-left l-4 m-0 c-0">
                    
                    <div class="container__content-left-menu">
                        <div class="container__content-left-menu-title">
                            <h3>DANH MỤC TIN TỨC</h3>
                        </div>
                        <ul class="container__content-left-list">
                            <li class="container__content-left-list-item">
                                <i class="fas fa-caret-right"></i>
                                <h3>Thể thao</h3>
                            </li>
                            <li class="container__content-left-list-item">
                                <i class="fas fa-caret-right"></i>
                                <h3>Thời trang</h3>
                            </li>
                            <li class="container__content-left-list-item">
                                <i class="fas fa-caret-right"></i>
                                <h3>An ninh xã hội</h3>
                            </li>
                            <li class="container__content-left-list-item">
                                <i class="fas fa-caret-right"></i>
                                <h3>Giáo dục</h3>
                            </li>
                            <li class="container__content-left-list-item">
                                <i class="fas fa-caret-right"></i>
                                <h3>Kinh tế</h3>
                            </li>
                            <li class="container__content-left-list-item">
                                <i class="fas fa-caret-right"></i>
                                <h3>Y tế</h3>
                            </li>
                            <li class="container__content-left-list-item">
                                <i class="fas fa-caret-right"></i>
                                <h3>Kinh doanh</h3>
                            </li>
                            <li class="container__content-left-list-item">
                                <i class="fas fa-caret-right"></i>
                                <h3>Ẩm thực</h3>
                            </li>
                            <li class="container__content-left-list-item">
                                <i class="fas fa-caret-right"></i>
                                <h3>Giải trí</h3>
                            </li>
                        </ul>
                    </div>

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