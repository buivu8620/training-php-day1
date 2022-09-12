<?php 
    if(isset($_POST['submit'])){
        $radius = $_POST['radius'];

        if(empty($radius)){
            echo "<script lang='text/javascript'>";
            echo "alert('please enter radius')";
            echo "</script>";
        }else{
            $cv = 2 * $radius * 3.14;
            $dt = 3.14 * $radius**2;
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
    <form action="./ex15.php" method="post">
        <h3>Diện tích và Chu vi hình tròn</h3>
        <table>
            <tr>
                <td>Bán kính:</td>
                <td><input type="number" name="radius" value="<?php echo isset($radius) ? $radius : ''?>"></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td>
                    <input type="text" name="" disabled value="<?php echo isset($dt) ? $dt : ''?>">
                </td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td>
                    <input type="text" disabled value="<?php echo isset($cv) ? $cv : ''?>">
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