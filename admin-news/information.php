<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student information</title>
	<style>
		a {
			text-decoration: none;
		}
		* {
            box-sizing: border-box;
        }
        .app{
            display: flex;
            justify-content: center;
            margin-top: 30px;
            box-shadow: 1px 1px 7px #3482c5;
			
        }
		.add {
			display: flex;
			justify-content: center;
			margin-top: 30px;
		}
		.add a{
			text-decoration: none;
			background-color: #7e99e4;	
			color: #000;
			display: flex;
			width: 120px;
			height: 30px;
			border-radius: 3px;
			align-items: center;
			position: relative;
			justify-content: center;
		}
		.add a:hover {
			color:#fff;
		}
		.table {
			width: 100%;
			text-align: center;
		}
		td{
			width: 20%;
			box-shadow: 0px 0px 2px #3482c5;
   			height: 30px;	
		}
		.link {
			display: flex;
			width: 100%;
			justify-content: space-evenly;
		}
		.link a{
			text-decoration: none;
			background-color: #dcdfe6;	
			color: #000;
			display: flex;
			width: 40px;
			height: 28px;
			border-radius: 3px;
			align-items: center;
			justify-content: center;
		}
		.link a:hover{
			background-color: #2754bb;	
			color:#fff;
		}

		.move{
			position: fixed;
			top: 0;
			bottom: 0;
			right: 93%;
			left: 10px;
			display: flex;
			align-items: center;
		}
		.move-item {
			width: 100%;
		}
		.move-item a{
			display: flex;
			width: 100%;
			height: 40px;
			border-radius: 5px;
			background-color: rgba(0,0,0,0.2);
			margin: 10px 0;
			align-items: center;
			justify-content: center;
			font-size: 14px;
			color: white;
			position: relative;
		}
		.move-item a:hover{
			color: wheat;
		}
		.move-item a::before {
			content: "";
			border-radius: 5px;
			position: absolute;
			top: 0;
			left: 50%;
			transform: translate(-50%, 0);
			height: 100%;
			width: 0;
			background-color: #43444a;
			z-index: -1;
			transition: width 0.25s ease-in;
		}
		.move-item a:hover::before {
			width: 100%;
		}
	</style>
</head>
<body>
	
	<div class="move">
		<div class="move-item">
			<a href="#tinmoi">Tin mới</a>
			<a href="#tinthethao">Tin thể thao</i></a>
		</div>
	</div>
	<div class="add">
		<a href="add_new.php">Thêm tin</a>
	</div>
	<div class="app">
		<table class="table">
			<thead id="tinmoi">
				<tr>
					<td bgcolor="#E6E6FA">Tin mới</td>
					<td bgcolor="#E6E6FA">Ảnh</td>
					<td bgcolor="#E6E6FA">Thời gian đăng</td>
					<td bgcolor="#E6E6FA">Chi tiết tin</td>
					<td bgcolor="#E6E6FA">Quản lý</td>
				<tr>
			</thead>
			<tbody>
				<?php
					$conn = mysqli_connect("localhost","root","","datanews");
					if (mysqli_connect_errno())
					{
					echo "Kết nối thất bại " . mysqli_connect_error();
					}
					$query=mysqli_query($conn,"select * from `tinmoi`");
					while($row=mysqli_fetch_array($query)){
					?>
				<tr>
					<td><?php echo $row['titlenew']; ?></td>
					<td><?php echo $row['imagenew']; ?></td>
					<td><?php echo $row['timenew']; ?></td>
					<td><?php echo $row['detailsnew']; ?></td>
					<td class="link">
						<a href="suanew.php?titlenew=<?php echo $row['titlenew']; ?>">Sửa</a>
						<a href="xoa.php?titlenew=<?php echo $row['titlenew']; ?>">Xóa</a>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
			
			<thead id="tinthethao">
				<tr>
					<td bgcolor="#E6E6FA">Tin thể thao</td>
					<td bgcolor="#E6E6FA">Ảnh</td>
					<td bgcolor="#E6E6FA">Thời gian đăng</td>
					<td bgcolor="#E6E6FA">Chi tiết tin</td>
					<td bgcolor="#E6E6FA">Quản lý</td>
				<tr>
			</thead>
			<tbody>
				<?php
					$conn = mysqli_connect("localhost","root","","datanews");
					if (mysqli_connect_errno())
					{
					echo "Kết nối thất bại " . mysqli_connect_error();
					}
					$query=mysqli_query($conn,"select * from `tinthethao`");
					while($row=mysqli_fetch_array($query)){
					?>
				<tr>
					<td><?php echo $row['titlesport']; ?></td>
					<td><?php echo $row['imagesport']; ?></td>
					<td><?php echo $row['timesport']; ?></td>
					<td><?php echo $row['detailssport']; ?></td>
					<td class="link">
						<a href="suasport.php?titlesport=<?php echo $row['titlesport']; ?>">Sửa</a>
						<a href="xoa.php?titlesport=<?php echo $row['titlesport']; ?>">Xóa</a>
					</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>