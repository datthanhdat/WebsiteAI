<?php
include("class/users.php");

$profile=new users;

$profile->cat_shows1();
$profile1=new users;
?>
<html>
<head>
<meta charset="utf-8">
<title>Trang Chu</title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
        <nav class="navbar navbar-expand-sm navbar-light bg-light"></nav>
	</div>
	<p></p>
		<div class="container">
			<div class="main1 ">
			<h2>Kiểm tra kiến thức học tập nào!!! </h2>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="main2 ">
			<h2>Quiz Testing</h2>
			<div class="vanban">
				<ul>
					<li><p>Attempts allowed: 1</p></li>
					<li><p><b><i>“To have another language is to possess a second soul.”</i></b></p></li>
					<li><p>Học thêm ngoại ngữ mới là sở hữu một tâm hồn thứ hai.</p></li>
					<li><p><b><i>““A different language is a different vision of life.”</i></b></p></li>
					<li><p>Một ngôn ngữ mới là một thế giới mới.</p></li>
					<li><p>Thời gian làm bài: 10 phút</p></li>
				</ul>
			</div>
			<h2><h3><i class="fa fa-language" aria-hidden="true"></i></h3></h2>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="main3">
				<div class="vb">
				<form  method="post" action="qus_show.php">
		  <select class="form-control" id="" name="cat">
		  <div class="chuan2">
		  <center><option id="chuan1"><p>Đánh giá kết quả của bạn qua bài Test</p></option></center>
		  </div>
		  <?php		  
		  foreach($profile->cat as $category)
		  {  ?>		
			<option id="chuan"  value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<P></P>
			<P></P>
			<?php   }?>
		  </select><br>
		  <center><input id="nut" type="submit" value="Vào Thi" class="btn btn-success" /></center>
		</form>
				</div>
			</div>
		</div>
		  <!-- end menu -->
		  <div class="endmenu">
                        <!-- <div class="listmenu">
                            <div class="end4">
                                <h6>Tools:</h6> 
                                    <ul>
                                        
                                        <li><a href="http://localhost/websiteAI/index.php">Home</a></li><span>|</span>
                                        <li><a href="">Help</a></li><span>|</span>
                                        <li><a href="">Privacy</a></li><span>|</span>
                                        <li><a href="./feedback.php">Feedback</a></li>
                                    </ul>
                            </div>
                            <div class="end6">
                                <p>© 2020 AI Engineer <br> Design by ĐHSP danang</p>
                                <div id="google_translate_element"><h1></h1></div> 
                            </div>
						</div> -->
                </div>  
	
</body>
</html>
<style>
	::-webkit-scrollbar {
    background:white;
    width:5px;
    height:11px;
}
::-webkit-scrollbar-thumb {
    background:black;
    border-radius:10px;
}
	.container .main3 option{
	width:50px;
}
*{
	margin:0;
	padding:0;
}
#chuan1{
	text-align:center;
	margin:0 auto;
}
body{
	background:whitesmoke;
}
.header .navbar{
    height: 22px;
	background: #333 none repeat fixed 0 0 !important ;
}
.navbar a{
    color:white!important;
}
.navbar .logo{
	position:relative;
    font-size: 16px;
	left:20px;
}
.container .main1{
	background:white;
	text-align:center;
	border:solid 1px #d7dfe3;
	width:100%;
	height:6rem;
	padding:10px 20px;
}
.container .main1 h2{
	position:relative;
	top:1rem;
	text-align:center;
}
.container .main2{
	background:white;
	text-align:center;
	border:solid 1px #d7dfe3;
	width:100%;
	height:auto;
	padding:2rem 0;
}
.container .main2 .vanban ul li{
	text-align:center;
	list-style-type:none;
}
.container .main3{
	background:white;
	text-align:center;
	border:solid 1px #d7dfe3;
	width:100%;
	height:auto;
	padding:3rem 0;
}
.container .main3 .vb{
	padding:1rem 5rem;
	margin:0 auto;
	width:50%;
	height:auto;
	border-top:solid 1px #d7dfe3;
	border-bottom:solid 1px #d7dfe3;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}
.endmenu{
    text-align: center;
    top: 65px;
    position: relative;
    background: #5B441B;
    width: 100%;
	height: 50px;
	background: #333 none repeat fixed 0 0 !important ;
	
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