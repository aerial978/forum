<?php

require('actions/database.php');
// Validation formulaire
if (isset($_POST['submit'])) {
    // Vérifier si user a rempli tous les champs
    if (!empty($_POST['username']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['password'])) {
        // Données saisies par user
        $username = htmlspecialchars($_POST['username']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        // Vérifier si user existe
        $checkUser = $bdd->prepare('SELECT username FROM user WHERE username = ?');
        $checkUser->execute(array($username));

        if ($checkUser->rowCount() == 0) {
            // Insérer user dans database
            $insertUser = $bdd->prepare('INSERT INTO user (username, last_name, first_name, password) VALUES(?, ?, ?, ?)');
            $insertUser->execute(array($username, $lastname, $firstname, $password));
            // Récupérer données user
            $getUser = $bdd->prepare('SELECT * FROM user WHERE username = ? AND last_name = ? AND first_name = ?');
            $getUser->execute(array($username, $lastname, $firstname));
            // authentifier user et récupérer ses données dans session
            $_SESSION['auth'] = $getUser->fetch()['id'];
            $_SESSION['username'] = $username;

            header('Location:home.php');
        } else {
            $errorMsg = "User already exists !";
        }
    } else {
        $errorMsg = "Please complete all fields !";
    }
}
