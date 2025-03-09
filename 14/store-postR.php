<?php 
session_start();
extract ($_POST);
$errors=[];
$old=$_POST;
## validate the title
if ($title==='')
{
$errors['title']='Title is required';
}

elseif(!preg_match("/^[A-Z][a-z\s\d]{2,30}$/",$title))
{
    $errors['title']=' Title is not valid';
}



## validate body

if ($body==='')
{
$errors['body']='Body is required';
}

elseif(!preg_match("/^[A-Z][a-z\s\d]{10,100}$/",$body))
{
    $errors['body']=' Body is not valid';
}


## validate post_status_id
if (!isset($post_status_id))
{
    $errors['post_status_id']='You must choose at least one status';
} 

elseif (!in_array($post_status_id,[1,2,3]))
{
$errors['post_status_id']='status is not valid';
}

## validate tags

if (!isset($tags)) {
    $errors['tags'] = 'Select at least one tag';
} else {

$match=array_intersect($tags,['important','social','public','kids']);
if (empty ($match))
{$errors['post_status_id']='tag is not valid';}
}

if (!isset($tags)) {
    $errors['tags'] = 'Select at least one tag';
} else {

    $match = array_intersect(['important', 'social', 'public', 'kids'], $tags);
    if (empty($match)) {
        $errors['tags'] = 'Selected tag is not in our database!!!';
    }
}


## validate type

if ($type==='-Select a post type-') {
    $errors['type'] = 'Select post type';
} elseif (!in_array($type, [1, 2, 3, 4])) {
    $errors['type'] = 'Selected post type is not valid!!!';
}


##errors
if (!empty($errors))
{
$_SESSION['errors']=$errors;
$_SESSION['old']=$old;
header("location:add-postR.php");
}
else 
{   $_SESSION['old']=$old;
    header('location:done.php');
}