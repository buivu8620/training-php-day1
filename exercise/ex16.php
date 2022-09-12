<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $oldNumber = $_POST['oldNumber'];
        $newNumber = $_POST['newNumber'];
        $price = $_POST['price'];
        $value = ($newNumber - $oldNumber) * $price;    
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
    <form action="./ex16.php" method="post">
        <h3>Thanh toán tiền điện</h3>
        <table>
            <tr>
                <td>Tên chủ hộ:</td>
                <td>
                    <input type="text" name="name" id="" value="<?php echo isset($name) ? $name : '';?>">
                </td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td>
                    <input type="number" name="oldNumber" id=""
                        value="<?php echo isset($oldNumber) ? $oldNumber : '';?>"> (kW)
                </td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td>
                    <input type="number" name="newNumber" value="<?php echo isset($newNumber) ? $newNumber : '';?>">
                    (kW)
                </td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td>
                    <input type="number" name="price" value="<?php echo isset($price) ? $price : '';?>"> (VNĐ)
                </td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($value) ? $value : '';?>"> (VNĐ)
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Tính">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>