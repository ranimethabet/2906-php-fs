<?php

# Create the following loops

## Print Numbers from 1 to 10
## Write a for loop that prints numbers from 1 to 10. (while)
$x=1;
while ($x<=10)
{
    echo"$x <br/>";
    $x++;
}
echo "<hr/>";

## Reverse Countdown
##print numbers from 10 down to 1. (do-while)
$y=10;
do 
{
    echo"$y<br/>";
  $y--;
}
while ($y>0);
echo"<hr/>";

## Print Even Numbers up to 20
## Prints all even numbers from 1 to 20 starting the count from 1. (for)


for ($i=1;$i<=20;$i++)
{
$m=$i%2;
   if ( $m == 0)
{
    echo"$i<br>";
}

}

echo"<hr/>";
## Multiplication Table of 5
# Write a for loop that prints the multiplication table of 5 up to 5 × 10. (for)
for($a=1;$a<=10;$a++)
{ $b=$a*5;
    echo"5*$a=$b<br/>";
}
echo"<hr/>";

## Print Square of Numbers from 1 to 5
#print the square of numbers from 1 to 5. (while)

$v=1;
while($v<=5)
{
    $c=pow($v,2);
    echo"The square of $v is $c<br/>";
    $v++;
}
echo "<hr/>";
## create the timetable 1 - 12
# Print the math timetable from 1 to 12 (optional)
$z=1;
$t=1;
while($t<=12)
{
      while ($z<=12)
   {
    $w=$t*$z;
    echo"$t*$z=$w <br/>";
    $z++;
   }
$t++;
$z=1;
echo"<hr/>";
}

for ($e=1;$e<=12;$e++)
 {
    for ($n=1;$n<=12;$n++)
    { $o=$e*$n;
    echo "$e*$n=$o <br/>";
     }
     echo"<hr/>";
 }