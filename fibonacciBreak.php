<?php

$first = 1;
$second = 2;

for ($i = 0; $i < 10; $i++) {
    if ($first > 100) {
        break;
    }
    
    echo $first . ", ";

    $next = $first + $second;
    $first = $second;
    $second = $next;
}

?>
