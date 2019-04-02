<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <?php
        $br = "<br/><br/>";

        function say_something() {
            echo "oh oh ohhhhhh!" . "<br/>";
        }

        function calculateNums($num1, $num2) {
            $sum = $num1 + $num2;
            say_something();
            return $sum;
        }

        function doItAll() {
            $result = calculateNums(1, 2);
            echo $result;
        }

        doItAll();
        ?>

    </body>
</html>
