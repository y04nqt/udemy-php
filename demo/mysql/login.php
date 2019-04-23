<?php
$br = "<br/><br/>";

if(isset($_POST['submit'])) {
    echo "Rodger that, Cap'n!";
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $br;
    echo $username;
    echo $br;
    echo $password;

    $connection = mysqli_connect('localhost', 'root', '', 'udemyloginapp');

    if ($connection) {
        echo "we are connected";
    } else {
        die("Database connection failed.");
    }

}



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-sm-6">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" class="form-control" type="text" name="username" placerholder="Put your name here" value="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" placerholder="Password" value="">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Send it bruv" />
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
