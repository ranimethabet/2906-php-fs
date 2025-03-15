<?php 
namespace Models;
class User extends Model{
    const table='users';

    static function count_roles()
    {
    $table=DB_PREFIX.static::table;
    global $db;
    $qry="SELECT `roles`,count(*) as `total` from $table  group by `roles`;";
   $total_roles=self::fetch_all($qry);
    return $total_roles;
}
}