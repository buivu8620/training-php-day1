<?php
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        echo 'Tên file: '. $file['name'];
        echo '<br>';
        echo 'Loại file: ' . $file['type'];
        echo '<br>';
        echo 'Kích cỡ: '. $file['size'] / 1024 . ' kb'; 
        // print_r($file);
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
    <form action="" method="post" enctype="multipart/form-data">
        <h3>Thuộc tính của tập tin</h3>
        <table>
            <tr>
                <td>Tập tin:</td>
                <td>
                    <input type="file" name="file">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Thuộc tính của tập tin">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>