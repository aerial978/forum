<?php
require('actions/database.php');

// Validation formulaire
if (isset($_POST['submit'])) {
    if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])) {
        $title = htmlspecialchars($_POST['title']);
        $description = nl2br(htmlspecialchars(($_POST['description'])));
        $content = nl2br(htmlspecialchars($_POST['content']));

        $insertPublication = $bdd->prepare("INSERT INTO questions (user_id, title, description, content, created_at) VALUES (:user_id, :title, :description, :content, NOW())");
        $insertPublication->execute([
            'user_id' => $_SESSION['auth']['id'], 
            'title' => $title, 
            'description' => $description, 
            'content' => $content
        ]);

        $successMsg = "Super !";

    } else {
        $errorMsg = "Please complete all fields !";
    }
}