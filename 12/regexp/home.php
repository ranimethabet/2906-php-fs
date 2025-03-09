<?php


if($_SERVER['REQUEST_METHOD']=="POST")
{
    $username=$_POST['username'];
    $pattern1="/^[A-Z][a-z]{3,15}$/";
    echo preg_match($pattern1,$username)?'valid username':'invalid username';
    echo'<br/>';
    $password=$_POST['password'];
    $pattern2="/^\d+$/";
    echo preg_match($pattern2,$password)?'Valid password':'invalid password';
}

