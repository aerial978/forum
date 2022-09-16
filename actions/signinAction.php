<?php
require('actions/database.php');
// Validation formulaire
if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        // Vérifier si user existe
        $checkUser = $bdd->prepare('SELECT * FROM user WHERE username = ?');
        $checkUser->execute(array($username));
        // Récupérer les données user
        if ($checkUser->rowCount() > 0) {
            $userInfo = $checkUser->fetch();
            if (password_verify($password, $userInfo['password'])) {
                // Authentifier user et récupérer ses données dans session
                $_SESSION['auth'] = $userInfo;
                $_SESSION['username'] = $username;

                header('Location: home.php');
            } else {
                $errorMsg = "Invalid username or password !";
            }
        } else {
            $errorMsg = "Invalid username or password !";
        }
    } else {
        $errorMsg = "Please complete all fields !";
    }
}
