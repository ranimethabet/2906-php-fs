<?php

### 1. **Simple Greeting**

//Create a function `greet()` that accepts a name as a parameter and echoes "Hello, [name]!"

function greet($name)
{
    echo '<hr />';
    echo"hello $name";
}
greet ('ranime');

### 2. **Age Message**

//Create a function `displayAge()` that accepts a name and age as parameters and echoes "[name] is [age] years old."
function displayAge($name,$age)
{
    echo '<hr />';
    echo "$name is $age years old";

}
displayAge('ranime','33');

### 3. **Sum of Two Numbers**

//Create a function `addNumbers()` that accepts two numbers as parameters and echoes their sum.
function addNumbers($fnumber,$snumber)
{   echo '<hr />';
    $sum=$fnumber+$snumber;
    echo "$fnumber+$snumber=$sum";
}
addNumbers(5,6);


### 4. **Multiplication Table**

//Create a function `multiply()` that accepts two parameters: a number and how many times to multiply it. Echo the result of the multiplication.
function myltiply($num1,$num2)
{
    echo '<hr />';
$result=$num1*$num2;
echo "$num1*$num2=$result";
}
myltiply(5,6);

### 5. **Full Name**

//Create a function `getFullName()` that accepts first name and last name as parameters and echoes the full name.
function getFullName($fName,$sName)
{
    echo '<hr />';
    echo "my name is $fName $sName";
}
getFullName('ranime','abdelaziz');

### 6. **Person Introduction**

//Create a function `introducePerson()` that accepts a name, age, and city as parameters, and echoes a message: "My name is [name], I am [age] years old, and I live in [city]."
function introducePerson($name,$age,$city)
{
    echo'<hr />';
    echo "My name is $name , I am $age , I live in $city";
}
introducePerson('ranime','33','alexandria');


### 8. **Simple Discount**

//Create a function `applyDiscount()` that accepts the original price and a discount percentage as parameters, then echoes the discounted price.
function applyDiscount($price,$discount)
{
    echo '<hr />';
    $the_Discounted_price=$price-$price*$discount/100;
    echo "original price is $price ,the discounted price is $the_Discounted_price";
} 
applyDiscount(100,20);



### 9. **Rectangle Area**

//Create a function `rectangleArea()` that accepts the width and height of a rectangle as parameters, and echoes the area (width * height).
function rectangleArea($width,$height)
{
    echo '<hr />';
    $rectangleArea = $width*$height;
    echo "the rectangle area is $rectangleArea";
}
rectangleArea(5,4);


### 10. **Simple Calculator**

//Create a function `calculate()` that accepts two numbers then echos (addition, subtraction, multiplication, and division) as results.
function calculate($n1,$n2)
{
    echo '<hr />';
    $addition=$n1+$n2;
    $subtraction=$n1-$n2;
    $multiplication=$n1*$n2;
    $division=$n1/$n2;
    echo "$n1+$n2 =$addition";
    echo '<br />';
    echo "$n1-$n2 =$subtraction";
    echo '<br />';
    echo "$n1*$n2 =$multiplication";
    echo '<br />';
    echo "$n1/$n2=$division";
}
calculate(10,5);

### 11. **Temperature Converter**

//Create a function `convertToCelsius()` that accepts a temperature in Fahrenheit as a parameter and converts it to Celsius (use the formula: (F - 32) * 5/9).
function convertToCelsius($ft)
{
    echo '<hr />';
    $ct=($ft-32)*5/9;
    echo "the temprature is $ct degree celsius";
}
convertToCelsius(100);

### 12. **Circle Area**

//Create a function `circleArea()` that accepts the radius of a circle as a parameter and echoes the area of the circle (3.17 * radius^2).
function circleArea($radius)
{
    echo '<hr />';
    $area=3.14*$radius*$radius;
    echo "the radius of the circle is $radius then the circle area is $area "; 
}
circleArea(5);


### 15. **Concat Strings**

//Create a function `concatStrings()` that accepts two strings as parameters and echoes their concatenated result.

function concatStrings($s1,$s2)
{
    echo '<hr />';
    echo "$s1 $s2";
}
concatStrings('my name is','ranime');



### 16. **Exchange Rate**

//Create a function `convertCurrency()` that accepts an amount in EGP and a conversion rate, and other currency, and echoes the converted amount.

function convertCurrency($amount,$currency,$rate)
{
    echo '<hr />';
    $converted_amount=$amount/$rate;
    echo "$amount EGP , the converted amount is $converted_amount $currency";
}
convertCurrency(1000,'USD',50);


### 17. **Add Prefix to Name**

//Create a function `addPrefix()` that accepts a prefix and a name as parameters and echoes the name with the prefix added.
function addPrefix($n,$pre)
{
    echo'<hr />';
    echo "$n , the name with the prefix added is $pre$n";
}
addPrefix('play','re');

### 18. **Length of a String**

//Create a function `stringLength()` that accepts a string and echoes the length of the string.
function stringLength($string)
{
    echo '<hr />';
    echo "$string , the string length is :" . strlen($string);
}
stringLength('hello');
### 19. **Personalized Welcome**

//Create a function `welcomeUser()` that accepts a name and a city as parameters, and echoes "Welcome [name] from [city]!"
function welcomeUser($n_ame,$c_ity)
{
    echo '<hr />';
    echo "welcome $n_ame from $c_ity";
}
 welcomeUser('ranime','alexandria');

### 20. **Power of Number**

//Create a function `powerOfNumber()` that accepts a base number and an exponent as parameters, and echoes "the result of base raised to the power of exponent".
function powerOfNumber($base_number,$exponent)
{
    echo '<hr />';
    echo "the result of $base_number to the power of $exponent = " . pow($base_number,$exponent);
}
powerOfNumber(4,2);