<?php
  # php loop.php
  // while loop
  echo "**********while loop*****************\n";
  $x = 1;
  while($x <= 5) {
    echo "The number is: $x \n";
    $x++;
  }
  
  // do-while loop
  echo "**********do-while loop*****************\n";
  $x = 1;
  do {
    echo "The number is: $x \n";
    $x++;
  } while ($x <= 5);

  // for loop
  echo "**********for loop*****************\n";
  for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x \n";
  }

  // for-each loop
  echo "**********for-each loop*****************\n";
  $colors = array("red", "green", "blue", "yellow");
  foreach ($colors as $value) {
    echo "$value \n";
  }
  
  // break in while loop
  echo "********** break in while loop*****************\n";
  $x = 0;
  while($x < 10) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x \n";
    $x++;
  }

  // continue in while loop
  echo "********** continue in while loop*****************\n";
  $x = 0;
  while($x < 10) {
    if ($x == 4) {
      $x++;
      continue;
    }
    echo "The number is: $x \n";
    $x++;
  }

?>