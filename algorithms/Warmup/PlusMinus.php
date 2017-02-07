<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

for($i=0; $i<$n; $i++){
    if($arr[$i]>0){
        $pos++;    
    }elseif($arr[$i]<0){
        $neg++;
    }else{
        $zero++;
    }
}
print($pos/$n."\n".$neg/$n."\n".$zero/$n);

?>
