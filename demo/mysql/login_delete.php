<?php
include "db.php";
include "functions/helpers.php";

$br = "<br/><br/>";

// pass connection variable into here for
$result = getAllUsers($connection);

if(isset($_POST['submit'])) {
    deleteUser($connection);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Delete</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php include "nav.php" ?>
        <h2 class="alert alert-danger">Delete</h2>
        <div class="container">
            <div class="col-sm-6">
                <form action="login_delete.php" method="post">
                    <div class="form-group">
                        <label>Select ID to delete</label>
                        <select id="" class="form-control" name="id">
                            <?php
                                while($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $username = $row['username'];
                                    echo "<option value='$id'>$id - $username</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Delete" />
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
