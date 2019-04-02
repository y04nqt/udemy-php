<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>while loops</title>
    </head>
    <body>

        <?php
        $br = "<br/><br/>";
        $ticker = 0;
        while($ticker < 5) {
            echo $ticker . "keep going! ";
            $ticker++;
        }
        echo "stopped!";
        ?>

    </body>
</html>
