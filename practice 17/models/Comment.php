<?php
class comment 
{
    const table='comments';
    static function all_comments($limit=0)
    {   $table=DB_PREFIX.static::table;
       global $db;
        $qry="SELECT * from $table order by `id` desc";
        if ($limit>0)
        {

            $qry.=" limit $limit;";
        }
        $result=$db->query($qry);
        $comments=$result->fetch_all(MYSQLI_ASSOC);
        return $comments;

    }
static function search_by_id(int $id){

global $db;
$table=DB_PREFIX.static::table;
$qry="SELECT * from $table where `id`=$id;";
$result=$db->query($qry);
$comment=$result->fetch_assoc();
return $comment;

}
static function count()
{   $table =DB_PREFIX.static::table;
    global $db;
    $qry="SELECT count(*) from $table;";
    $result=$db->query($qry);
    $total=$result->fetch_assoc();
    return $total;

}


}