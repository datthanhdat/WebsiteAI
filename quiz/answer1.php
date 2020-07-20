<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer($_POST);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <center>
        <?php
          $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
          $attempt_qus=$answer['right']+$answer['wrong'];
        ?>
        <div class="container">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        <h2>KẾT QUẢ</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td><b>Tổng số câu</b></td>
              <td><b><?php echo $total_qus; ?></b></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Số câu đúng </td>
              <td><?php echo $answer['right'];?></td>
            </tr>
            <tr>
              <td>Số câu sai</td>
              <td><?php echo $answer['wrong'];?></td>
            </tr>
          <tr>
              <td>Số điểm</td>
              <td><?php 
                    $per=($answer['right']*10)/($total_qus);
                    echo round($per)."";
                    ?>
              </td>
            </tr>
            <tr>
              <td>
                Đánh giá
              </td>
              <td>
                <?php
                  if($per>7){
                    echo"Tuyệt vời";
                  }else echo"Đừng buồn, hãy thử lại nhé!";
                ?>
              </td>
            </tr>
            <tr>
              <td>
               <b>Lời khuyên cho bạn</b>
              </td>
              <td>
                <?php
                  if($per>7){
                    echo"<b>Tiếp tục phát huy nhé!</b>";
                  }else echo"<b>Bạn cần phải học và tích lũy nhiều kiến thức hơn bạn nhé!</b>";
                ?>
              </td>
            </tr>
          </tbody>
        </table></div>

      </div>
      <div class="back">
      <a  href="http://localhost/websiteAI/index.php">Kết thúc</a>
      </div>
	</center>
  </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>

<style>
.container{
  position:relative;
  top:10px;
}
.back a {
  color:black;
  position:relative;
  top:7rem;
  padding:10px 20px;
  border:solid #5cb85c 1px;
  background:#5cb85c;
  color:white;
  font-weight:bold;
  border-radius:3px;
  text-decoration:none;
  transition:0.3s;
}
.back a:hover{
  color:#5cb85c;
  background:white ;
  transition:0.3s;
  border:solid #5cb85c 1px;
}
table tr{
  height:20px;
}
table{
  position:relative;
  top:5rem;
  height:10rem;
  text-align:center;
}
</style>