<?php
include "db.php";
include "functions/helpers.php";

$br = "<br/><br/>";

$result = getAllUsers($connection);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Read</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php include "nav.php" ?>
        <h2 class="alert alert-primary">Read</h2>
        <div class="container">
            <div class="col-sm-6">
                <?php
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <pre>
                    <?php
                        print_r($row)
                    ?>
                </pre>
                <?php
                    }
                ?>
            </div>
        </div>

    </body>
</html>
