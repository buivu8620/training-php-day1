<?php
    if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        if($number1 >= $number2) {
            $value = $number1;
        } else {
            $value = $number2;
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
    <form action="./ex20.php" method="post">
        <h3>Tìm số lớn hơn</h3>
        <table>
            <tr>
                <td>Số A:</td>
                <td><input type="number" name="number1" value="<?php echo isset($number1) ? $number1 : ''?>"></td>
            </tr>
            <tr>
                <td>Số B:</td>
                <td>
                    <input type="number" name="number2" value="<?php echo isset($number2) ? $number2 : ''?>">
                </td>
            </tr>
            <tr>
                <td>Số lớn hơn:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($value) ? $value : ''?>">
                </td>
            </tr>
            <tr>
                <td colspan=" 2">
                    <input type="submit" name="submit" value="Tìm">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>