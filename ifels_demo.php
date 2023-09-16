<?php
  //php ifels_demo.php
  function doubleMe($x){
    return $x * 2;
  }

  function tripleMe($x){
    return $x * 3;
  }

  $val = tripleMe(doubleMe(10));
  echo $val;
  echo "\n";
  if ($val > 100){
    echo 'The number is greater than 100';
  }else{
    echo 'The number is less then 100';
  }
