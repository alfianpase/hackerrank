<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n-$i; $j++){
        print(" ");
    }
    for($k=1; $k<=$i; $k++){
        print("#");
    }
    print("\n");
}

?>
