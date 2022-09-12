<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./ex27-28.php" method="post">
        <h3>Xem thư mục hình ảnh</h3>
        <table>
            <tr>
                <td>Chọn thư mục hình ảnh</td>
                <td>
                    <select name="folder" id="">
                        <option value="images">images</option>
                        <option value="anything">anything</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kích cỡ hiển thị</td>
                <td>
                    <select name="size" id="">
                        <option value="100">100 x 100</option>
                        <option value="200">200 x 200</option>
                        <option value="300">300 x 300</option>
                        <option value="400">400 x 400</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Xem hình ảnh">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php
    if(isset($_POST['submit'])){
        $folder = $_POST['folder'];
        $dir = "./$folder/";
        $size = $_POST['size'];
        $images = scandir($dir);
        // print_r($images);
        echo 'Name folder: '. $folder;
        echo '<br />';
        echo 'Size: ' .$size;
        echo '<br />';
        foreach($images as $image){
            $type = pathinfo($image, PATHINFO_EXTENSION);
            // echo $type;
            if(in_array($type, array('png', 'jpg', 'jpeg', 'gif'))){
                echo "<img src=\"./$folder/$image\" width=\"$size\" height=\"$size\" >";
            }
        }
    }
    
?>