
<?php
session_start();
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Fullstack - Index</title>
    <meta name="description" content="" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="css/nivo-slider.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    </head>
<body>  
<div class="header-area">
        <div class="header-topbar-area-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="header-login posr">
                            <ul>
                                <li class="tenuser">
                                    <u><i><b><?php echo $_SESSION['fullname'];  ?></b></i></u>
                                </li>
                                <li>
                                    <a href="./user.php">My Account </a>
                                </li>
                                <li>
                                    <a class="logout" onclick="showalert2()">Log out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="header-currency-area">
                            <ul>
                                <li>
                                    <div class="header-currency">
                                        <div class="currency-dd posr">
                                            <div class="cur-title1 currency-ttl">
                                                <div class="cur-usd">
                                                    <span></span>
                                                </div>
                                                <div class="cur-text-wrapper cur-cury inner-btn currency-opt">
                                                    <div class="inner-text">
                                                    </div>
                                                    <div class="inner-text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-currency">
                                        <div class="currency-dd posr">
                                            <div class="cur-title2 currency-ttl">
                                                <div class="cur-usd">
                                                </div>
                                                <div class="cur-text-wrapper cur-lanpos inner-btn2 currency-opt">
                                                    <div class="inner-text">
                                                    </div>
                                                    <div class="inner-text">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <ul class="header-social-icon text-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <br>
        <div class="container content">
        <b><h3 class="feedback">Phản hồi ý kiến của bạn cho chúng tôi biết</h3></b>
        <div class="main">
                    <div class="main2">
                    <form action="feedback.php" method="post" class="danhgia">
                        <p>Liên hệ với chúng tôi và chúng tôi sẽ giúp bạn bất cứ điều gì bạn cần</p>
                            <div>
                                <p>Tên của bạn</p>
                                <input class="user" type="text" name="user" value="<?php echo $_SESSION['fullname'];?>" placeholder="" required>
                            </div><br>

                            <div>
                                <p>Nội dung đánh giá (bắt buộc)</p>
                                <textarea class="text" cols="143" rows="10"  name="content" placeholder="Please write something....." required ></textarea>
                            </div>
                            <div><button type="submit" class="submit">Gửi</button></div>
                    </form>
                    </div>
            </div>
        </div>
<br>

            <div class="main-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="footer-content-wrapper">
                        <div class="footer-content">
                            <div id="f-about" class="footer-title def-funderline ftitle-about posr">
                                <h5 class="active-about">About us</h5>
                            </div>
                            <div class="footer-text">   
                                <div class="quick-desc"> F8 là nơi học lập trình miễn phí. 
                                    <p></p>
                                    Các khoá học được đầu tư kỹ lưỡng từ nội dung tới chất lượng hình ảnh và âm thanh.
                                    <p></p>
                                    Học viên có thể học từ con số 0 tới khi trở thành lập trình viên chuyên nghiệp tại đây.
                                </div>
                                <div class="footer-readmore"><a href="about.html">Read more</a>
                                </div>
                            </div>

                            <ul class="footer-social-icon">
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="zmdi zmdi-rss"></i></a>
                                </li>
                                <li><a href="#"><i class="zmdi zmdi-youtube"></i></a>
                                </li>
                                <li><a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-list-wrapper">
                        <div id="f-info" class="footer-title def-funderline ftitle-info posr">
                            <h5 class="active">Domino.</h5>
                        </div>
                        <ul class="footer-list-text jscroll-info">
                            <li><a href="shop.html" title="New products">Giới thiệu</a>
                            </li>
                            <li><a href="single-product.html" title="Best sellers">Câu hỏi thường gặp</a>
                            </li>
                            <li><a href="shop.html" title="Our stores">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-list-wrapper">
                        <div id="f-myac" class="footer-title def-funderline ftitle-myA posr">
                            <h5 class="active">Sản phẩm</h5>
                        </div>
                        <ul class="footer-list-text jscroll-myac">
                            <li><a href="my-account.html" title="My orders">MyCV.vn</a>
                            </li>
                            <li><a href="my-account.html" title="My credit slips">Fullstack.edu.vn </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-list-wrapper">
                        <div id="f-cussve" class="footer-title def-funderline def-funderline2 ftitle-cus posr">
                            <h5 class="active">Hỗ trợ</h5>
                        </div>
                        <ul class="footer-list-text jscroll-cussrve">
                            <li><a href="contact.html" title="Contact us">Hỗ trợ</a>
                            </li>
                            <li><a href="feedback.php" title="Discount">Đóng góp</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main footer area end-->

    <!--Footer bottom area start-->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12 footer-bottom-left">
                    <div class="footer-bottom-text">
                        <p>Design by VNĐ <i class="fa fa-copyright"></i> <a href="https://hastech.company/" target="_blank">ĐHSP.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<body>
<script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/slider/jquery.nivo.slider.pack.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/slider/nivo-active.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.treeview.js"></script>
    <script src="js/main.js"></script>

<?php
$username = "root"; 
$password = "";
$server   = "localhost";
$dbname   = "website";
$connect = mysqli_connect($server, $username, $password, $dbname);

if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
// header('Content-Type: text/html; charset=UTF-8');
$user = "";
//$date = "";
$content = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["user"])) { $user = $_POST['user']; }
   // if(isset($_POST["date"])) { $date = $_POST['date']; }
    if(isset($_POST["content"])) { $content = $_POST['content']; }
    //xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO feedback (user, content) VALUES ('$user', '$content')";
    
    // $sql="UPDATE `chatuser` SET `user`='$user',`content`= '$content'";
    if (mysqli_query($connect, $sql)) {
        echo '<script>alert("Cảm ơn bạn đã đánh giá");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}
//Đóng database
mysqli_close($connect);
?>



<style>
    .content{
        margin:0 auto;
    }
    .user{
        text-align:center;
    }
</style>