
<?php
session_start();
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<?php
	if(isset($_GET['ac']) && $_GET['ac']=='dangxuat'){
	unset($_SESSION ['username']);
	header('location:trangchu.html');
	}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
                                    <!-- <u><i><b><?php echo $_SESSION['fullname'];  ?></b></i></u> -->
                                </li>
                                <li>
                                    <a href="./user.php">Tài khoản </a>
                                </li>
                                <li>
                                    <a class="logout" onclick="showalert2()">Đăng xuất</a>
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
                            <li><a target="_blank" class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u=http://drawing.epizy.com/demo/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://twitter.com/share?text=Init%20HTML%20%E2%80%93%20Kh%E1%BB%9Fi%20%C4%91%E1%BA%A7u%20d%E1%BB%B1%20%C3%A1n%20Web&amp;url=http://twitter.com/share?text=Init%20HTML%20%E2%80%93%20Kh%E1%BB%9Fi%20%C4%91%E1%BA%A7u%20d%E1%BB%B1%20%C3%A1n%20Web&amp;url=https://phuckenta.github.io/AloDraw/""><i class="fa fa-twitter"> </i></a></li>
                            <li><a href="https://www.pinterest.com/pin/create/button/?url=https://www.inithtml.com/&amp;media=http://localhost/websiteAI/trangchu.html/wp-content/themes/init-html-theme/screenshot.jpg&amp;description=Init%20HTML%20%E2%80%93%20Kh%E1%BB%9Fi%20%C4%91%E1%BA%A7u%20d%E1%BB%B1%20%C3%A1n%20Web"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <div class="slider-container">
            <div id="mainSlider" class="nivoSlider slider-image">
                <img src="https://fullstack.edu.vn/assets/images/home-img.jpg" alt="main slider" title="#htmlcaption1" />
                <img src="https://cdn.techinasia.com/wp-content/uploads/2018/07/business-code-coding-943096.jpg" alt="main slider" title="#htmlcaption2" />
            </div>
    </div>
    </div>


    <div class="free-offer ptb-95">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="free-offer-wrapper free-border">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-free-offer text-center">
                                    <div class="title-head">
                                        <img src="./images/imgWeb/download.png" alt="" width="20%">
                                    </div>
                                    <p></p>
                                    <div class="free-offer-text">
                                        <p>Trên 7.000 học viên</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-free-offer def-virticle-line posr text-center">
                                    <div class="title-head">
                                        <img src="./images/imgWeb/download (1).png" alt="" width="20%">
                                    </div>
                                    <p></p>
                                    <div class="free-offer-text">
                                        <p>3+ khóa học dành cho bạn</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-free-offer def-virticle-line posr text-center">
                                    <div class="title-head">
                                        <img src="./images/imgWeb/download (2).png" alt="" width="20%">
                                    </div>
                                    <p></p>
                                    <div class="free-offer-text">
                                        <p>Học bất cứ lúc nào, bất cứ nơi đâu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="middle-discount-area">
        <div class="container">
            <div class="row image">
                <div class="col-md-4">
                    <div class="card">
                       <a href="./hoctap/hoctap.html">
                       <img class="card-img-top" src="./images/sddefault.jpg" alt="">
                       </a>
                        <div class="card-body">
                            <p></p>
                            <h3 class="card-title"><b>HTML, CSS từ zero đến Hero</b></h3>
                            <p class="card-text">Khóa học đề cao việc thực hành qua những ví dụ trong thực tế giúp học viên nhanh chóng xây dựng được giao diện website</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <a href="./hocjs/hocjs.html">
                        <img class="card-img-top" src="./images/sddefault (1).jpg" alt="">
                        </a>
                        <div class="card-body">
                            <p></p>
                            <h3 class="card-title"><b>Lập trình Javascript cơ bản</b></h3>
                            <p class="card-text">Khóa học Javascript cơ bản dành cho mọi đối tượng bắt đầu học lập trình với nội dung ngắn gọn, dễ hiểu và hệ thống làm bài tập phong phú</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <a href="./python/python.html">
                        <img class="card-img-top" src="./images/python.png" alt="">
                        </a>
                        <div class="card-body">
                            <p></p>
                            <h3 class="card-title"><b>Lập trình Python </b></h3>
                            <p class="card-text">Khóa học này sẽ giúp bạn nắm chắc tư tưởng cốt lõi của việc xây dựng một chatbot đơn giản có thể giao tiếp bằng hình thức giọng nói và áp dụng trong thực tế</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
   
    <!--Blog area start-->
    <div class="homeone-blog-area hp1-indicator">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="blog-left">
                        <div class="blog-small-text">
                            <p>Whats going on</p>
                        </div>
                        <div class="blog-small-headline">
                            <div class="section-title section-title-blog title-head">
                                <a href="#"><h3>Sản phẩm sau khi hoàn thành khóa học</h3></a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <p>Những sản phẩm các bạn sẽ làm được sau khi hoàn thành khóa học tại <b>Fullstack</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="homeone-blog-wrapper">
                            <div class="active-blog-owl def-owl">
                                <div class="col-md-4">
                                    <div class="single-blog">
                                        <div class="blog-image-wrapper overlay-margin-10 posr">
                                            <div class="blog-image blog-img-stlye1">
                                                <a href="single-blog.html"><img src="images/blog/bb1.jpg" alt="domino" />
                                                </a>
                                            </div>
                                            <div class="blog-hover-text def-hovereff">
                                                <div class="text-top deft-underline3 posr">
                                                    <a href="single-blog.html"><h4>Website Giới Thiệu Doanh Nghiệp</h4></a>
                                                </div>
                                                <div class="text-bottom">
                                                    <span class="blog-contact">Fullstack.vn</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-blog">
                                        <div class="blog-image-wrapper overlay-margin-10 posr">
                                            <div class="blog-image blog-img-stlye1">
                                                <a href="single-blog-slider.html"><img src="images/blog/bb4.jpg" alt="domino" />
                                                </a>
                                            </div>
                                            <div class="blog-hover-text def-hovereff">
                                                <div class="text-top deft-underline3 deft-underline4 posr">
                                                    <a href="single-blog-slider.html"><h4>Website Điện Tử</h4></a>
                                                </div>
                                                <div class="text-bottom">
                                                    <span class="blog-contact">Fullstack.vn</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-blog">
                                        <div class="blog-image-wrapper overlay-margin-10 posr">
                                            <div class="blog-image blog-img-stlye1">
                                                <a href="single-blog-audio.html"><img src="images/blog/bb2.jpg" alt="domino" />
                                                </a>
                                            </div>
                                            <div class="blog-hover-text def-hovereff">
                                                <div class="text-top deft-underline3 posr">
                                                    <a href="single-blog-audio.html"><h4>Website Công Nghệ</h4></a>
                                                </div>
                                                <div class="text-bottom">
                                                    <span class="blog-contact">Fullstack.vn</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single-blog">
                                        <div class="blog-image-wrapper overlay-margin-10 posr">
                                            <div class="blog-image blog-img-stlye1">
                                                <a href="single-blog-video.html"><img src="images/blog/bb3.jpg" alt="domino" />
                                                </a>
                                            </div>
                                            <div class="blog-hover-text def-hovereff">
                                                <div class="text-top deft-underline3 posr">
                                                    <a href="single-blog-video.html"><h4>Website Di Động</h4></a>
                                                </div>
                                                <div class="text-bottom">
                                                    <span class="blog-contact">Fullstack.vn</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <h5 class="active">FullStack.</h5>
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
    <div class="to-top posr">
        <a href="#"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
    </div>


    <div id="quickview-wrapper">
    </div>
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
    <script type="text/javascript">
            function showalert2() {
            Swal.fire({
            title: 'Are you sure?',
            text: "Enter if you want to exit",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '<a href="index.php?ac=dangxuat" class="dangxuat">Log out</a>'
            }).then((result) => {
            if (result.value) {
            }
            })
            }
    </script>
    <script>
    function teacher(){
            Swal.fire({
            title: 'Bắt đầu khóa học?',
            text: "Nhấn đồng ý nếu bạn muốn bắt đầu khóa học",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '<a class="dangxuat" href="./hoctap/hoctap.html">Yes</a>'
    })
    }
    </script>
</body>

</html>
<style>
    .image .col-md-4{
        overflow:hidden;
        transition:0.5s;
        text-align:center;
    }
    .image .col-md-4:hover{
        transform:scale(1.1);
        transition:0.5s;
    }
    .image .col-md-4 .card-body{
        padding:10px;
        border-bottom:solid 1px black;
        border-left:solid 1px black;
        border-right:solid 1px black;
        border-bottom-right-radius:10px;
        border-bottom-left-radius:10px;
        border-color:#80808070;
    }
    



    /* Đổi màu thanh cuộn trình duyệt */
::-webkit-scrollbar {
    background:white;
    width:5px;
    height:11px;
}
::-webkit-scrollbar-thumb {
    background:black;
    border-radius:10px;
}
.tenuser{
    color:white;
}
.logout{
    cursor:pointer;
}
.dangxuat{
    color:white;
}
.dangxuat:hover{
    color:white;
}
#chat_container {
    height: auto;
    position: relative;
    top: 50px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 5px;
    border: 1px solid transparent;
    /* border: 1px solid rgba(0, 0, 0, 0.465); */
    width: 100%;
}
#chat_log {
    background: white;
    padding: 10px;
    /* border-bottom: 1px solid black; */
    overflow-y: scroll;
    height: 400px;
    font-size: 20px;
}
#chat_log img{
    width: 100%;
    box-sizing:border-box;
    height: 100%;
    border-radius:5px;
}
#chat_input_container {
    border: solid 1px none;
    background: transparent;
}
#chat_input {
    padding: 10px 10px ;
    font-size: 20px;
    width: 100%;
    height: 50px;
    border:solid 1px rgba(0, 0, 0, 0.335);
}
.chat_line {
    overflow: hidden;
    width: 100%;
    margin: 2px 0 12px 0;
}
.chat_triangle, .chat_triangle_user {
    position: absolute;
    top: 0;
    width: 0;
    height: 0;
    left: -18px;
    border-width: 0 18px 13px 0;
    border:solid 1px transparent;
}
.chat_triangle_user {
    left: auto;
    right: -18px;
    border-width: 13px 18px 0 0;
    border-color: transparent   transparent transparent #234b9b;
}
.chat_bubble, .chat_bubble_user {
    position: relative;
    float: left;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    background-color: rgba(0, 0, 0, 0.322);
    margin-top: 10px;
    line-height: 35px;
    padding: 7px 20px;
    margin-left: 20px;
    font-size: 20px;
}
.chat_bubble_user {KO
    float: right;
    margin-right: 20px;
    background-color: #234b9b;
    color: #FFF;
}
h1{
    position: relative;
    top: 50px;
    font-size: 50px;
}
#mainSlider img{
    height:600px;
    width:100%;
}
</style>
<!-- <script>
    var ws = new WebSocket("ws://localhost:8000");
    $(window).on('beforeunload', function(){
       ws.close();
    });
    ws.onerror = function(event) {
        location.reload();
    }
    ws.onmessage = function(event)  { 
        var message_received = event.data;
        chat_add_message(message_received, false);
    };
    function chat_add_message(message, isUser) {
        var class_suffix = isUser ? '_user' : '';
        var html = '\
        <div class="chat_line">\
            <div class="chat_bubble'+class_suffix+'">\
              <div class="chat_triangle'+class_suffix+'"></div>\
                '+message+'\
            </div>\
        </div>\
        ';
        chat_add_html(html);
    }
    function chat_add_html(html) {
        $("#chat_log").append(html);
        chat_scrolldown();
    }
    function chat_scrolldown() {
        $("#chat_log").animate({ scrollTop: $("#chat_log")[0].scrollHeight }, 500);
    }
    $(function() {
       $('#chat_input').on('keypress', function(event) {
          if (event.which === 13 && $(this).val() != ""){
             var message = $(this).val();
             $(this).val("");
             chat_add_message(message, true);
             ws.send(message);
          }
       });
    });
</script> -->