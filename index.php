<?php 
    //ex1:
    echo 'ex1: <br>';
    echo 'Học PHP cơ bản và nâng cao tại TopCV.';
    echo '<br>';
    echo 'Ví dụ minh họa lệnh echo. Bạn cũng có thể sử dụng lệnh print';
    echo '<br>';
    echo '<br>';


    //ex2
    echo 'ex2: <br>';
    $var = 'Hướng dẫn PHP';
    echo '<h3>';
    echo $var;
    echo '</h3>'; 

    //ex3
    echo 'ex3: <br>';
    $money1000 = '1000$';
    $money1200 = '1200$';
    $money1400 = '1400$';
    echo "<table border='1'>";
        echo '<tr>';
            echo '<td>';
                echo 'Salary of Mr.A is';
            echo '</td>';
            echo '<td>';
                echo $money1000;
            echo '</td>';
        echo '</tr>';

        echo '<tr>';
            echo '<td>';
                echo 'Salary of Mr.B is';
            echo '</td>';
            echo '<td>';
                echo $money1200;
            echo '</td>';
        echo '</tr>';

        echo '<tr>';
            echo '<td>';
                echo 'Salary of Mr.C is';
            echo '</td>';
            echo '<td>';
                echo $money1400;
            echo '</td>';
        echo '</tr>';
    echo '</table>';
    echo '<br>';    

    //ex4
    echo 'ex4: <br>';
    for($i = 1; $i <= 10; $i++ ){
        if($i == 10){
            echo $i;
        }else{
            echo $i .'-';
        }
    }
    echo "<br>";
    echo "<br>";


    //ex5
    echo 'ex5: <br>';
    $sum = 0;
    for($i = 1; $i <= 20; $i++) {
        $sum += $i;
    }
    echo 'Sum of 1 from 20 using for: '.$sum .'</br>';

    $sumWhile = 0;
    $i = 1;
    while ($i<=20){
        $sumWhile +=$i;
        ++$i;
    }
    echo 'Sum of 1 from 20 using while: '.$sumWhile.'</br>';

    $sumDoWhile = 0;
    $j=1;
    do {
        $sumDoWhile += $j;
        $j++;
    } while ($j<=20);
    echo 'Sum of 1 from 20 using do while: '.$sumDoWhile;
    
    //ex 6
    echo "<br>";
    echo "<br>";
    echo 'ex6: <br>';
    $factorial = 1;
    for($i = 1; $i <= 7 ; $i++){
        $factorial *= $i;
    }
    echo 'factorial of from 1 to 7: '.$factorial;

    //ex7
    echo "<br>";
    echo "<br>";
    echo 'ex7:';

    for($i = 0; $i <= 5; $i++){
        for($j = (5 - $i); $j < 5; $j++ ){
            echo "*";
        }
        echo "<br>";
        
    }
    
    //ex8
    echo "<br>";
    echo 'ex8:';
    for($i = 0; $i <= 5; $i++){
        for($j = (5 - $i); $j < 5; $j++ ){
            echo "*";
        }
        echo "<br>";   
    }
    for($i = 5; $i >= 0; $i--){
        for($j = $i; $j > 0; $j-- ){
            echo "*";
        }
        echo "<br>";   
    }
    //ex9:in bang cuu chuong
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
    echo 'ex9: <br>';
    printMultiplicationTable();

    echo '<br>';
    echo '<br>';

    //ex10: 
    echo 'ex10: <br>';

    echo '<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">';
         
        for($i = 1; $i <= 8; $i++)  
        {  
          echo "<tr>";  
          for($j=1; $j <=8; $j++)  
          {  
            $total=$i + $j;  
            if($total%2 == 0)  
            {  
              echo "<td style='height:30px; width:30px; background-color:#000'></td>";  
            }  
            else  
            {  
              echo "<td style='height:30px; width:30px; background-color:#fff'></td>";  
            }  
          }  
          echo "</tr>";  
        }  
    echo '</table>';
    echo '<br>';
    echo '<br>';
    //ex 11
    echo 'ex11: <br>';
    for($i = 1; $i <= 10; $i++){
        if(($i % 3 == 0) && ($i % 5 == 0)) {
            echo $i . 'FizzBuzz'. "<br/>"; 
        }elseif($i % 3 == 0){
            echo $i . 'Fizz'. "<br/>";
        }elseif($i % 5 == 0){
            echo $i . 'Buzz'. "<br/>";
        }else{
            echo $i . "<br/>";
        }
    }

?>