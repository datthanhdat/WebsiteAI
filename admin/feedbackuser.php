<?php
 $con=mysqli_connect("localhost","root","","website");
     if(mysqli_connect_error()){
         echo"khong the ket noi" .mysqli_connect_error();

     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    
#main{
    text-align: center;
    font-size: 15px;
    position: relative;
    left: 20px;
}
table{
    height:450px;
    width: 600px;
}
#main tr{
    background: wheat;
    border: solid black 1px;
}
#main table{
    position: relative;
    margin:0 auto;
}
    </style>
</head>
<body>
   <div id="main">
       <h1>Feedback user for website   </h1>
   <table border="1">
    <tr>
     <th width="20" height="30"><h3>ID</h3></th>
     <th width="40" height="30"><h3>User</h3></th>
     <th width="100" height="30"><h3>Content</h3></th>
    
    </tr>
    <?php
     $query = "SELECT *FROM feedback";
     $result = mysqli_query($con,$query);
     $num = mysqli_num_rows($result);
     if($num>0){
         while($row = $result->fetch_assoc()){
             echo"<tr> 
               <td>".$row["id"]."</td>
               <td>".$row["user"]."</td>
               <td>".$row["content"]."</td>
             </tr>";

         }
     }
?>    
    </table>
   </div>
</body>
</html>