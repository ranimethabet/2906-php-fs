<?php
class PostStatus {
const table='post_statuses';
    static function all_post_statuses()
    {
$table=DB_PREFIX.static::table;
global $db;
$qry="SELECT * from $table;";
$result=$db->query($qry);
$post_statuses=$result->fetch_all(MYSQLI_ASSOC);
return ($post_statuses);
    }

    
    static function search_PostStatus_Id($id)
    {
       $table=DB_PREFIX.static::table;
       global $db;
       $qry="SELECT * from $table where `id`=$id;";
       $result=$db->query($qry);
       $post_status=$result->fetch_assoc();
       return $post_status;
       
    }
    static function count()
    {
    $table=DB_PREFIX.static::table;
    global $db;
    $qry= "SELECT count(*) from $table;";
    $result =$db->query($qry);
    $total=$result->fetch_assoc();
return $total;
    }

    
}