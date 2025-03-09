<?php


$score = 76;
$color = 'black';
$grade = 'N/A';

/**
 * Grade Table
 * -----------
 * 95+  A+    => blue
 * 90+  A     => green
 * 85+  B+    => skyblue
 * 80+  B     => magenta
 * 75+  C+    => goldenrod
 * 70+  C     => darkgray
 * 65+  D     => black
 * 50+  E     => orange
 * -50  F     => red
 */

// syntax
// if (  ) {  }  
// if (  logical test(s)  ) {   // action(s) to do    }  

if ($score>=95)
{
$grade='A+';
}
elseif($score>=90)
{
    $grade='A';
}
elseif($score>=85)
{
    $grade='B+';

}
elseif($score>=80)
{
    $grade='B';
}
elseif($score>=75)
{
    $grade='C';
    $color='blue';
    
}

elseif($score>=70)
{
    $grade='D';
}
else{
    $grade='F';
}
echo "<h3 style='color: $color'>Score $score is $grade</h3>";

$day_name='monday';
switch($day_name)
{
    case'friday':
    echo"happy weekend";
    break;
case 'saturday':
echo"happy weekend";
break;
default:
echo "enjoy work";
break;
}