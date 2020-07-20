<?php
include("class/users.php");
$qus=new  users;
$cat=$_POST['cat'];
$qus->qus_shows($cat);


$_SESSION['cat']=$cat;

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		  <h2 class="tieude">TRẮC NGHIỆM</h2><br>
		  <div id="time"style="float:left">
			<form name="cd">
				<input id="txt" readonly="true" type="text" value="10:00" border="0" name="disp">
			</form>
		</div>
		<?php
		$i=1;
		foreach($qus->qus as $qust) {?> 
		<form method="post" id="form1" action="answer1.php">
		  <table class="table table-bordered">
			<thead>
			  <tr class="warning">
				<th><?php echo $i;?>.  <?php echo $qust['question'];?>  </th>
			  </tr>
			</thead>
			<tbody>
			<?php if(isset($qust['ans1'])){?>
			  <tr class="text-info">
				<td>&nbsp;A.&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans1'];?> </td>
			  </tr>
			<?php }?>
			<?php 
			 if(isset($qust['ans2'])){
			 	?>
			  <tr class="text-info">
				<td>&nbsp;B.&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans2'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans3'])){?>
			  <tr class="text-info">
				<td>&nbsp;C.&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans3'];?></td>
			  </tr>
			  <?php }?>
			  <?php if(isset($qust['ans4'])){?>
			  	<tr class="text-info">
				<td>&nbsp;D.&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" />&nbsp;<?php echo $qust['ans4'];?></td>
			  </tr>
			  <?php }?>
			<tr class="text-info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>" /></td>
			  </tr>
			</tbody>
		  </table>
		<?php $i++;}?>
	<center><input type="submit" name="show" value="Nộp Bài" class="btn btn-success" /></center>
	<br>
</form>	
		</div>
		
</body>
</html>
<script language="javascript">
            var mins
            var secs;
            function cd() {
                 mins = 1 * m("10");
                 secs = 0 + s(":15");
                 redo();
            }
            
            function m(obj) {
                 for(var i = 0; i < obj.length; i++) {
                      if(obj.substring(i, i + 1) == ":")
                      break;
                 }
                 return(obj.substring(0, i));
            }
            
            function s(obj) {
                 for(var i = 0; i < obj.length; i++) {
                      if(obj.substring(i, i + 1) == ":")
                      break;
                 }
                 return(obj.substring(i + 1, obj.length));
            }
            
            function dis(mins,secs) {
                 var disp;
                 if(mins <= 9) {
                      disp = " 0";
                 } else {
                      disp = " ";
                 }
                 disp += mins + ":";
                 if(secs <= 9) {
                      disp += "0" + secs;
                 } else {
                      disp += secs;
                 }
                 return(disp);
            }
            
            function redo() {
                 secs--;
                 if(secs == -1) {
                      secs = 59;
                      mins--;
                 }
                 document.cd.disp.value = dis(mins,secs);
                 if((mins == 0) && (secs == 0)) {
                      window.alert("Hết thời gian. Nhấn OK để trở về màn hình chính"); 
                      window.location.href = "http://localhost/websiteAI/quiz/index.php";
                 } else {
                     cd = setTimeout("redo()",1000);
                 }
            }
            function init() {
              cd();
            }
            window.onload = init;
            </script>
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
*{
	margin:0;
	padding:0;
}
body{
	background:whitesmoke;
}
form .table{
	background:white;
	
}
#txt{
	position: relative;
      margin: 30px auto;
      width: 120px;
      height: 30px;
      padding: 10px 20px;
	  position: absolute;
      font-size: 18px;
	 top:0;
	 
	  border: solid 1px green;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      background: transparent;	
      color: green;
      border-radius: 5px;
	  z-index: 99;
    }
	.tieude{
		text-align:center;
	}
</style>