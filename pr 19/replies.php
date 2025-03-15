<?php
require_once('required_data.php');

$replies=Models\Reply::all();
//dd($replies);
foreach ($replies as $reply)
{
    $table_name=$reply['reply'];
    require 'components.php';

}
