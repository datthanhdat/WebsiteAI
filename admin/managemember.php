
<?php
	session_start(); 
 ?>
<?php require_once("connection.php");?>
<?php
	$sql = "SELECT * FROM users";
	$query = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin</title>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
	<center><h1>Welcome Admin</h1></center>
	<div class="container">
			<table border="1px;" align="center">
					<thead>
						<tr>
							<td bgcolor="#E6E6FA">ID</td>
							<td bgcolor="#E6E6FA">Username</td>
							<td bgcolor="#E6E6FA">Email</td>
							<td bgcolor="#E6E6FA">Block</td>
							<td bgcolor="#E6E6FA">Permission</td>
							<td bgcolor="#E6E6FA">Action</td>
						<tr>
					</thead>
			<tbody>
					<?php 
						while ( $data = mysqli_fetch_array($query) ) {
							$i = 1;
							$id = $data['id'];
					?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td><?php echo $data['email']; ?></td>
							<td><?php echo ($data['is_block'] == 1) ? "Bị khóa" : "Không bị khóa"; ?></td>
							<td><?php echo ($data['permision'] == 0) ? "Thành viên thường" : "Admin"; ?></td>
							<td>
								<button><a href="editmember.php?id=<?php echo $id;?>">Edit user</a></button>
								<!-- <a href="managemember.php?id_delete=<?php echo $id;?>">Xóa</a> -->
								<button onclick="show()">Delete user</button>
							</td>
						</tr>
					<?php 
					$i++;
				}
			?>
			</tbody>
		</table>
		<center><a href="./addmember.php" class="ad"> Add member</a></center>
	</div>
	
</body>
</html>


<?php
	if (isset($_GET["id_delete"])) {
		$sql = "DELETE FROM users WHERE id = ".$_GET["id_delete"];
		mysqli_query($conn,$sql);
	}
?>
<script>
	function show(){
		Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: '<a href="managemember.php?id_delete=<?php echo $id;?>">Delete</a>'
		}).then((result) => {
		if (result.value) {
			Swal.fire(
			'Deleted!',
			'Your file has been deleted.',
			'success'
			)
		}
		})
	}

	function edit(){
		Swal.fire({
		title: 'Are you sure?',
		text: "You won't be able to revert this!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: ''
		}).then((result) => {
		if (result.value) {
			Swal.fire(
			'Deleted!',
			'Your file has been deleted.',
			'success'
			)
		}
		})
	}
</script>
<style>
	body{
		background:whitesmoke;
	}
	.container{
		position:relative;
		top:0px;
	}
table{
	height:400px;
	text-align:center;
	width:70%;
	background:white;
	padding:10px ;border-radius:5px;
}
.ad{
	text-decoration:none;
	padding:10px 20px;
	border: 1px solid black;
	border-radius:5px;
	position:relative;
	top:20px;
	background:white;
	color:black;
	font-family:tahoma;
}
table button {
	padding:8px 15px;
	border-radius:5px;
	border:solid 1px black;
	box-shadow:0 3px 3px 0 rgba(0, 0, 0, 0.356);
	
}
table button a{
	text-decoration:none;
	color:black;
}
</style>
