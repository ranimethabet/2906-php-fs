<?php
class ReactionType
{
    const table='reaction_types';
    static function all_reaction_types()
    {
        $table=DB_PREFIX.static::table;
        global $db;
    $qry=" SELECT * from $table;";
    $result=$db->query($qry);
    $reaction_types=$result->fetch_all(MYSQLI_ASSOC);
    return $reaction_types;
    }
static function search_reactionType_id($id)
{
    $table=DB_PREFIX.static::table;
    global $db;
    $qry="SELECT * from $table where `id`=$id;";
    $result=$db->query($qry);
    $reaction_type=$result->fetch_assoc();
    return $reaction_type;
}

static function count()
{
    $table=DB_PREFIX.static::table;
    global $db;
    $qry="SELECT count(*) from $table;";
    $result =$db->query($qry);
    $total=$result->fetch_assoc();
    return $total;
}
}