<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        Name : <input type="text" name="email">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    
    if(isset($_REQUEST['submit'])){
        if(filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL))
        {
            echo "Valid Email";
        }else{
            echo "Invalid Email";
        }
    }

    ?>
</body>
</html>