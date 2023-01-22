// <4 kyu> - Range Extraction
//https://www.codewars.com/kata/51ba717bb08c1cd60f00002f

<?php
function pushToStr(&$str, $num){
    if(!$str){
      $str = $num;
    }
    else $str .= ",".$num;
}
  
function solution($number): string
{
    $counter = 1;
    $size = count($number);
    
    $str = '';
    
    for($i = 0; $i < $size; $i++){
      if($i+1 < $size && $number[$i+1] == $number[$i] + 1){
        $counter++;
  
        for($j = $i+1; $j < $size; $j++){
          if($j+1 < $size && $number[$j+1] == $number[$j]+1) {
            $counter++;
          }
          else {
            break;
          }
        }
  
        if($counter >= 3){
          if(!$str){
            $str = $number[$i]."-".$number[$i + ($counter-1)];
          }
          else $str.= ",".$number[$i]."-".$number[$i + ($counter-1)];
          
          $i += $counter - 1;
          $counter=1;
        }
        else{ 
          $counter = 1;
  
          pushToStr($str, $number[$i]);
        }
      }
      else{
        pushToStr($str, $number[$i]);
      }
    }
  
    return $str;
}
?>
