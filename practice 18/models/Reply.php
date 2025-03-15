<?php
class Reply{
const table='replies';
static function all_replies()
{
    $table=DB_PREFIX.static::table;
    $qry= "SELECT * from $table;";
    global $db;
    $result=$db->query($qry);
    $replies=$result->fetch_all(MYSQLI_ASSOC);
    return $replies;
}
    
}