<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta detailsnew="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa tin mới</title>
    <style>
        a {
			text-decoration: none;
            color: #000;
		}
        * {
            box-sizing: border-box;
        }   
        .app{
            display: flex;
            justify-content: center;
            margin-top: 90px;
        }
        .main{  
            padding: 0 30px;
            width: 40%;
            box-shadow: 1px 1px 7px #3482c5;
        }
        .title{
            text-align: center;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }
        .form-group{
            display: flex;
            align-items: center;
        }
        .label{
            width: 25%;
        }
        .input{
            width: 75%;
            height: 30px;
            outline: none;
        }
        .add {
            text-align: center;
            padding: 20px 0;
            display: flex;
            justify-content: space-around;
        }
        .btn{
            height: 30px;
            width: 100px;
            border: none;
            background: #0043ff;
            color: #000;
            border-radius: 3px;
            cursor: pointer;
        }
        .btn:hover {
            background: #0066ff;
            color: #fff;
        }
        .check {
            font-size: 24px;
            display: flex;
            justify-content: center;
        }
        .add a{
            height: 30px;
            width: 100px;
            border: none;
            background: #0043ff;
            color: #000;
            border-radius: 3px;
            cursor: pointer;
            display: flex;
            align-items: center;
			justify-content: center;
        }
        .add a:hover {
            background: #0066ff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="check">
        <?php
            $conn = mysqli_connect("localhost","root","","datanews");
            if (mysqli_connect_errno()) {
                echo "Kết nối thất bại " . mysqli_connect_error();
            }
            $titlenew = '';
            $imagenew = '';
            $timenew = '';
            $detailsnew = '';
        
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["timenew"])) {
                        $timenew = $_POST['timenew'];
                    }
                    if (isset($_POST["imagenew"])) {
                        $imagenew = $_POST['imagenew'];
                    }
                    if (isset($_POST['titlenew'])) {
                        $titlenew = $_POST['titlenew'];
                    }
                    if (isset($_POST['detailsnew'])) {
                        $detailsnew = $_POST['detailsnew'];
                    }
                    if (!empty($titlenew)) {
                        $sql = "UPDATE `tinmoi` SET imagenew='$imagenew', timenew='$timenew', detailsnew='$detailsnew' WHERE titlenew='$titlenew'";

                    } else {
                        $sql = "INSERT INTO tinmoi (titlenew, imagenew, timenew, detailsnew)
                                        VALUES ('{$titlenew}', '{$imagenew}', '{$timenew}', '{$detailsnew}')";
                    }
                
                    if ($conn->query($sql) === TRUE) {
                        echo '<script language="javascript">alert("Đã sửa tin!"); window.location="suanew.php";</script>';
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    if (isset($_GET['titlenew'])) {
                        $titlenew = $_GET['titlenew'];
                        $sql = "SELECT * FROM tinmoi WHERE titlenew = {$titlenew}";
                        $exe = mysqli_query($conn, $sql);
                        if ($exe) {
                            $result = mysqli_fetch_assoc($exe);
                        }
                    }
                }
                $conn->close();
        ?>
    </div>
    <div class="app">
        <form action="suanew.php" class="main" method="POST">
            <h2 class="title"><i>Sửa tin tức</i></h2>
            <div class="form-group">
                <h4 class="label">Tiêu đề</h4>
                <input type="text" class="input" name="titlenew" value="<?php echo $titlenew; ?>">
            </div>
            <div class="form-group">
                <h4 class="label">Ảnh</h4>
                <input type="text" class="input" name="imagenew" value="<?= isset($result['imagenew']) ? $result['imagenew'] : ''; ?>">
            </div>
            <div class="form-group">
                <h4 class="label">Thời gian đăng tin</h4>
                <input type="text" class="input" name="timenew" value="<?= isset($result['timenew']) ? $result['timenew'] : ''; ?>">
            </div>
            <div class="form-group">
                <h4 class="label">Chi tiết tin</h4>
                <input type="text" class="input" name="detailsnew" value="<?= isset($result['detailsnew']) ? $result['detailsnew'] : ''; ?>">
            </div>
            <div class="add">
                <button type="submit" class="btn">Sửa</button>
                <a href="information.php">Quản trị</a>
            </div>
        </form>
    </div>
</body>
</html>