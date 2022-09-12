<?php
    if(isset($_POST['submit'])){
        $math = $_POST['math'];
        $physical = $_POST['physical'];
        $chemical = $_POST['chemical'];
        $standard = $_POST['standard-point'];
        $total = $math + $physical + $chemical;
        if(($math != 0 || $physical != 0 || $standard != 0) && $total >= $standard ){
            $value = 'Đậu';
        }else{
            $value = 'Trượt';
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
    <form action="./ex18.php" method="post">
        <h3>Kết quả thi đại học</h3>
        <table>
            <tr>
                <td>Toán:</td>
                <td><input type="number" name="math" value="<?php echo isset($math) ? $math : '';?>"></td>
            </tr>
            <tr>
                <td>Lý:</td>
                <td>
                    <input type="number" name="physical" value="<?php echo isset($physical) ? $physical : '';?>">
                </td>
            </tr>
            <tr>
                <td>Hóa:</td>
                <td>
                    <input type="number" name="chemical" value="<?php echo isset($chemical) ? $chemical : '';?>">
                </td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td>
                    <input type="number" name="standard-point" value="<?php echo isset($standard) ? $standard : '';?>">
                </td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($total) ? $total : '';?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả thi:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($value) ? $value : '';?>">
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