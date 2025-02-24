<?php
session_start();
$errors=[];
$info=$_POST;
extract($_POST);

//title
if ($title==='')
{
    $errors['title']='the title is required';
}
elseif(!preg_match("/^[a-z\s]{3,20}$/i",$title))
{
    $errors['title']='the title is not valid';
}

//author
if ($author==='')
{
    $errors['author']='Author name is required';
}
elseif(!preg_match("/^[A-Z][a-zA-Z\s]{3,20}$/",$author))
{
    $errors['author']='Author name is not valid';
}
//year
if ($year==='')
{
    $errors['year']='The publication year of the book is required';
}
elseif(!preg_match("/^(1[0-9]|20)[0-9]{2}$/",$year))
{
    $errors['year']='The publication year must be from 1000 to 2025';
}
//book_type_id
if (!isset($book_type_id))
{
    $errors['book_type_id']='You must choose the book type';
}
//language
if (!isset($language))
{
    $errors['language']='You must choose at least one language';
}

if (count($errors) > 0)
{   $_SESSION['errors']=$errors;
    $_SESSION['info']=$info;
    header('location:add-book.php');
}
else 
{ 
    $_SESSION['info']=$info;
header('location:book.php');
}
