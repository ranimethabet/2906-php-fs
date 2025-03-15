<?php
require_once('required_data.php');

$total=Post::count();

//dd($total);
$table_name=$total['count(*)'];
require_once 'components.php';


$posts = Post::all_posts(1);
//dd($posts);
//like $posts=post->count() //as Post is a class then we use fn -> but because its a static fn so we use :: instead .
foreach ($posts as $post)
{
    $table_name="--$post[title]--
 $post[body]";
    require 'components.php';
    
}
    

