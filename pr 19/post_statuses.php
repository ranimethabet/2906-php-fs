<?php
require_once('required_data.php');




$total=Models\PostStatus::count();
//dd($total);
$table_name=$total['count(*)'];
require 'components.php';



$post_statuses=Models\PostStatus::all();
foreach ($post_statuses as $post_status)
{
    $table_name="$post_status[type]";
    require 'components.php';
}



$post_status=Models\PostStatus::search_by_Id(2);
$table_name=$post_status['type'];
require 'components.php';

