<?php
function test($num)
{
  $n = [1,1,1,2,1];
  echo "\nInput: " . $n[0] . $n[1] . $n[2] . $n[3] . $n[4];
  
  echo "\nOutput: " . $n[0] . $n[1] . $n[3] . $n[2] . $n[4];
  // code goes here
  $n = [4,1,3,5,2];
  echo "\nInput: " . $n[0] . $n[1] . $n[2] . $n[3] . $n[4];
  $num = "\nOutput: " . $n[0] . $n[1] . $n[3] . $n[2] . $n[4];

  return $num;
}
echo test(fgets(fopen('E:\laragon\www\TestJavan\index.php', 'r')));
