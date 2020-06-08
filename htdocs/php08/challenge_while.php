<?php
$sum = 0;
$i = 1;
 
while ($sum < 1000) {
    $sum += $i;
    $i ++;
}

print $sum;
print '<br>';
print $i-1; //最後の($i++は1035を超えた後の処理だから、一個引く必要がある)

?>