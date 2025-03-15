<?php 
class User{
    const table='users';
    static function all_users()
    {
        $table=DB_PREFIX.static::table;
        global $db;
        $qry = "SELECT * from $table;";
        $result=$db->query($qry);
        $users=$result-> fetch_all(MYSQLI_ASSOC);
        return $users;

    }
    static function search_user_by_id($id)
    {
        $table=DB_PREFIX.static::table;
        global $db;
        $qry="SELECT * from $table where `id`=$id;";
        $result = $db->query($qry);
        $user=$result->fetch_assoc();
        return $user;
    }
    static function count_roles()
    {
    $table=DB_PREFIX.static::table;
    global $db;
    $qry="SELECT `roles`,count(*) as `total` from $table  group by `roles`;";
    $result =$db->query($qry);
    $total_roles=$result->fetch_all(MYSQLI_ASSOC);
    return $total_roles;


}
}