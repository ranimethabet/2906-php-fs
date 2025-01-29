# PHP Functions Questions

### 1. Write a function `addNumbers` that takes two numbers as parameters and returns their sum.

<?php
$sum = 0;
function addNumbers($a, $b) {
    global $sum;
    $sum =$a+$b;
    return $sum;
}
var_dump (addNumbers(1, 2));



### 2. Create a function `multiply` that multiplies three numbers and returns the result.


function multiply($a, $b, $c) {
  return $a * $b * $c;

}
var_dump (multiply(2, 3, 1));


### 3. Implement a function `divide` that divides two numbers and returns the quotient.


function divide($a, $b) {
    return $a/$b;

}
var_dump (divide(10,5));

### 4. Write a function `calculateArea` to find the area of a rectangle given its width and height.

function calculateArea($width, $height) {
    return $width * $height;
}
var_dump(calculateArea(5, 6));


### 5. Create a function `square` that takes one number as input and returns its square.

function square($number) {
    return $number * $number;
}
var_dump(square(5));

### 6. Write a function `cube` to calculate the cube of a number.

function cube($num) {
    return $num * $num * $num;
}
 var_dump (cube(3));

### 7. Implement a function `convertToMinutes` that converts hours to minutes.

function convertToMinutes($hours) {
    return $hours * 60;
}
var_dump (convertToMinutes(2));

### 8. Write a function `convertToSeconds` that converts days to seconds.

function convertToSeconds($days) {
return $days * 24 * 60 * 60;
}
var_dump(convertToSeconds(2));

### 9. Create a function `calculatePerimeter` for the perimeter of a rectangle, given width and height.

function calculatePerimeter($width, $height) {
return (2 * $width) +(2* $height);
}
var_dump (calculatePerimeter(3, 4));

### 10. Write a function `average` to calculate the average of three numbers.

function average($a, $b, $c) {
return ($a+$b+$c)/3;
}
var_dump(average(5,6,7));

### 11. Create a function `convertTemperature` to convert Celsius to Fahrenheit.

function convertTemperature($celsius) {
return $celsius * (9/5) + 32;
}
 var_dump (convertTemperature(25));
 

### 12. Implement a function `calculateSpeed` that calculates speed given distance and time.


function calculateSpeed($distance, $time) {

return $distance / $time;

}
 var_dump (calculateSpeed(100,2));


### 13. Write a function `hypotenuse` that calculates the hypotenuse of a right triangle given its two sides.

function hypotenuse($sideA, $sideB) {
return sqrt(pow($sideA,2) + pow($sideB,2));
}

var_dump(hypotenuse(3, 4));


### 14. Create a function `power` that raises a number to a given exponent.

function power($base, $exponent) {
return pow($base,$exponent);
}

var_dump ( power(2,2) );


### 15. Write a function `modulus` to find the remainder when one number is divided by another.


function modulus($a, $b) {
    return $a % $b;
}
var_dump ( modulus(15, 2));

### 16. Implement a function `calculateBMI` that calculates the Body Mass Index given weight and height.


function calculateBMI($weight, $heigh) {
return $weight/ pow($heigh/100,2) ;   
}
var_dump(calculateBMI(70, 170));



### 17. Create a function `convertToKilometers` to convert meters to kilometers.

function convertToKilometers($meters) {
return $meters/1000;

}
var_dump(convertToKilometers(1000));

### 18. Write a function `calculateInterest` to calculate simple interest given principal, rate, and time.


function calculateInterest($principal, $rate, $time) {

return $principal * $rate * $time/100;


}
 var_dump(calculateInterest(1000, 4, 3));
### 19. Create a function `compoundInterest` that calculates compound interest given principal, rate, and time.


function compoundInterest($p, $r, $t) {
return $p * pow((1+$r/100),$t) - $p;

}
var_dump(compoundInterest(1000, 5, 3));

### 20. Implement a function `findPercentage` that calculates the percentage of a given value out of a total.

function findPercentage($value, $total) {

return $value / $total *100;

}
var_dump(findPercentage(50, 100));
