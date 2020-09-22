<?php
echo "1." . "<br>";
$star = 5;
for ($a = 1; $a <= $star; $a++) {
  for ($i = 1; $i <= $a; $i++) {
    echo " &nbsp";
  }
  for ($c = $star; $c >= $a; $c -= 1) {
    echo "*";
  }
  echo "<br>";
}
echo "2." . "<br>";

$a = 5;
while ($a > 1) {
  $b = $a;
  while ($b >= 1) {
    echo "*";
    $b = $b - 1;
  }
  echo "<br>";
  $a = $a - 2;
}

echo "</center>";
echo "<center>";
echo "3." . "<br>";
$a =10;
while ($a > 1) {
  $b = $a;
  while ($b >= 1) {
    echo $b;
    $b = $b - 1;
  }
  echo "<br>";
  $a = $a - 2;
}
?>