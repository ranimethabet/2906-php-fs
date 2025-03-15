<?php
require_once ('required_data.php');


$total=Models\ReactionType::count();
$table_name=$total['count(*)'];
require 'components.php';


$reaction_types=Models\ReactionType::all();

foreach($reaction_types as $reaction_type)
{
    $table_name=$reaction_type['type'];
    require 'components.php';

}

$reaction_type=Models\ReactionType::search_by_id(3);
$table_name=$reaction_type['type'];
require 'components.php';

