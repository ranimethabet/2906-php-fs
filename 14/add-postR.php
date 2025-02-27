<?php
session_start();
$errors=$_SESSION['errors'] ?? [];
$old=$_SESSION['old']??[];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>

    <style>
        .errors {
            color: tomato;
        }
    </style>

</head>

<body>

    <form method="post" action="store-postR.php">
        <!-- Title -->
        <div>
            <label>Title</label>
            <input type="text" name="title" value="<?=@$old['title'];?>"placeholder="3 - 30 characters">
           <p class="errors"><?=@$errors['title'];?> </p> 
           
        </div>
        
        <!-- body -->
        <div>
            <label>Body</label>
            <textarea name="body"></textarea>
            <p class="errors"><?=@$errors['body'];?> </p> 
            
        </div>

        <!-- Status -->
        <div>
            <fieldset>
                <legend>Status</legend>

                <input type="radio" name="post_status_id" id="pending" value="1">
                <label for="pending">Pending</label>
                
                <input type="radio" name="post_status_id" id="published" value="2">
                <label for="published">Published</label>
                
                <input type="radio" name="post_status_id" id="archived" value="3">
                <label for="archived">Archived</label>
            </fieldset>

            <p class="errors"><?=@$errors['post_status_id'];?> </p> 
            
        </div>
        
        <!-- tags -->
        <div>
            <fieldset>
                <legend>Tags</legend>
                <input value="important" type="checkbox" name="tags[]" id="important">
                <label for="important">Important</label>
                
                <input value="social" type="checkbox" name="tags[]" id="social">
                <label for="social">Social</label>
                
                <input value="public" type="checkbox" name="tags[]" id="public">
                <label for="public">Public</label>
                
                <input value="kids" type="checkbox" name="tags[]" id="kids">
                <label for="kids">Kids</label>
                
                
            </fieldset>
            <p class="errors"><?= @$errors['tags']; ?></p>
        </div>
        
        <!-- Type -->
        <div>
            <label for="type">Type</label>
            <select name="type" id="type">
                <option value="">-Select a post type-</option>
                <option value="1">News</option>
                <option value="2">Art</option>
                <option value="3">Cars</option>
                <option value="4">Sports</option>
                
                
            </select>
            <p class="errors"><?= @$errors['type']; ?></p>
        </div>

      
        
        <div>
            <button type="Submit">Submit</button>
        </div>
        

    </form>
   

</body>

</html>