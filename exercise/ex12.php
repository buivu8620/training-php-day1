<?php

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
    <form action="./ex12.php" method="post" style="text-align: center; width:30%">
        <h3>Phép tính trên hai số</h3>
        <table width=100%>
            <tr>
                <td align=right>Chọn phép tính:</td>
                <td align=left>
                    <input type="radio" name="calculation" value="plus">Cộng
                    <input type="radio" name="calculation" value="sub">Trừ
                    <input type="radio" name="calculation" value="mul">Nhân
                    <input type="radio" name="calculation" value="div">Chia

                </td>
            </tr>
            <tr>
                <td align=right>Số thứ nhất:</td>
                <td align=left>
                    <input type="number" name="number1">
                </td>
            </tr>
            <tr>
                <td align=right>Số thứ hai:</td>
                <td align=left>
                    <input type="number" name="number2">
                </td>
            </tr>
            <tr>
                <td align=right>Kết quả:</td>
                <td align=left style="color:red">
                    <?php
                    if(isset($_POST['calculate'])){
                        $number1 = $_POST['number1'];
                        $number2 = $_POST['number2'];
                        $calculation = $_POST['calculation'];
                        switch($calculation){
                            case 'plus':
                                echo ($number1 + $number2);
                                break;
                            case 'sub':
                                echo ($number1 - $number2);
                                break;
                            case 'mul':
                                echo ($number1 * $number2);
                                break;
                            case 'div':
                                if($number2 == 0){
                                    echo "<script lang='text/javascript'>";
                                    echo "alert('Trong phép chia số thứ 2 phải khác 0')";
                                    echo "</script>";
                                }else{
                                    echo ($number1 / $number2);
                                }
                                break;
                            default:
                                break;
                        }
                    }
                ?>
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="calculate" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>