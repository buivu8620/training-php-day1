<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        First Name: <br>
        <input type="text" name="first_name">
        <br>
        Last Name: <br>
        <input type="text" name="last_name">
        <br> <br>
        <button type="submit" name="submit">Submit</button>
        <button type="reset" name="reset">Reset</button>
    </form>
    <br> <br>

</body>

</html>
<?php
    if(isset($_POST['submit'])){
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        echo "Your First Name: " . $firstName.'<br>';
        echo "Your Last Name: " . $lastName.'<br>';

    }
?>