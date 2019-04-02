<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
        $br = "<br/><br/>";

        if( 4 === 4 ) {
            echo "it is true";
        }

        if ( 4 === "4") {
            echo 'will not echo';
        }

        if ( 4 === "4" || 5 < 10) {
            echo 'it did execute';
        }


        ?>

    </body>
</html>
