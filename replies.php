<?php
require_once('required_data.php');

$table=DB_PREFIX.'replies';

$qry="SELECT * from $table;";

$result=$db->query($qry);

//dump($result);

$replies=$result->fetch_all(MYSQLI_ASSOC);

//dump($replies);

foreach($replies as $reply)
{
$table_name=$reply['reply'];
require ('components.php');
}