<?php
require_once('required_data.php');

$table=DB_PREFIX.'users';

$qry="SELECT * FROM $table;";

$result=$db->query($qry);

//dump($result);

$users=$result->fetch_all(MYSQLI_ASSOC);

//dump($users);

foreach($users as $user)
{
    $table_name="$user[name] ,
     $user[email] 
     $user[mobile]--
     $user[roles]";
    require ('components.php');
}