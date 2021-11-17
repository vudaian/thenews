<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student information</title>
    <link rel="icon" href="https://st1.cmn.vn/games/tien-chien/images/16x16.png?ver=1.83" type="image/x-icon">
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
			justify-content: center;
		}
		.add a:hover {
			background-color: #2754bb;	
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
	</style>
</head>
<body>
	<div class="add">
		<a href="add.php">Thêm thành viên</a>
	</div>
	<div class="app">
		<table class="table">
			<thead>
				<tr>
					<td bgcolor="#E6E6FA">Họ và tên</td>
					<td bgcolor="#E6E6FA">Mã số sinh viên</td>
					<td bgcolor="#E6E6FA">Năm sinh</td>
					<td bgcolor="#E6E6FA">Admin: Vũ Đại An</td>
					<td bgcolor="#E6E6FA">Quản lý</td>
				<tr>
			</thead>
			<tbody>
				<?php
				$conn = mysqli_connect("localhost","root","","mytable");
				if (mysqli_connect_errno())
				{
				echo "Kết nối thất bại " . mysqli_connect_error();
				}
				$query=mysqli_query($conn,"select * from `dbstudent`");
				while($row=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $row['hoten']; ?></td>
					<td><?php echo $row['mssv']; ?></td>
					<td><?php echo $row['namsinh']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td class="link">
						<a href="update.php?hoten=<?php echo $row['hoten']; ?>">Sửa</a>
						<a href="delete.php?hoten=<?php echo $row['hoten']; ?>">X</a>
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