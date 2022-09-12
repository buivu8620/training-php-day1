<?php
    if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        if($number1 == 0){
            if($number2 == 0){
                $value = "Phương trình vô số nghiệm";
            } else {
                $value = 'Phương trình vô nghiệm';
            }
        } else{
            $value = (-$number2) / $number1;
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
    <form action="./ex21.php" method="post">
        <h3>Giải phương trình bậc nhất</h3>
        <table>
            <tr>
                <td>Phương trình:</td>
                <td>
                    <input type="number" name="number1" value="<?php echo isset($number1) ? $number1 : ''?>"> x +
                    <input type="number" name="number2" value="<?php echo isset($number2) ? $number2 : ''?>"> = 0
                </td>
            </tr>
            <tr>
                <td>Nghiệm:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($value) ? $value : ''?>">
                </td>
            </tr>
            <tr>
                <td colspan=" 2">
                    <input type="submit" name="submit" value="Giải phương trình">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>