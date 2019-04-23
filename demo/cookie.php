<?php
$br = "<br/><br/>";

$name = "MyNameLol";
$value = 10010100;
$expiration = time() + (60*60*24*7*52);

setcookie($name,$value,$expiration);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
            if(isset($_COOKIE['MyNameLol'])) {
                print_r($_COOKIE);
            }
        ?>

    </body>
</html>
