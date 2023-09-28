<?php
  # php constant.php
  #  constant with a case-sensitive name
  define("GREETING", "Welcome to PHP!");
  echo GREETING;

  // # constant with a case-insensitive name(DEPRECATED)
  // define("GREETING", "Welcome to PHP!!", true);
  // echo greeting;
  echo "\n";
  # Array constant
  define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
?>