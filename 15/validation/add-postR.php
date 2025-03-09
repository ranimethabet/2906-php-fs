<?php
session_start();
$errors=$_SESSION['errors'] ?? [];
$old=$_SESSION['old'] ?? [];
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

    <form method="post"  enctype="multipart/form-data"  action="store-postR.php">
        <!-- Title -->
        <div>
            <label>Title</label>
            <input type="text" name="title" value="<?= @$old['title']; ?>" placeholder="3 - 30 characters">
            <p class="errors"><?=@$errors['title'];?></p>
            
            
        </div>
        
        <!-- body -->
        <div>
            <label>Body</label>
            <textarea name="body"><?=@$old['body'];?></textarea>
            <p class="errors"><?=@$errors['body'];?></p>
            
            
        </div>
        
        <!-- Status -->
        <div>
            <fieldset>
                <legend>Status</legend>
                
                <input type="radio" name="post_status_id" id="pending" value="1"<?=@$old['post_status_id']==='1'?'checked':''?>>
                <label for="pending">Pending</label>
                
                <input type="radio" name="post_status_id" id="published" value="2" <?=@$old['post_status_id']==='2'?'checked':''?>>
                <label for="published">Published</label>
                
                <input type="radio" name="post_status_id" id="archived" value="3" <?=@$old['post_status_id']==='3'?'checked':''?>>
                <label for="archived">Archived</label>
            </fieldset>
            
            <p class="errors"><?=@$errors['post_status_id'];?></p>
            
            
        </div>
        
        <!-- tags -->
        <div>
            <fieldset>
                <legend>Tags</legend>
                <input value="important" type="checkbox" name="tags[]" id="important" <?=isset($old['tags']) && in_array('important',$old['tags'])?'checked':'';?>>
                <label for="important">Important</label>
                
                <input value="social" type="checkbox" name="tags[]" id="social" <?=isset($old['tags']) && in_array('social',$old['tags'])?'checked':'';?>>
                <label for="social">Social</label>
                
                <input value="public" type="checkbox" name="tags[]" id="public" <?=isset($old['tags']) && in_array('public',$old['tags'])?'checked':'';?>>
                <label for="public">Public</label>
                
                <input value="kids" type="checkbox" name="tags[]" id="kids"<?=isset($old['tags']) && in_array('kids',$old['tags'])?'checked':'';?>>
                <label for="kids">Kids</label>
                
                
            </fieldset>
            <p class="errors"><?=@$errors['tags'];?></p>
            
        </div>
        
        <!-- Type -->
        <div>
            <label for="type">Type</label>
            <select name="type" id="type">
                <option>-Select a post type-</option>
                <option  <?=isset($old['type'])&&$old['type']==='1'?'selected':'';?> value="1">News</option>
                <option <?=isset($old['type'])&&$old['type']==='2'?'selected':'';?> value="2">Art</option>
                <option <?=isset($old['type'])&&$old['type']==='3'?'selected':'';?> value="3">Cars</option>
                <option <?=isset($old['type'])&&$old['type']==='4'?'selected':'';?> value="4">Sports</option>
                
                
            </select>
            <p class="errors"><?=@$errors['type'];?></p>
            
        </div>

     <!-- Thumbnail -->
     <div>
            <label for="image">Post Image</label>
            <input type="file" name="image" accept=".jpeg,.png" id="image">
            <div>
                <p><?= @$errors['image']; ?></p>
            </div>
        </div>
          <!-- other images -->
          <div>
            <label for="images">Post Images</label>
            <input type="file" name="images[]" accept=".jpeg,.png" id="images" multiple />

            <div>
                <?php
                if (isset($errors['images'])) {
                    foreach ($errors['images'] as $err) {
                        echo "<p>$err</p>";
                    }
                }
                ?>
            </div>
        </div>
        <div>

            <button type="Submit">Submit</button>
        </div>
        

    </form>
   

</body>

</html>