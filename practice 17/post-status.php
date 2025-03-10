<?php
require_once 'required_data.php';
$table1=DB_PREFIX.'posts';
$table2=DB_PREFIX.'post_statuses';

$qry="SELECT `title`,`body`, `type` from $table1 join $table2 on  $table1.`post_status_id` = $table2 . `id`;";
$result =$db->query($qry);
$poststatus=$result->fetch_all(MYSQLI_ASSOC);
foreach ($poststatus as $ps)
{
    $table_name="--$ps[title]-- 
     -- $ps[body]--
     --$ps[type]--";
    require 'components.php';
}

//dd($result);
