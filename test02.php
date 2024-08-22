<?php namespace Track;

ini_set("memory_limit", -1);


function main($lines) {
  foreach ($lines as $index => $value) {
    $black = 0;
    $white = 0;

    $row = ['b', 'w'];

    $splittedInput = str_split($value);

    foreach ($splittedInput as $index => $value) {
      // 奇数の場合は黒、偶数の場合は白
      $stoneColor = (($index + 1) % 2 === 0) ? 'w' : 'b';

      switch ($value) {
        case 'L':
          $stoneIndex = array_search($stoneColor, $row) + 1;

          array_unshift($row, $stoneColor);

          $row = reverseStone($stoneIndex, $row);

          break;

        case 'R':
          $reversedStoneRow = array_reverse($row);

          $stoneIndex = array_search($stoneColor, $reversedStoneRow) + 1;

          array_unshift($reversedStoneRow, $stoneColor);

          $reversedStoneRow = reverseStone($stoneIndex, $reversedStoneRow);

          $row = array_reverse($reversedStoneRow);

          break;
      }
  }

  foreach ($row as $value) {
    if ($value == 'b') {
      $black++;
    } else {
      $white++;
    }
  }

  printf("%s %s\n", $black, $white);
  }
}

function reverseStone($index, $row) {
  for ($i = 1; $i < $index; $i++) {
    switch ($row[$i]) {
      case 'b':
        $row[$i] = 'w';
        break;
      case 'w':
        $row[$i] = 'b';
        break;
    }
  }
  return $row;
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