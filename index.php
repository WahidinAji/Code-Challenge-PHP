<?php
function FunctionName($arr)
{
  $array = array(1, 1, 1, -5);
  // $array = array(0, 0, 2, 3, 7, 1);
  sort($array);
  print_r("\nInput: ") . print_r($array);
  $p1 = array_pop($array);
  $p2 = array_pop($array);
  $p3 = array_pop($array);
  $p4 = array_pop($array);

  // $arr = print_r($p1 + $p2 + $p3 + $p4);
  // echo $p1
  $arr = $p1 + $p2 + $p3 + $p4;
  return "\nOutput: " . $arr;
}
echo FunctionName(fgets(fopen('E:\laragon\www\TestJavan\index.php', 'r')));
