<?php
$br = "<br/><br/>";

class Bike {
    var $wheels = 2;
    var $seat = 1;
    public $color = 'silver';
    protected $gear_type = "fly";
    private $bar_code = "0a0a0a0a0a0a";
    static $readyForRiding = true;
    function pedal() {
        echo "we're moving!";
    }

    function __construct() {
        echo $this->wheels . "<br/>";
    }
}

$fuji = new Bike();

$fuji->pedal();

?>
