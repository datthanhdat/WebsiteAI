<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: user.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

	<!-- body -->
	<div class="container body">
				<div class="container a1">
						<table>
							<tr>
								<td class="td">
									<div class="row1">
										<h5 class="h5">Your account</h5>
										<div class="row2">
                                            <h4>My account</h4> <br>
                                            <b>Your name:  </b> <span> <?php echo $_SESSION['fullname'];  ?></span> <br>
                                            <b>Your email:  </b> <span> <?php echo $_SESSION['email'];  ?></span> <br>
                                            <b>Your native language : </b><span>English</span> <br>
                                            <a href="">Edit password</a> | <a href="">Delete account</a>
                                        </div>
								</td>
							</tr>
						</table>
					</div>
                </div>
                
               <!-- end menu -->
				<div class="endmenu">
                        <div class="listmenu">
                            <div class="end4">
                                <h6>Tools:</h6> 
                                    <ul>
                                        <li><a href="">Home</a></li><span>|</span>
                                        <li><a href="">Help</a></li><span>|</span>
                                        <li><a href="">Privacy</a></li><span>|</span>
                                        <li><a href="./feedback.php">Feedback</a></li>
                                    </ul>
                            </div>
                            <div class="end6">
                                <p>© 2020 AI Engineer <br> Design by ĐHSP danang</p>
                                <div id="google_translate_element"><h1></h1></div> 
                            </div>
                        </div>
                </div>  

</body>
<style>
.a2 {
    text-align:center;
    z-index:99;
    position:absolute;
}
.body .main1 .dangxuat{
    text-decoration:none;
    transition:0.2s;
}
body{
    background:white;
}

table{
	position:relative;
	left:18%;
	text-align:center;
	top: 50px;
}
.container .row tr{
    display: table-row;
    vertical-align: inherit;
}

.container .td .row1 .h5{
    position: relative;
    top: 12px;
}

.container .td .row1{
    position: relative;
    text-align: center;
    border-radius: 7px;
    border: 2px solid;
    border-color: black;
    background: #BBDDFF;
    width: 690px;
    height: 430px;
    padding: 10px;
    bottom: 10px;
}

.container .td .row2 h5{
    font-weight: bold;
    font-size: 18px ;
}
.container .td .row2{
    line-height:30px;
	left:25%;
    position: relative;
    padding-top: 10px;
    text-align: left;
    padding-left:10px;
    border-radius: 7px;
    border: 1px solid transparent;
    /* border-color: #DF7000; */
    background: white;
    height: 300px;
    top: 20px;
	width:350px;
}

.header .navbar{
    height: 22px;
    background: #333!important ;
    box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.493);
}
.navbar a{
    color:white!important;
}
.navbar .logo{
	position:relative;
    font-size: 16px;
	left:20px;
}
.main1{
	text-align:center;
	padding-top:20px;
}

.endmenu{
    text-align: center;
    top: 65px;
    position: relative;
    background: #333;
    width: 100%;
    height: 150px;
}
.endmenu .listmenu{
    position: absolute;
    position: relative;
    top: 20px;
}

.endmenu ul{
    position: relative;
    top: 10px;
}
.endmenu ul li{
    display: inline;
    padding: 0px 10px;
    
}
.endmenu ul li a{
    color: #FF8000;
}

.endmenu .end4{
    position: relative;
    bottom: 10px;
}
.endmenu .end4 ul li{
    position: relative;
    bottom: 10px;
}
.endmenu .end4 span{
    position: relative;
    bottom: 10px;
    color:white;
}
.endmenu .end4 h6{
    color: white;
}
.endmenu .end6 p{
	position:relative;
	bottom:10px;
    font-size: 15px;
    text-align: center;
    color: white;
    font-family: inherit;
}
</style>