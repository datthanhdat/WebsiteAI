<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Login || fullstack</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="../../devitems.com/html/raptas-preview/raptas/img/favicon.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/jquery-ui.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="css/nivo-slider.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/meanmenu.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="header-area">
        <div class="header-topbar-area-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="header-login posr">
                            <ul>
                                
                                <li><a href="login.html">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        
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
  


    <div class="cart-top-heading">
        <div class="container">
            <div class="summery-top">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="cart-sumttl">
                            <h3> Đăng nhập | Đăng ký</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login top heading end-->

    <!--login start-->
    <div class="cart-sum-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="progress-summery text-center">
                        <ul class="progress-steps">
                            <li class="steps-item is-active"><a href="#"> Sign in / Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Cart start end-->
    <div class="lp-email-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Tạo tài khoản</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>Vui lòng nhập địa chỉ email của bạn để tạo một tài khoản.</p>
                        </div>
                        <form method="POST" action="dangnhap.php" class="form">
                            <div class="lp-input">
                                <label for="emailleft">Tên đăng nhập</label>
                                <input type="text"  id="username" name="username" placeholder="Username" class="inp" required >
                            </div>
                            <div class="lp-input">
                                <label for="phoneno">Mật khẩu</label>
                                <input type="password" id="pass"     name="pass"     placeholder="Password" class="inp" required>
                            </div>
                            <div class="lp-input">
                                <label for="phoneno">Họ và tên</label>
                                <input type="text" id="name"     name="name"     placeholder="Full name"     class="inp" required>
                            </div>
                            <div class="lp-input">
                                <label for="phoneno">Địa chỉ email</label>
                                <input type="email" id="email"    name="email"    placeholder="Your email"    class="inp" required>
                            </div>
                            <div class=" lp-account-btn btn-ac ">
                            <button name="btn_submit" type="submit" class="button"  value="Register" class="buton" ><i class="fa fa-user" aria-hidden="true"></i> Tạo tài khoản</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="account-creation">
                        <div class="lp-title">
                            <h3>Bạn đã có tài khoản</h3>
                        </div>
                        <div class="lp-left-text">
                            <p>Vui lòng đặt địa chỉ email của bạn đã được sử dụng tại thời điểm đăng ký..</p>
                        </div>
                        <form method="POST" action="dangnhap.php" class="form">
                            <div class="lp-input">
                                <label for="emailleftt">Tên đăng nhập</label>
                                <input type="text" name="username" id="username" placeholder="Username"  required/>
                            </div>
                            <div class="lp-input">
                                <label for="emailleft2">Mật khẩu</label>
                                <input type="password" name="password" id="password" placeholder="Password" required />
                            </div>
                            <div class=" lp-account-btn btn-ac btn-ac2">
                             <button name="btn_submit" type="submit" class="button"  value="Login" class="buton" ><i class="fa fa-lock" aria-hidden="true"></i>Đăng nhập</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Brand slider area css start-->

    <div class="brand-area hp1-brand-area loginp">
        <div class="container">
            <div class="row">
                <div class="brand-slider-wrapper">
                    <div class="active-brand-owl def-owl">
                        <div class="col-md-2">
                            <div class="brand-image">
                                <img src="https://www.abeautifulsite.net/uploads/2007/05/html5-logo.png?width=600&key=09918fc79f9bb9a9a9c40c0f53c1ed6015a63aa0b025e2fa4e31b0a8b6d9182f" alt="Domino" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-image">
                                <img src="https://www.abeautifulsite.net/uploads/2012/12/css3-logo.png?width=600&key=55b56b7cb4f7ad8d740b1bd92848d16a1e07eda4a4a9130eea4cf23e2a554ca7" alt="Domino" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-image">
                                <img src="https://www.abeautifulsite.net/uploads/2014/08/javascript-logo.png?width=600&key=5b53d4e3e1248933a5c2c92a4c5fdf4e11dba0662c0577f64e52b152ad12d77f" alt="Domino" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-image">
                                <img src="https://www.reactgroup.org/wp-content/uploads/2016/09/react-logo-640px-whitebg.png" alt="Domino" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-image">
                                <img src="https://www.abeautifulsite.net/uploads/2014/08/php-logo.png?width=600&key=f52b5da134cb18c68b6260d2b75ae969e3f8b13f1e405c5e3c903eb234c83c05" alt="Domino" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="brand-image">
                                <img src="https://key.com.vn/upload/article/contents/thiet-ke-giao-dien-responsive-voi-bootstrap-1.jpg" alt="Domino" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <li><a href="" title="New products">Giới thiệu</a>
                            </li>
                            <li><a href="" title="Best sellers">Câu hỏi thường gặp</a>
                            </li>
                            <li><a href="" title="Our stores">Liên hệ</a>
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
                            <li><a href="" title="My orders">MyCV.vn</a>
                            </li>
                            <li><a href="" title="My credit slips">Fullstack.edu.vn </a>
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
                            <li><a href="" title="Contact us">Hỗ trợ</a>
                            </li>
                            <li><a href="" title="Discount">Đóng góp</a>
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
                    <p>Design by VNĐ <i class="fa fa-copyright"></i> <a href="" target="_blank">ĐHSP.</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 footer-bottom-right">
                </div>
            </div>
        </div>
    </div>
    <div class="to-top posr">
        <a href="#"><i class="zmdi zmdi-arrow-merge"></i></a>
    </div>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/slider/jquery.nivo.slider.pack.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/slider/nivo-active.js"></script>
    <script src="js/jquery.treeview.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php require_once("connection.php"); ?>
<?php
		
		if (isset($_POST["btn_submit"])) {
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
			  if ($username == "" || $password == "" || $name == "" || $email == "") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
                      $sql="select * from users where username='$username'";
					$kt=mysqli_query($conn, $sql);

					if(mysqli_num_rows($kt)  > 0){
						echo '<script>alert("Tài khoản đã tồn tại trên hệ thống."); window.location="dangnhap.php";</script>';
					}else{
	    				$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
   						mysqli_query($conn,$sql);
				   		echo '<script>alert("Đăng ký thành công"); window.location="dangnhap.php";</script>';
					}
			  }
	}
?>



<?php 
require_once("connection.php");
if (isset($_POST["btn_submit"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from users where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo '<script>alert("Tài khoản hoặc mật khẩu không hợp lệ"); window.location="http://localhost/websiteAI/dangnhap.php";</script>';
		}else{
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
                echo '<script>alert("Xác nhận đăng nhập"); window.location="index.php";</script>';
		}
	}
}
?>