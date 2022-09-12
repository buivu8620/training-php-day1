<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
.container {
    display: flex;
    width: 100%;
}

.menu {
    width: 10%;
}

.menu table {
    width: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
}

a {
    color: black;
    text-decoration: none;
}

.form {
    width: 30%;
    border-left: 1px solid #ccc;
}
</style>

<body>
    <div class="container">
        <div class="menu">
            <table>
                <tr>
                    <td style="background-color: #ccc">Menu</td>
                </tr>
                <tr>
                    <td>Trang chủ</td>
                </tr>
                <tr>
                    <td>
                        <a href="#">Thông tin cá nhân</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="./ex25.php">Đăng Xuất</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form">
            <?php echo 'Đăng nhập thành công';?>
        </div>
    </div>

</body>

</html>