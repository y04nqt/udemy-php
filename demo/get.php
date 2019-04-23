<?php
$br = "<br/><br/>";

print_r($_GET);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $id = 11312320;
            $button = "Hey Click me!";
        ?>
        <a href="get.php?id=<?php echo $id;?>"><?php echo $button?></a>

    </body>
</html>
