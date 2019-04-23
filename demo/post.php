<?php
$br = "<br/><br/>";

if(isset($_POST['name'])) {
    echo $_POST['name'];
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="post.php" method="post">
            <input type="text" name="name" value="">
            <input type="submit" name="submit" value="SUBMISSION">
        </form>

    </body>
</html>
