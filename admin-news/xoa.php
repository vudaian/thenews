<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete student</title>
    <link rel="icon" href="https://st1.cmn.vn/games/tien-chien/images/16x16.png?ver=1.83" type="image/x-icon">
    <style>
        .around {
            margin-top: 100px;
        }
        .app {
            text-align: center;
            font-size: 30px;
        }
        .information {
            display: flex;
            margin-top: 20px;
            justify-content: center;
        }
        .information a{
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
		.information a:hover {
			background-color: #2754bb;	
			color:#fff;
		}
    </style>
</head>
<body>
    <div class="around">
        <div class="app">
            <?php
                $conn = mysqli_connect("localhost","root","","datanews");
                if (mysqli_connect_errno())
                {
                echo "Kết nối thất bại " . mysqli_connect_error();
                }
                if(isset($_REQUEST['titlenew']) and $_REQUEST['titlenew']!=""){
                    $title=$_GET['titlenew'];
                    $sql = "DELETE FROM tinmoi WHERE titlenew='$title'";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script language="javascript">alert("Xóa!"); window.location="xoa.php";</script>';
                    } else {
                        echo "Có Lỗi: " . $conn->error;
                    }
                    $conn->close();
                }   
            ?>
            <?php
                $conn = mysqli_connect("localhost","root","","datanews");
                if (mysqli_connect_errno())
                {
                echo "Kết nối thất bại " . mysqli_connect_error();
                }
                if(isset($_REQUEST['titlesport']) and $_REQUEST['titlesport']!=""){
                    $title=$_GET['titlesport'];
                    $sql = "DELETE FROM tinthethao WHERE titlesport='$title'";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script language="javascript">alert("Xóa!"); window.location="xoa.php";</script>';
                    } else {
                        echo "Có Lỗi: " . $conn->error;
                    }
                    $conn->close();
                }   
            ?>
        </div>
        <div class="information">
            <a href="information.php">Quản trị</a>
        </div>
    </div>
</body>
</html>