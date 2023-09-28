<?php
  //php regex.php
  //https://www.geeksforgeeks.org/php-regular-expressions/
  
  // Declare a regular expression
  $regex = '/^[a-zA-Z ]*$/';
  
  // Declare a string
  //$nameString = 'satish kumar';
  $nameString = 'satish kumar123';
  
  // Use preg_match() function to
  // search string pattern
  if(preg_match($regex, $nameString)) {
      echo("Name string matching with"
          . " regular expression");
  }
  else {
      echo("Only letters and white space"
          . " allowed in name string");
  } 
?>