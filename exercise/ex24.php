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
    color: #000;
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
                        <a href="./ex24.php">Đăng ký</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="./ex25.php">Đăng nhập</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="form">
            <table border="0" cellspacing="0" cellpadding="5">
                <h3>Thông tin đăng ký</h3>
                <form action="xl-ex24.php" method="post">
                    <td colspan="2" style="color: red;text-align: center">Thông tin tài khoản</td>
                    <tr>
                        <td>Email </td>
                        <td>
                            <input type="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password
                        </td>
                        <td>
                            <input type="text" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nhập lại Password
                        </td>
                        <td>
                            <input type="text" name="repassword">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="color: red;text-align: center">Thông tin đăng ký</td>
                    </tr>
                    <tr>
                        <td>
                            Họ và tên:
                        </td>
                        <td>
                            <input type="text" name="name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Địa chỉ:
                        </td>
                        <td>
                            <input type="text" name="address">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Điện thoại
                        </td>
                        <td>
                            <input type="tel" name="phone-number">
                        </td>
                    </tr>
                    <tr>
                        <td>GIới tính </td>
                        <td>
                            <input type="radio" name="gender" value="Nam" id="">Nam
                            <input type="radio" name="gender" id="Nữ"> Nữ
                        </td>
                    </tr>
                    <tr>
                        <td>Sở thích</td>
                        <td>
                            <input type="checkbox" name="colors[]" value="xanh" id="">Xanh
                            <input type="checkbox" name="colors[]" value="đỏ" id="">Đỏ
                            <input type="checkbox" name="colors[]" value="vàng" id="">Vàng
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Đăng ký">
                            <input type="reset" name="reset" value="Làm lại">

                        </td>
                    </tr>
                </form>

            </table>
        </div>
    </div>

</body>

</html>