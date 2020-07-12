
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English</title>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	
<?php 

require_once("connection.php");
if (isset($_POST["btn_submit"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	if ($username == "" || $password =="") {
		echo '<script>alert("Username hoặc password bạn không được để trống!"); window.location="";</script>';
	}else{
		$sql = "select * from admin01 where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng !"); window.location="admin.php";</script>';
		}else{
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["password"] = $data["password"];
	    	}
	    	echo '<script>alert("Đăng nhập thành công !"); window.location="index.php";</script>';
			 header('Location:index.php');
		}
	}
}
?>
 <body>
      <div class="header">
         <nav class="navbar navbar-expand-sm navbar-light fixed-top">
             <div class="container">
                <a class="navbar-brand" href="#"><h3>Datan</h3></a>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="" class="name"></a>
                    </form>
                </div>
             </div>
         </nav>
         
         <div class="main"><img src="#" alt="">
         
            <div class="container">
                <img src="https://d35aaqx5ub95lt.cloudfront.net/images/earth-two-rings.svg" alt="">
                <h3>Login Admin</h3><p></p> 
                <div>
                    <form method="POST" action="admin.php" class="fom">
                        <input type="text" name="username" class="abc" placeholder="Admin"  required/>
                        <input type="password" name="password" class="abc" placeholder="Password" required />
                        <button name="btn_submit" type="submit" class="button"  value="Login" >Login</button>
                      </form>
                </div>
            </div>
        </div>
      </div>
</body>
</html>
<style>
*{
    padding: 0;
    margin: 0;
}
.header .navbar{
    height: 70px;
    background: rgb(35,83,144);
}
.header .navbar-brand h3{
    color: white;
}
.form-inline a{
    color: white;
    font-weight: bold;
}
.header .main{
    width: 100%;
    height: 610px;
    top: 50px;
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    overflow: hidden;
    align-items: center;
    background-image: url(./img/Capture1.PNG);
}
.main .container img{
    animation: xoay 50s linear infinite;
}
.main .container{
    text-align: center;
    line-height: 40px;
}
.main .container{
    text-align: center;
    line-height: 30px;
}
.main .container h3{
    color: white;
    font-weight: bold;
}
.main .container a{
    font-family: din-round,sans-serif;
    text-align: center;
    color: rgba(255, 255, 255, 0.808);
    font-size: 18px;
    padding: 7px 120px;
    border: solid 1px transparent;
    width: 200px;
    background: #78c800;
    border-radius: 15px;
}
.main .container a:hover{
    text-decoration: none;
    color: white ;
    transition: 0.2s;
}
@keyframes xoay{
    from{
        transform: rotate(0);
    }
    to{
        transform: rotate(360deg);
    }
}
.fom input{
    text-align: center;
	display: block;
    height: 40px;
	padding: 20px;
    font-size: 14px;
    font-family: sans-senif;
	color: black;
	margin-left:10px;
    background: rgba(0,0,0,0.3);
    border: 1px solid rgba(0,0,0,0.3);
    border-radius: 5px;
    box-shadow: inset 0px -5px 45px rgba(100,100,100,0.2), 0px 1px 1px rgba(200,200,200,0.2);
    margin-bottom: 10px;
    position: relative;
    left: 39.5%;
}
.button{
	border: 1px solid rgba(0,0,0,0.3);
    border-radius: 5px;
    box-shadow: inset 0px -5px 45px rgba(100,100,100,0.2), 0px 1px 1px rgba(200,200,200,0.2);
	margin-bottom: 10px;
	padding:5px 20px; 
    height:40px;
}
</style>