<?php
$x = 5;
$result = 1;
$i = 1;
while($i <= $x){
    $result = $i * $result;
    $i += 1;
}
echo $result;