<?php
require_once('required_data.php');




$total=PostStatus::count();
//dd($total);
$table_name=$total['count(*)'];
require 'components.php';



$post_statuses=PostStatus::all_post_statuses();
foreach ($post_statuses as $post_status)
{
    $table_name="$post_status[type]";
    require 'components.php';
}



$post_status=PostStatus::search_PostStatus_Id(2);
$table_name=$post_status['type'];
require 'components.php';

