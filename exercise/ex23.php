<?php
    if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];
        
        if($number1 == $number2 &&  $number2 == $number3 && $number3 == $number1) {
            $value = 'Tam giác đều';
        } else if($number1 == $number2 || $number2 == $number3 || $number3 == $number1) {
            if(($number1 ** 2 + $number2 ** 2) == $number3 ** 2 || ($number2 ** 2 + $number3 ** 2) == $number1 ** 2 || ($number3 ** 2 + $number1 ** 2) == $number2 ** 2 ) {
                $value = 'Tam giác vuông cân';
            }else {
                $value = 'Tam giác cân';
            }
        } else if(($number1 ** 2 + $number2 ** 2) == $number3 ** 2 || ($number2 ** 2 + $number3 ** 2) == $number1 ** 2 || ($number3 ** 2 + $number1 ** 2) == $number2 ** 2 ) {
            $value = 'Tam giác vuông';
        } else if( ($number1 + $number2) < $number3  || ($number2 + $number3) < $number1 || ($number1 + $number3) < $number2) {
            $value = 'Không tồn tại tam giác';
        } else {
            $value = 'Tam giác thường';
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
    <form action="./ex23.php" method="post">
        <h3>Nhận dạng tam giác</h3>
        <table>
            <tr>
                <td>Cạnh A:</td>
                <td>
                    <input type="number" name="number1" value="<?php echo isset($number1) ? $number1 : ''?>"> (cm)
                </td>
            </tr>
            <tr>
                <td>Cạnh B:</td>
                <td>
                    <input type="number" name="number2" value="<?php echo isset($number2) ? $number2 : ''?>"> (cm)
                </td>
            </tr>
            <tr>
                <td>Cạnh C:</td>
                <td>
                    <input type="number" name="number3" value="<?php echo isset($number3) ? $number3 : ''?>"> (cm)
                </td>
            </tr>
            <tr>
                <td>Loại tam giác:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($value) ? $value : ''?>">
                </td>
            </tr>
            <tr>
                <td colspan=" 2">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>