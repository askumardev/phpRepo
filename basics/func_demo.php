<?php
//php func_demo.php
function doubleMe($x){
  return $x * 2;
}

function tripleMe($x){
  return $x * 3;
}

echo doubleMe(20);
echo "\n";
$val = tripleMe(doubleMe(10));
echo $val;
