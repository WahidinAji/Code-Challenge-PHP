<?php

function StringChallenge($str)
{
  echo "Input: ";
  $words = fopen("php://stdin", "r");
  $input = trim(fgets($words));
  $ex = explode(" ", $input);
  $im = implode($ex);
  $str = $im == strrev($im) ? 'true' : 'false';
  return $str;
}
echo StringChallenge(fgetc(fopen('E:\laragon\www\TestJavan\index.php', 'r')));
