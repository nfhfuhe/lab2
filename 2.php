<?php
for($i = 1; $i <= 100;$i += 1){
    $result = true;
    for($i2 = 2; $i2 < $i;$i2 += 1){
        if($i % $i2 === 0){
            $result = false;
        }
    }
    if($result === true){
        echo $i . " простое число \n ";
    }
}