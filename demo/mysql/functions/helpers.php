<?php

function getAllUsers($connection) {
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query FAILED: ' . mysqli_error());
    } else {

    }
    return $result;
}

function updateUser($connection) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $username = mysqli_real_escape_string($connection, $username);
    $username = mysqli_real_escape_string($connection, $password);
    $username = mysqli_real_escape_string($connection, $id);

    $query = "UPDATE users SET ";
    $query .= "username = '$username',";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query failed, sadly. " . mysqli_error($connection));
    }
}

function deleteUser($connection) {
    $id = $_POST['id'];

    $id = mysqli_real_escape_string($connection, $id);

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("Query failed, sadly. " . mysqli_error($connection));
    }
}

function createUser($connection) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hash = "$2y$10$";
    $salt = "uh819h98uj0jas9cj0JAHSa0sd9";
    $hashNSalt = $hash . $salt;
    $password = crypt($password, $hashNSalt);
    $query = "INSERT INTO users(username,password) ";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query FAILED: ' . mysqli_error());
    } else {
        echo "User created!";
    }
}
?>
