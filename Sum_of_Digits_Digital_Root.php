//<6 kyu> - Sum of Digits / Digital Root
//https://www.codewars.com/kata/541c8630095125aba6000c00

<?php

function digital_root($number): int
{
  $snumber = strval($number);

  while(strlen($snumber) > 1){
    $s = "";
    $sum = 0;

    for($i = 0; $i < strlen($snumber); $i++){
      if($i){ $s .= " + "; }

      $sum += (int)$snumber[$i];
      $s .= $snumber[$i];
    }
    
    $snumber = strval($sum);
    echo "\n".$s." = ".$sum."\n";
    $number = $sum;
  }
  
  return $number;
}

?>
