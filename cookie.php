<?php
    $cookie_name = "user";
    $cookie_value = "Shanu Hasan";

    setcookie($cookie_name,$cookie_value,time()+(60),"/");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE[$cookie_name])){

        }else{
            echo $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>