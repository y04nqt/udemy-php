<?php
$br = "<br/><br/>";

class Bike {

    function pedal() {
        echo "we're moving!";
    }
}

if (class_exists("Bike")) {
    echo 'hey ya! <br/>';

    if(method_exists("Bike", "pedal")) {
        echo "shazam, we can move";
    }


} else {
    echo "poop";
}

?>
