
<?php
session_start();
$errors=$_SESSION['errors'] ?? [];
$info=$_SESSION['info'] ?? [];
  

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

    <form method="post" action="store-book.php">
        <!-- Title -->
        <div>
            <label>Title</label>
            <input type="text" name="title"  value="<?=@$info['title']?>"placeholder="3 - 20 characters">
            <p class="errors"><?=@$errors['title'];?></p>
        </div>
        
        <!--author name-->
        <div>
            <label>author</label>
            <input type="text" name="author" value="<?=@$info['author']?>">
            <p class="errors"><?=@$errors['author'];?></p>
            
            <!--year-->
            <div>
                <label>Year</label>
                <input type="number" name="year" value="<?=@$info['year']?>" >
                <p class="errors"><?=@$errors['year'];?></p>
            </div>
            
            
            <!-- type -->
            <div>
                <fieldset>
                    <legend>Type</legend>
                    
                    <input type="radio" name="book_type_id" id="Art" value="1">
                    <label for="Art">Art</label>
                    
                    <input type="radio" name="book_type_id" id="Science" value="2">
                    <label for="Science">Science</label>
                    
                    <input type="radio" name="book_type_id" id="Horror" value="3">
                    <label for="Horror">Horror</label>
                </fieldset>
                <p class="errors"><?=@$errors['book_type_id'];?></p>
            </div>
            
            <!-- language-->
            <div>
                <fieldset>
                    <legend>Language</legend>
                    <input value="English" type="checkbox" name="language[]" id="English">
                    <label for="English">English</label>
                    
                    <input value="French" type="checkbox" name="language[]" id="French">
                    <label for="French">French</label>
                    
                    <input value="Arabic" type="checkbox" name="language[]" id="Arabic">
                    <label for="Arabic">Arabic</label>
                    
                    <input value="German" type="checkbox" name="language[]" id="German">
                    <label for="German">German</label>
                    
                    
                    
                </fieldset>
                <p class="errors"><?=@$errors['language'];?></p>
        </div>


        <!-- Thumbnail -->
        <div>
            <label for="image">Post Image</label>
            <input type="file" name="image" id="image">
        </div>
        
        <div>
            <button type="Submit">Submit</button>
        </div>
        

    </form>

</body>

</html>