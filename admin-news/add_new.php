<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tin</title>
    <style>
        .main-new {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form {
            width: 40%;
            box-shadow: 0px 0px 7px #142bdc;
            padding: 10px;
        }
        .form-tab {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .form-tab h2 {
            width: 250px;
            text-align: center;
        }
        .next-tab {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 30px;
            background-color: rgb(25, 127, 216);
            border-radius: 5px;
            cursor: pointer;
            color: wheat;
        }
        .form-group {
            display: flex;
            align-items: center;
        }   
        .label {
            width: 15%;
        }
        .input {
            width: 85%;
            height: 30px;
            outline: none;

        }
        .add {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .btn {
            background-color: rgb(25, 127, 216);
            width: 100px;
            height: 30px;
            border-radius: 5px;
            border: none;
            color: wheat;
            cursor: pointer;
        }
        .add a {
            text-decoration: none;
            width: 100px;
            height: 30px;
            background-color: rgb(25, 127, 216);
            display: flex;
            justify-content: center;
            border-radius: 5px;
            align-items: center;
            color: wheat;
        }
        .main-sport {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;
            background-color: black;
            color: wheat;
        }
    </style>
</head>
<body>
    <div class="check" style="text-align:center; font-size: 30px;">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $title = $_POST['title'];
                $image = $_POST['image'];
                $time = $_POST['time'];
                $details = $_POST['details'];
                if ($title == "" || $image == "" || $time == "" || $details == "") {
                    echo "Bạn hãy nhập đầy đủ thông tin của tin tức";
                } else {
                    $serverdetails = "localhost";
                    $userdetails = "root";
                    $password = "";
                    $dbdetails = "datanews";
                    $conn = new mysqli($serverdetails, $userdetails, $password, $dbdetails);
                    mysqli_set_charset($conn, 'UTF8');
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "INSERT INTO tinmoi (titlenew, imagenew, timenew, detailsnew) VALUES ('$title', '$image', '$time', '$details')";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script language="javascript">alert("Đã thêm tin mới!"); window.location="add_new.php";</script>';
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
            }   
        ?>
    </div>
    <div class="main-new">
        <form action="add_new.php" class="form" method="POST">
            <div class="form-tab">
                <h2>Thêm tin mới</h2>
                <a href="add_sport.php" class="next-tab" style="text-decoration: none;">Thêm tin thể thao</a>
            </div>
            <div class="form-group">
                <h4 class="label">Tiêu đề</h4>
                <input type="text" class="input" name="title">
            </div>
            <div class="form-group">
                <h4 class="label">Ảnh</h4>
                <input type="text" class="input" name="image">
            </div>
            <div class="form-group">
                <h4 class="label">Thời gian</h4>
                <input type="text" class="input" name="time">
            </div>
            <div class="form-group">
                <h4 class="label">Chi tiết tin</h4>
                <input type="text" class="input" name="details">
            </div>
            <div class="add">
                <button type="submit" class="btn">Thêm tin</button>
                <a href="information.php">Quản trị</a>
            </div>
        </form>
    </div>
</body>
</html>