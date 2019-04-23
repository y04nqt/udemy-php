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
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="form.php" method="post">
            <input type="text" name="username" placeholder="Enter Username">
            <br/>
            <input type="password" name="password" placeholder="Enter Password">
            <br/>
            <input type="submit" name="submit" value="Submit!">
        </form>
    </body>
</html>
