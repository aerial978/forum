<?php
require('actions/database.php');

$getPublicationsUsers = $bdd->prepare('SELECT id, title, description FROM questions WHERE user_id = ? ORDER BY id DESC');
$getPublicationsUsers->execute([$_SESSION['auth']['id']]);
