<?php
$connection = mysqli_connect('localhost', 'root', '', 'udemyloginapp');

if ($connection) {
    echo "<header><h4>we are connected</h4></header>";
} else {
    die("Database connection failed.");
}
?>
