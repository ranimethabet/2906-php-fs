<?php
session_start();

$errors=[];
$old=$_POST;


extract($_POST);
#validate title
if ($title==='')
{
    $errors['title']='title is required';
}
elseif(!preg_match("/^[a-z\s]{3,30}$/i",$title))
{
    $errors['title']='title is not valid';
}

//body
if($body==='')
{
    $errors['body']='the body is required';
}
elseif(!preg_match('/^[a-z\s\W\d]{10,100}$/',$body))
{
    $errors['body']='the body is not valid';
}
//post_status_id
if (!isset($post_status_id))
{
$errors['post_status_id']='select a status';
}
//Tags
if (!isset($tags))
{
$errors['tags']='select at least one tag';
}
//type
if (empty ($type))
{
    $errors['type']='select the type';
}
if (count($errors)>0)
{
$_SESSION['errors']=$errors;
$_SESSION['old']=$old;
header('location:add-postR.php');
}
else {
    header('location:/');
}