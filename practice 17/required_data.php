<?php
require_once('config/config.php');

require_once('helper/functions.php');



require_once('models/Post.php');

require_once('models/Comment.php');

require_once('models/PostStatus.php');

require_once('models/ReactionType.php');

require_once('models/Reply.php');

require_once('models/User.php');

$db=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//dd($db);
