<?php
require_once('required_data.php');

$total=Models\Post::count();

//dd($total);
$table_name=$total['count(*)'];
require_once 'components.php';


$posts = Models\Post::all(3);
//dd($posts);
//like $posts=post->count() //as Post is a class then we use fn -> but because its a static fn so we use :: instead .
foreach ($posts as $post)
{
    $table_name="--$post[title]--
 $post[body]";
    require 'components.php';
    
}
    
/*

$id=$_GET['id']??null;
if (!$id)
{
   header('location:index.php');
   exit;
}

$post=Post::search_by_id($id);

//dd($post);

$table_name="--$post[title]
$post[body]--";
require 'components.php';
*/
