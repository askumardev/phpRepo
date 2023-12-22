<?php
# php array_sort.php
$employees = [
  'john' => [
      'age' => 24,
      'title' => 'Front-end Developer'
  ],
  'alice' => [
      'age' => 28,
      'title' => 'Web Designer'
  ],
  'bob' => [
      'age' => 25,
      'title' => 'MySQL DBA'
  ]
];

krsort($employees, SORT_STRING);
print_r($employees);