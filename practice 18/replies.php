<?php
require_once('required_data.php');

$replies=Reply::all_replies();
//dd($replies);
foreach ($replies as $reply)
{
    $table_name=$reply['reply'];
    require 'components.php';

}
