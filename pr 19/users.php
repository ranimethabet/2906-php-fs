<?php
require_once('required_data.php');

$total_users=Models\User::count_roles();
//dd($total_users);

foreach ($total_users as $user)
{
    $table_name="$user[roles]
    --$user[total]--";
    require 'components.php';
}




$users=Models\User::all();

foreach($users as $user)
{
    $table_name="$user[name]
    --$user[roles]--
    $user[email]";
    require 'components.php';
}

$user=Models\User::search_by_id(3);
$table_name="$user[name]
--$user[roles]--";
require 'components.php';


