<?php
/* 
 * Даны два числа A и B. Вам нужно вычислить их сумму A + B. 
 * В этой задаче для работы с входными и выходными данными вы можете использовать и файлы и потоки на ваше усмотрение.
*/
    $line = trim(fgets(STDIN)); // читает одну строку из STDIN
    
    $arrayNumbers = explode(" ", $line);
    
    $summ = 0;
    foreach ($arrayNumbers as $number) {
        $summ += $number;
    }
    //fscanf(STDIN, "%d\n", $number); // читает число из STDIN
    echo $summ;
?>
