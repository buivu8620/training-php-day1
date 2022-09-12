<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    $value;
    if(isset($_POST['submit'])){
        $length = $_POST['length'];
        $width = $_POST['width'];

        if(empty($length) || empty($width)){
            echo "<script lang='text/javascript'>";
            echo "alert('Please enter all required fields')";
            echo "</script>";
        }else if($length <= 0 || $width <= 0){
            echo "<script lang='text/javascript'>";
            echo "alert('side lengths must be greater than 0')";
            echo "</script>";
        }else{
            $value = $length * $width;
            
        }
    }
?>

<body>
    <form action="./ex14.php" method="post">
        <h3>Diện tích hình chữ nhật</h3>
        <table border=0>
            <tr>
                <td>Chiều dài:</td>
                <td>
                    <input type="number" name="length" value="<?php echo isset($length) ? $length: ''?>">
                </td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td>
                    <input type="number" name="width" value="<?php echo isset($width) ? $width: ''?>">
                </td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($value)? $value: ''?>">
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>