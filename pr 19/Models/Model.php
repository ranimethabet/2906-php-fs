<?php
namespace Models;
class Model
{   const table='';
    private static $db;
    public static function connect()
    {
       self::$db=new \mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    }
    public static function all($limit=0)
    {    
        $table=DB_PREFIX.static::table;

        $qry= "SELECT * from $table order by `id` desc";
        if($limit>0)
        {
            $qry.=" limit $limit";
        }

       $all=self::fetch_all($qry);

        return $all;
    }


public static function search_by_id(int $id)

{ 
   $table=DB_PREFIX.static::table;

   $qry="SELECT * from $table where `id`= $id;";
   $item=self::fetch_assoc($qry);
   return $item;

}
 public static function count()
 {   

    $table=DB_PREFIX.static::table;
    $qry="SELECT count(*) from $table;";
    $total=self::fetch_assoc($qry);
    return $total;
 }
protected static function fetch_assoc($qry)
{
    $result=self::$db->query( $qry);
    $data=$result->fetch_assoc(); 
    return $data;
}
protected  static function fetch_all($qry)
{
    $result=self::$db->query( $qry);
    $data=$result->fetch_all(MYSQLI_ASSOC); 
    return $data;
}
 
}
