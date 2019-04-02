<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
        $br = "<br/><br/>";

        $x = "outside";

        echo $x . $br;

        function convert() {
            global $x;

            $x = 'bloop';
        }

        convert();

        echo $x . $br;
        ?>

    </body>
</html>
