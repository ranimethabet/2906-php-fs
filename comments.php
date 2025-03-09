<?php
require_once('required_data.php');
$table=DB_PREFIX.'comments';
$qry="SELECT * from $table;";
$result=$db->query($qry);
$comments=$result->fetch_all(MYSQLI_ASSOC);

//dd($comments);

foreach($comments as $comment)
{
    $table_name=$comment['comment'];
        require('components.php');

}
