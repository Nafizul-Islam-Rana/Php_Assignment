<?php

function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}

printEvenNumbers(1, 20, 1);
echo "\n"; 
?>


<?php
function printEvenNumbersForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . ", ";
        }
    }
}

printEvenNumbersForLoop(1, 20, 1);
echo "\n"; 
?>

<?php
function printEvenNumbersWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i += $step;
    }
}

printEvenNumbersWhileLoop(1, 20, 1);
echo "\n"; 
?>

<?php
function printEvenNumbersDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . ", ";
        }
        $i += $step;
    } while ($i <= $end);
}

printEvenNumbersDoWhileLoop(1, 20, 1);
echo "\n";
?>
