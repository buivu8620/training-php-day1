<?php
    //ex1: 
    echo '<h2>ex1:</h2>';
    echo '<h3>';
    echo mb_strtoupper('Chào mừng các bạn đến với lập trình web php', 'utf-8');
    echo '</h3>';    
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
    <h2>Bai 3:</h2>
    <?php
        function calculation($x, $y){
            echo "$x + $y = ". ($x + $y) .'<br>';
            echo "$x - $y = ". ($x - $y) .'<br>';
            echo "$x * $y = ". $x * $y .'<br>';
            echo "$x / $y = ". $x / $y .'<br>';
            echo "$x % $y = ". $x % $y .'<br>';
        }
        echo 'a) <br>';
        calculation(3,5);

        echo 'b) <br>';
        calculation(rand(1,10), rand(1,10));

        echo 'c) <br>';
        $x = rand(1,10);
        $y = rand(1,10);
        do {
            
            $x = rand(1,10);
            $y = rand(1,10);
        } while ($x < $y);
        calculation($x, $y);
        
        echo 'd) <br>';
        $a = rand(1,10);
        $k = rand(1,10);
        calculation( $a*$k, $a);

        echo 'e,f) <br>';
        $c = rand(1,10);
        $d = rand(1,10);
        function UCLN($a, $b)
        {
            while ( $a != $b)
            {
                if ($a > $b)
                    $a = $a - $b;
                else
                    $b = $b - $a;
            }
            return $a; 
        }

        function BCNN($a, $b){
            $result = UCLN($a, $b);
            return  $a * $b / $result;
        }
        echo "BCNN $c va $d la:";
        echo BCNN($c, $d);
        echo "<br>";
        echo "UCLN $c, $d la:";
        echo UCLN($c, $d);
    ?>

    <h2>bai 4:</h2>
    <table border="1" cellpadding='10' cellspacing="0">
        <tr>
            <th>i</th>
            <th>i <sup>2</sup></th>
        </tr>
        <?php
            for($i = 0; $i <= 5; $i++){
                echo "<tr>";
                    echo "<td>";
                        echo $i;
                    echo "</td>";

                    echo "<td>";
                        echo $i**2;
                    echo "</td>";
                echo "</tr>";

            }
        ?>
    </table>

    <h2>Bai 5:</h2>
    <?php
        for($i = 1; $i <= 100; $i++){
            if($i % 2 ==0){
                echo "<b style='color:red;'>$i</b>";
                echo ' ';
            }else{
                echo $i .' ';
            }
        }
    ?>

    <h2>Bai 6:</h2>
    <table border="1" cellpadding='10' cellspacing="0">
        <tr>
            <th>STT</th>
            <th>Tên Sách</th>
            <th>Nội dung sách</th>
        </tr>
        <?php
            for($i = 1; $i <= 5; $i++){
                echo "<tr>";
                    echo "<td>";
                        echo $i;
                    echo "</td>";

                    echo "<td>";
                        echo 'Tên sách'.$i;
                    echo "</td>";

                    echo "<td>";
                        echo 'Nội dung sách'.$i;
                    echo "</td>";
                echo "</tr>";

            }
        ?>
    </table>

    <h2>Bai 7:</h2>
    <select name="" id="">
        <?php
            $now = date('Y');
            for($i = 2000; $i <= $now; $i++){
                echo "<option value=''> $i";
                echo "</option>";
            }
        ?>
    </select>

    <h2>Bai 8:</h2>
    <?php
        function printMultiplicationTable(){
            echo "<table border='1'>";
            echo "<tr>";
    
            for($i = 1; $i <= 10; $i++){
                
                echo "<td>";
                for($j = 1; $j <= 10; $j++){
                    echo "$i * $j = ". ($i*$j) ;
                    echo "</br>";
                }
                echo "</td>";
                
            }
            echo "</tr>";
    
            echo "</table>";
        }
        printMultiplicationTable();
    ?>
    <h2>Bai 9:</h2>
    <?php
        $arr = [1,4,3,5,8,12];
        $arrLength = count($arr);
        echo "Mang gom: ";
        foreach($arr as $key=>$value){
            if(($key + 1) == $arrLength){
                echo $value;
            }else{
                echo $value .', ';
            }
        }
        echo "<br>";
        $countEven = 0;
        foreach($arr as $value){
            if($value % 2 == 0){
                $countEven++;
            }
        }
        echo "So cac so chan: $countEven <br>";
        $sumOdd = 0;
        foreach($arr as $value){
            if($value % 2 != 0){
                $sumOdd += $value;
            }
        }
        echo "Tong so cac so le: $sumOdd <br>";
        $max = $arr[0];
        $min = $arr[0];
        foreach($arr as $value){
            if($value > $max){
                $max = $value;
            }
        }
        echo "So lon nhat cua mang la: $max <br>"; 
        foreach($arr as $value){
            if($value < $min){
                $min = $value;
            }
        }
        echo "So nho nhat cua mang la: $min <br>"; 
        echo "Mang dao nguoc cua mang la: ";
        foreach(array_reverse($arr) as $key=>$value){
            if(($key + 1) == $arrLength){
                echo $value;
            }else{
                echo $value .', ';
            }
        }
        echo "<br>";
    ?>

    <h2>Bai 10:</h2>
    <?php
        $list = array("alpha", "beta", "gamma", "delta", "epsilon");
        echo "Mang gom: ";
        foreach($list as $key=>$value){
            if(($key + 1) == count($list)){
                echo $value;
            }else{
                echo $value .', ';
            }
        }
        
    ?>
</body>

</html>