<?php
require_once('required_data.php');


$total=Comment::count();
$table_name=$total['count(*)'];
require 'components.php';



$comments=Comment::all_comments(3);
foreach($comments as $comment)
{
    $table_name=$comment['comment'];
        require('components.php');

}

$id=$_GET['id']??null;
if (!$id)
{
    header('location:index.php');
    exit;
}
$comment=Comment::search_by_id($id);
$table_name=$comment['comment'];
require 'components.php';
