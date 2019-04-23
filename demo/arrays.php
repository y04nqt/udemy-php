<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
            $br = "<br/><br/>";

            $numberList = array(123, '123', 33, '<h1>Hello, Universe!</h1>');

            $anotherNumberList = ['name' => 'Aaron', 'Krueger'];

            echo $numberList[0];
            echo "<br /><br /><br />";
            print_r($numberList);

            echo $br;

            $sampleArray = [1, 2, 3, 4, -1, 551];

            echo max($sampleArray) . $br;

            echo min($sampleArray) . $br;

            sort($sampleArray);

            print($sampleArray);
        ?>

    </body>
</html>
