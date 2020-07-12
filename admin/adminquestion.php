<?php  
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "website");  
      $sql = "SELECT * FROM questions";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                        <td>'.$row["id"].'</td>  
                        <td>'.$row["question"].'</td>  
                        <td>'.$row["ans1"].'</td>  
                        <td>'.$row["ans2"].'</td>
                        <td>'.$row["ans3"].'</td>  
                        <td>'.$row["ans4"].'</td>  
                        <td>'.$row["ans"].'</td>  
                        <td>'.$row["cat_id"].'</td> 
                        <td>
                        <ul>
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </ul>
                        </td> 
                     </tr> ';  
      }  
      return $output;  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Danh sach cau hoi</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />            
      </head>  
      <body>
              
      <br /><br />  
           <div class="container" style="width:1100px;">  
                <h3 align="center"><P></P>List Question</h3><br />  
           <div class="adquestion"><button>Add question</button></div>

                <div class="table-responsive bg-warning">  
                     <table class="table table-bordered">  
                          <tr id="table">  
                            <th width="5%">ID</th>  
                            <th width="45%">Question</th>  
                            <th width="13%">A</th> 
                            <th width="13%">B</th> 
                            <th width="13%">C</th>
                            <th width="13,75%">D</th> 
                            <th width="10%">Answer</th> 
                            <th width="15%">Section</th> 
                            <th width="15%">Option</th> 
                          </tr>  
                     <?php  
                     echo fetch_data();  
                     ?>  
                     </table>  
                     <br />  
                </div>  
           </div>  
      </body>
      <style>
      .container table,th{
        text-align:center;
      }
      .container th{
          color:black;
          font-size:17px;
      }
      body{
          background:whitesmoke;
      }
      .adquestion button{
           padding:10px 20px;
           text-align:center;
           margin:0 auto;
           position:relative;
      }
      </style>
      
      
