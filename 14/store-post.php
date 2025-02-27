<pre>
<?php
session_start();

require_once 'functions.php';

// user_id from the session storage after login
$user_id = 105;

$errors = [];

$old = $_POST;

extract($_POST);
var_dump($_FILES);

// to get the photo from the user to the server Photo
$image = $_FILES['image'];
$tmp_name = $image['tmp_name'];
$name = $image['name'];

 //dd(getimagesize($tmp_name));

$ext = pathinfo($name, PATHINFO_EXTENSION);
//dd($ext);


//dd([$tmp_name, $file_name]);

//validate  Thumbnail

if (isset ($_image))
{
    if ($image['size']>1*1024*1024){$errors['image']='Image is too large to upload!!';}
    
    elseif($image['error']!==UPLOAD_ERR_OK){$errors['image']='Error uploading image';}
    
    elseif(getimagesize($image['tmp_name'])===false) {$errors['image']='Invalid image file';}
    elseif($ext!=='gif'){$errors['image']='not the type';}
    else
   { $file_name = $user_id . date('ymdhis') . mt_rand(11111,99999) . '.' . $ext ;    
    move_uploaded_file($tmp_name, "public/$file_name");
   }
}

// Validate title
if ($title === '') {
    $errors['title'] = 'Title is required';
} elseif (strlen($title) < 3 || strlen($title) > 30) {
    $errors['title'] = 'Title should be between 3 and 30 characters';
}

// Validate body
if ($body === '') {
    $errors['body'] = 'body is required';
} elseif (strlen($body) < 10 || strlen($body) > 300) {
    $errors['body'] = 'body should be between 10 and 300 characters';
}

// Validate post_status_id
if (!isset($post_status_id)) {
    $errors['post_status_id'] = 'Post Status is required';
} elseif (!in_array($post_status_id, [1, 2, 3, 4])) {
    $errors['post_status_id'] = 'Post Status not accepted';
}

// Validate tags
if (!isset($tags)) {
    $errors['tags'] = 'Select at least one tag';
} else {

    $match = array_intersect(['important', 'social', 'public', 'kids'], $tags);
    if (empty($match)) {
        $errors['tags'] = 'Selected tag is not in our database!!!';
    }
}



// Validate type
if ($type==='-Select a post type-') {
    $errors['type'] = 'Select post type';
} elseif (!in_array($type, [1, 2, 3, 4])) {
    $errors['type'] = 'Selected post type is not valid!!!';
}

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $old;

    // Navigate to register page
    header('location: add-post.php');
} else
    header('location:done.php');