<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$time);
$pecah = explode(":",$time);
//print_r($pecah);

$str = $pecah[0].":".$pecah[1].":".$pecah[2];

if(substr($str, -2) == 'PM'){
    
    if($pecah[0]==12){
        $pecah[0] = 12;
    }else{
        
    $pecah[0] = $pecah[0]+12;
    }
}
if(substr($str, -2) == 'AM' && $pecah[0] ==12){
    $pecah[0] = "00";
}
$str = $pecah[0].":".$pecah[1].":".$pecah[2];

$sub = substr($str, 0, -2);
echo $sub;
?>
