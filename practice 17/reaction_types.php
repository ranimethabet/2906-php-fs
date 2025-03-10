<?php
require_once ('required_data.php');


$total=ReactionType::count();
$table_name=$total['count(*)'];
require 'components.php';


$reaction_types=ReactionType::all_reaction_types();

foreach($reaction_types as $reaction_type)
{
    $table_name=$reaction_type['type'];
    require 'components.php';

}

$reaction_type=ReactionType::search_reactionType_id(3);
$table_name=$reaction_type['type'];
require 'components.php';

