<?php

function uniqueInOrder($iterable){
    $ret = [];
    $size = 0;
    
    if(is_string($iterable)){
      $size = strlen($iterable);
    }
    else{
      $size = count($iterable);
    }
    
    for ($i = 0; $i < $size; $i++){
        if($i+1 < $size && $iterable[$i] != $iterable[$i+1] ){
          array_push($ret, $iterable[$i]);
        }
        else if($i+1 >= $size) array_push($ret, $iterable[$i]);
      }
    
    return $ret;
}

?>