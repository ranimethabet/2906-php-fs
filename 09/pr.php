<?php
$ages = [50,60,8,3,22,14,66];
function is_old($age){
    return $age<10;
}
$young_ages=array_filter($ages,'is_old');
var_dump($young_ages);
