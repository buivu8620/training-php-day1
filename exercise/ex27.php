<?php
    $dir = './images/';
    $images = scandir($dir);
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
    <form action="./ex27.php" method="post">
        <h3>Xem hình ảnh</h3>
        <table>
            <tr>
                <td>Chọn hình ảnh</td>
                <td>
                    <select name="image" id="">
                        <?php
                            foreach ($images as $image){
                                $type = pathinfo($image, PATHINFO_EXTENSION);
                                if(in_array($type, array('png', 'jpg', 'jpeg', 'gif'))){
                                    echo "<option value=\"$image\">$image</option>";
                                }
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name='submit' value="Xem">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
    if(isset($_POST['submit'])){
        $image = $_POST['image'];
        echo "<img src=\"./images/$image\" width=\"200\">";
    }
?>