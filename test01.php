<?php namespace Track;

ini_set("memory_limit", -1);


function main($lines) {

  foreach ($lines as $squares) {
    $minDiceRolls = ceil(($squares - 1) / 6);
    printf("%s\n", $minDiceRolls);
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

