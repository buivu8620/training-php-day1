<?php
    if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        if($number1 <= 10 || $number2 >= 24){
            echo "<script lang='text/javascript'>";
            echo "alert('Thời gian trong giờ nghỉ ...  Vui lòng nhập lại')";
            echo "</script>";
        }else if($number1 >= $number2){
            echo "<script lang='text/javascript'>";
            echo "alert('Giờ kết thúc phải lớn hơn giờ bắt đầu')";
            echo "</script>";
        }else{
            if($number1 <= 17 && $number2 <= 17){
                $value = ($number2 - $number1) * 20000;
            }else if($number1 > 17 && $number2 <= 24){
                $value = ($number2 - $number1) * 45000;
            }else if($number1 <= 17 &&  17 < $number2 && $number2 <= 24){
                $value = (17 - $number1) * 20000 + ($number2 - 17) * 45000;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./ex22.php" method="post">
        <h3>Tính tiền karaoke</h3>
        <table>
            <tr>
                <td>Giờ bắt đầu:</td>
                <td>
                    <input type="number" name="number1" value="<?php echo isset($number1) ? $number1 : ''?>"> (h)
                </td>
            </tr>
            <tr>
                <td>Giờ kết thúc:</td>
                <td>
                    <input type="number" name="number2" value="<?php echo isset($number2) ? $number2 : ''?>"> (h)
                </td>
            </tr>
            <tr>
                <td>Tiền thanh toán:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($value) ? $value : ''?>"> (VNĐ)
                </td>
            </tr>
            <tr>
                <td colspan=" 2">
                    <input type="submit" name="submit" value="Tính tiền">
                </td>
            </tr>
        </table>
</body>

</html>