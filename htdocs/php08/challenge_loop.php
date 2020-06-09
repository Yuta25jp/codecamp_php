<?php

for ($i = 1; $i <= 18; $i++) {
    if ($i % 15 === 0) {
        echo 'FizzBuzz' . "\n";
        continue;
    } elseif ($i % 3 === 0) {
        echo 'fizz' . "\n";
        continue;
    } elseif ($i % 5 === 0) {
        echo 'buzz' . "\n";
        continue;
    }
    print $i . "\n";
}
?>