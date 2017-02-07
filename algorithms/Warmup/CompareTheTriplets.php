<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$a0,$a1,$a2);
fscanf($handle,"%d %d %d",$b0,$b1,$b2);
$arr = array();
$brr = array();
$alice = 0;
$bob = 0;
array_push($arr, $a0, $a1, $a2);
array_push($brr, $b0,$b1,$b2);
for($i=0; $i<=2; $i++){
    if($arr[$i] > $brr[$i]){
        
        $alice++;
    }elseif($arr[$i] < $brr[$i]){
        $bob++;
        
    }else{
        $c++;
    }
}
print($alice." ".$bob);

?>
