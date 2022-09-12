<?php

require('actions/database.php');

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $checkUser = $bdd->prepare('SELECT username FROM user WHERE username = ?');
        $checkUser->execute(array($username));

        if ($checkUser->rowCount() == 0) {
            $insertUser = $bdd->prepare('INSERT INTO user (username, last_name, first_name, password) VALUES(?, ?, ?, ?)');
            $insertUser->execute(array($username, $lastname, $firstname, $password));

            $getUser = $bdd->prepare('SELECT * FROM user WHERE username = ? AND last_name = ? AND first_name = ?');
            $getUser->execute(array($username, $lastname, $firstname));

            $_SESSION['auth'] = $getUser->fetch()['id'];

            header('Location:home.php');
        } else {
            $errorMsg = "User already exists !";
        }
    } else {
        $errorMsg = "Please complete all fields !";
    }
}
