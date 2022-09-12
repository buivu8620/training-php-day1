<?php 
    session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if($email == $_SESSION['email'] && $password == $_SESSION['password']){
            echo '<script>';
            echo "alert('Đăng nhập thành công')";
            // echo "document.querySelector('.form').remove()";
            echo '</script>';  
            header('Location: ./success-ex25.php');          
        } else {
            echo '<script>';
            echo "alert('Sai tên đăng nhập hoặc password')";
            echo '</script>';
        }
    }

?>

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
                        <a href="./ex24.php">Đăng ký</a>
                    </td>
                </tr>
                <tr>
                    <td>Đăng nhập</td>
                </tr>
            </table>
        </div>
        <div class="form">
            <table border="0" cellspacing="0" cellpadding="5">
                <h3>Thông tin đăng nhập</h3>
                <form action="" method="post" id="form-login">
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="email" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="text" name="password" id="">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Đăng nhập">
                            <input type="reset" name="reset" value="Làm lại">

                        </td>
                    </tr>
                </form>

            </table>
        </div>
    </div>

</body>

</html>