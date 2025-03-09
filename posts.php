<?php
require_once('required_data.php');

$table=DB_PREFIX.'posts';

$qry="SELECT * from $table;";

$result=$db->query($qry);

$posts=$result->fetch_all(MYSQLI_ASSOC);

dd($posts);