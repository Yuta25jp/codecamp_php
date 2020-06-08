<?php
$answer = 0;
 
for($i = 1; $i <= 100; $i++){ 
    if($i % 3 == 0){
        $answer = $answer + $i;
    }
}
 
print $answer; 

?>