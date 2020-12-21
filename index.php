<?php
function FunctionName($longestKey)
{
  $array = array("coder", "byte", "code");
  // $array = array("abc", "defg", "z", "hijk");
  usort($array, function ($a, $b) {
    return strlen($a) > strlen($b);
  });
  // $p = print_r($array);
  print_r("Input: ") . print_r($array);
  array_pop($array);
  array_pop($array);
  $longestKey = array_reduce($array, function ($a, $b) {
    $var =  strlen($a) > strlen($b) ? $a : $b;
    return $var;
  });

  return "Output: " . $longestKey;
}
echo FunctionName(fgets(fopen('E:\laragon\www\TestJavan\index.php', 'r')));

// function ArrayChallenge($strArr)
// {
//   $var = array("coder", "byte", "code");
//   $c = $var[0];
//   $len = strlen($c);
//   return $len;
// }
// echo ArrayChallenge(fgets(fopen('E:\laragon\www\TestJavan\index.php', 'r')));



// function FunctionName($longestKey)
// {
//   $array = array('ss', 'ggg', 'ddfdfddf', 'ssssdssssss', 'saadadsadasdasdasasd');
//   array_pop($array);
//   $longestKey = array_reduce($array, function ($a, $b) {
//     $var =  strlen($a) > strlen($b) ? $a : $b;
//     return $var;
//   });
//   return $longestKey;
// }
// echo FunctionName(fgets(fopen('E:\laragon\www\TestJavan\index.php', 'r')));
  
  
  
  //  $colors = array("red", "green", "blue", "yellow");
  // foreach ($colors as $value) {
  //   // strlen($value);
  //   // $min = min($value);
  //   // min($value);
  //   echo $value . "\n";
  // }