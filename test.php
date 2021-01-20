<?php
for ($i = 1; $i <= 100; $i++) {
   if ($i % 3 === 0 && $i % 5 === 0) {
       echo "fizzbuzz";
       echo "\n";
       continue;
   }
   if ($i % 5 === 0) {
       echo "buzz";
       echo "\n";
       continue;
   }
   if ($i % 3 === 0) {
       echo "fizz";
       echo "\n";
       continue;
   }
   echo $i;
   echo "\n";
}
function getSquareArea($base, $height)
{
   return $base * $height;
}
function getTriangleArea($base, $height)
{
   return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
   return ($upperBase + $lowerBase) * $height / 2;
}

echo "square = ".getSquareArea(5, 5) . "\n";
echo "triangle = ".getTriangleArea(7, 8) . "\n";
echo "trapezoid = ".getTrapezoidArea(4, 5, 4);
?>