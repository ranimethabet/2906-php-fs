<?php
require_once('required_data.php');

$total_users=User::count_roles();
//dd($total_users);

foreach ($total_users as $user)
{
    $table_name="$user[roles]
    --$user[total]--";
    require 'components.php';
}




$users=User::all_users();

foreach($users as $user)
{
    $table_name="$user[name]
    --$user[roles]--
    $user[email]";
    require 'components.php';
}

$user=User::search_user_by_id(3);
$table_name="$user[name]
--$user[roles]--";
require 'components.php';


