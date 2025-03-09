<?php
require_once('required_data.php');

$table=DB_PREFIX.'post_statuses';

$qry="SELECT * from $table;";

$result = $db->query($qry);

//dd($result);

$post_statuses=$result->fetch_all(MYSQLI_ASSOC);
//dump($post_statuses);

foreach($post_statuses as $post_status)
{
    $table_name=$post_status['type'];
    require('components.php');
}