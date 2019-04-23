<?php
    $br = "<br/><br/>";
    if(isset($_POST['submit'])) {
        $names = ['aaron', 'lol_rekt'];
        $min = 5;
        $max = 20;
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if (strlen($user) < $min ) {
            echo "You need a longer username, buddy.";
        }
        if (strlen($user) > $max ) {
            echo "You need a shorter username, buddy.";
        }
        if(!in_array($user, $names)) {
            echo 'not allowed buddy';
        } else {
            echo 'Hello friend, '. $user;
        }
    }

?>
