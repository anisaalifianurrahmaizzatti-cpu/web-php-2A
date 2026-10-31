<?php
$x = true;
$y = false;

// AND (&&)
$z = $x && $y;
printf("%b && %b = %b", $x, $y, $z);
echo "<br>";

// OR (||)
$z = $x || $y;
printf("%b || %b = %b", $x, $y, $z);
echo "<br>";

// NOT (!)
$z = !$x;
printf("!%b = %b", $x, $z);
echo "<br>";
?>