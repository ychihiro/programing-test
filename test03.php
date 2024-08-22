<?php namespace Track;

ini_set("memory_limit", -1);


function main($lines) {

  foreach ($lines as $value) {

    $splittedValue = str_split($value);
    sort($splittedValue);

    if ($splittedValue[0] == '0') {
      for ($i = 1; $i < count($splittedValue); $i++) {
        if ($splittedValue[$i] != '0') {
          $splittedValue[0] = $splittedValue[$i];
          $splittedValue[$i] = '0';
          break;
        }
      }
    }

    $minValue = implode('', $splittedValue);
    printf("%s\n", $minValue);
  }

}


$array = array();

while (true) {

  $stdin = fgets(STDIN);

  if ($stdin == "") {

    break;

  }

  $array[] = rtrim($stdin);

}

main($array);