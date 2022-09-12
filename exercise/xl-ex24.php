<?php 
    session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];

        $name = $_POST['name'];
        $address = $_POST['address'];
        $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
        $colors = isset($_POST['colors']) ? $_POST['colors'] : '';
        $message = '';


        if(empty($email) || empty($password) || empty($repassword) || empty($address) || empty($name) || empty($gender) || empty($colors)){
            $message = 'Please complete all fields';
            echo "<script type='text/javascript'>alert('$message');</script>";
            // header('Location: ./ex24.php');

        }
        // else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        //     echo 'Invalid email type';
        // }
        else{
            if($password != $repassword){
                $message = 'password, nhập lại password phải giống nhau';
                echo "<script type='text/javascript'>alert('$message');</script>";
                // header('Location: ./ex24.php');
            }else {
                echo "Chúc mừng bạn đăng ký thành công, click <a href=\"./ex24.php\">vào đây</a>
                để chuyển về trang chủ nếu hệ thống không tự chuyển";
                echo "<br>";
                echo "<script type='text/javascript'>setTimeout(function(){
                    location.replace('http://localhost:8080/php%20c%C6%A1%20b%E1%BA%A3n/example/exercise/ex24.php')
                },4000)</script>";
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                echo 'email: '.$email;
                echo '<br>';
                echo 'password: '.$password;
                echo '<br>';
                echo 'Họ và tên: '.$name;
                echo '<br>';
                echo 'Địa chỉ: ' .$address;
                echo '<br>';
                echo 'Giới tính: '. $gender;
                echo '<br>';
                echo 'Sở thích: ';
                foreach($colors as $color) {
                    echo $color .', ';
                }
            }
            
        }
    }
?>