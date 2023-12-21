<?php
  # php dataType.php
  $x = "Hello world!";
  $y = 'Hello world!';

  echo $x;
  echo "\n";
  echo $y;

  $x = 5985;
  var_dump($x); #The PHP var_dump() function returns the data type and value.
  var_dump(is_int($x));

  $x = 10.365;
  var_dump($x);
  var_dump(is_int($x));
  var_dump(is_float($x));

  $x = 1.9e411;
  var_dump($x);

  $x = acos(8);
  var_dump($x);

  $cars = array("Volvo","BMW","Toyota");
  var_dump($cars);
  $number = 4 + 5;
  
  echo $number;
  echo "\n";
  $str = 'satish';
  echo 'The name is ' . $str . " u entered." ;
  echo "\n";
  echo "The name is $str u entered";

?>