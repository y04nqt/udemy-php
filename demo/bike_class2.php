<?php
$br = "<br/><br/>";

class Bike {
    var $wheels = 2;
    var $seat = 1;
    function pedal() {
        echo "we're moving!";
    }
}

if (class_exists("Bike")) {
    echo 'hey ya! <br/>';

    if(method_exists("Bike", "pedal")) {
        echo "shazam, we can move <br/>";
    }


} else {
    echo "poop";
}

$fuji = new Bike();

$fuji->pedal();

?>
