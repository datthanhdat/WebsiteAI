<?php
session_start();
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
				
<?php
	if(isset($_GET['ac']) && $_GET['ac']=='dangxuat'){
	unset($_SESSION ['username']);
	header('location:login.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="./img/Capture.PNG">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a  class="navbar-brand logo" href="trangchu.html" ><i class="fa fa-gitlab" aria-hidden="true"></i>Datan</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    
	<!-- body -->
	<div class="container body">
				<div class="main">
						<div class="container main1">
							<div><b>Hello</b> <?php echo $_SESSION['fullname'];  ?> <span>|</span><a href="./user.php"> Account </a><span>|</span> <button onclick="showalert2()">Log out</button> </div>
						</div>
				</div>
				<div class="container a1">
						<table>
							<tr>
								<td class="td">
									<div class="row1">
										<h5 class="h5">Danh sách kỹ năng</h5>
										<div class="row2">
											<h5>Chọn kỹ năng mà bạn muốn <br> học.</h5> <br>
												<div class="container">
													<div class="row">
														<div class="col-md-6"><a href="./listen/page1.html"><img src="./img/learn.png" alt="" width="80%"></a><label for="" class="AI1">Học Nghe</label></div>
														<div class="col-md-6"><a href="./check/check.html"><img src="./img/write.png" alt="" width="80%"></a><label for="" class="AI1">Học Viết</label></div>
													</div>
													<div class="row"><div class="col-md-12"><br></div></div>
													<div class="row">
														<div class="col-md-6"><a href="./grammar/grammar.html"><img src="./img/speak.png" alt="" width="80%"></a><label for="" class="AI1">Học Ngữ Pháp</label></div>
														<div class="col-md-6"><a href="./quiz/index.php"><img src="./img/heard.png" alt="" width="80%"></a><label for="" class="AI1">Trắc Nghiệm</label></div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<img src="./img/teacher.png" alt=""><br>
															<label onclick="teacher()" for="" class="AI">Học Cùng Tiến Sĩ AI <br> (Người thầy nhân tạo)</label></a>
														</div>
													</div>
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
                                        
                                        <li><a href="./trangchu.html">Home</a></li><span>|</span>
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
        title: 'Bạn đã sẵn?',
  text: "Nhấn đồng ý nếu bạn muốn học cùng AI teacher",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: '<a class="teacher" href="./Chatbot/index.html">Yes</a>'
})
}
</script>
<style>
.teacher{
    color:white;
}
.teacher:hover{
    color:white;
    text-decoration:none;
}
.dangxuat{
    color:white;
}
.dangxuat:hover{
    color: white;
}
.header .navbar{
    height: 22px;
    background: #a4712f!important ;
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


.a2 {
    text-align:center;
    z-index:99;
    position:absolute;
}

body{
    background:whitesmoke;
}
.AI1{
    font-weight:bold;
    color:#935F16;
}
.AI{
    padding:10px 25px;
    background:#935F16;
    color:white;
    font-weight:bold;
    border:3px solid transparent;
    border-radius:6px;
    transition:0.4s;
    cursor:pointer;
}
.AI:hover{
    border:solid 3px #935F16;
    transition:0.4s;
    background:white;
    color:#935F16;
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
    border-color: #DF7000;
    background: #BBDDFF;
    width: 690px;
    height: 600px;
    padding: 10px;
    bottom: 10px;
}

.container .td .row2 h5{
    font-weight: bold;
    font-size: 18px ;
}
.container .td .row2{
	left:27%;
    position: relative;
    padding-top: 10px;
    text-align: center;
    border-radius: 7px;
    border: 1px solid transparent;
    /* border-color: #DF7000; */
    background: white;
    height: 500px;
    top: 20px;
	width:300px;
}

.endmenu{
    text-align: center;
    top: 65px;
    position: relative;
    background: #5B441B;
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