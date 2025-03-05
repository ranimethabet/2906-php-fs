<?php
require_once ('required_data.php');

$table=DB_PREFIX.'reaction_types';

$qry="SELECT * from $table;";

$result = $db->query($qry);

//dump($result);

$reaction_types=$result->fetch_all(MYSQLI_ASSOC);
//dd($reaction_types);

foreach ($reaction_types as $reaction_type)
{
    $table_name=$reaction_type['type'];
    require('components.php');
}
