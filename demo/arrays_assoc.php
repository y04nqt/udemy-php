<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
        $br = "<br/><br/>";

        $numberList = array(10, 20, 40, 80);

        echo $numberList[3] . $br;

        $names = array("first_name" => 'Aaron', "last_name" => "Krueger");
        print_r($numberList);
        echo $br;
        print_r($names);
        echo $br;
        echo $names['first_name'] . " " . $names['last_name'];
        echo $br;
        echo $numberList[0]

        ?>

    </body>
</html>
