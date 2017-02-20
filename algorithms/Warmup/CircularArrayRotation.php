<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$n,$k,$q);
$a_temp = fgets($handle);
$a_temp = trim ($a_temp);
$a = explode(" ",$a_temp);
array_walk($a,'intval');

for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d",$m);
    print($a[($m-($k%$n))<0?$n+$m-($k%$n):$m-($k%$n)]);
    echo "\n";
}


?>
