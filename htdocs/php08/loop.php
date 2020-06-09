<?php
$loop = 100000000;
$sum  = 0;
for ($i = 1; $i <= $loop; $i++) {
   $sum = $sum + $i;
}
print '1から' . $loop . 'まで足した合計値は' . $sum;
?>