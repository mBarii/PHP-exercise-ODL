<?php
echo "PHP exercise 5\n";
$around ="around";
echo 'What goes '."$around".', comes '."$around".'.';

echo "\n\nPHP exercise 6\n";
for ($x=1; $x<=12; $x++){
  $y = $x*$x;
  echo "$x * $x = $y\n";
}

echo "\n\nPHP exercise 7\n";
for ($i=1; $i<=7; $i++){
  for ($j=1; $j<=7; $j++){
     $k = $i*$j;
     echo "$k\t";
    }
    echo "\n";
  } 
?>