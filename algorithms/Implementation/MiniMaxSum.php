<?php
$_fp = fopen("php://stdin", "r");
$a = fgets($_fp);
$a = explode(" ", $a);
sort($a);
$sum  = array_sum($a);
echo $sum-$a[count($a)-1]." ";
echo $sum-$a[0];
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

?>
