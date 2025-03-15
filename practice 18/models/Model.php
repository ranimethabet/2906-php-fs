<?php

class Model
{   const table='';
    static function all_posts($limit=0)
    {    global $db;
        $table=DB_PREFIX.static::table;

        $qry= "SELECT * from $table order by `id` desc";
        if($limit>0)
        {
            $qry.=" limit $limit";
        }

        $result =$db->query($qry);

        $posts=$result->fetch_all(MYSQLI_ASSOC);

        return $posts;
    }


static function search_by_id(int $id)

{ global $db;
   $table=DB_PREFIX.static::table;

   $qry="SELECT * from $table where `id`= $id;";
   $result=$db->query($qry);
   $post=$result->fetch_assoc();

   return $post;

}
 static function count()
 {   global $db;

    $table=DB_PREFIX.static::table;
    $qry="SELECT count(*) from $table;";
    $result=$db->query($qry);
    $total=$result->fetch_assoc();
    return $total;
 }

 
}
