<?php 
    if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $average = ($number1 + $number2 * 2) / 3;
        if($average >= 5){
            $value = 'Được lên lớp';
            if($average >= 8){
                $hl = 'Giỏi';
            }else if($average > 6.5 && $average < 8 ){
                $hl = 'Khá';
            }else if($average > 5 && $average <= 6.5){
                $hl = 'Trung Bình';
            }
        }else{
            $hl = 'Yếu';
            $value = 'Ở lại lớp';
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
    <form action="./ex17.php" method="post">
        <h3>Kết quả học tập</h3>
        <table>
            <tr>
                <td>Điểm học kỳ I:</td>
                <td><input type="number" name="number1" value="<?php echo isset($number1) ? $number1 : '';?>"></td>
            </tr>
            <tr>
                <td>Điểm học kỳ II:</td>
                <td>
                    <input type="number" name="number2" value="<?php echo isset($number2) ? $number2 : '';?>">
                </td>
            </tr>
            <tr>
                <td>Điểm trung bình:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($average) ? $average : '';?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($value) ? $value : '';?>">
                </td>
            </tr>
            <tr>
                <td>Xếp loại học lực:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($hl) ? $hl : '';?>">
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