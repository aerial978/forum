<?php
require('actions/questions/publicationsUserAction.php');
require('actions/users/securityAction.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <div class="container">
        <?php
        foreach ($getPublicationsUsers as $getPublicationsUser) : ?>

            <div class="card">
                <h5 class="card-header">
                    <?= $getPublicationsUser['title']; ?>
                </h5>
                <div class="card-body">
                    <p class="card-text"><?= $getPublicationsUser['description']; ?></p>
                    <a href="#" class="btn btn-primary">Read</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                </div>
            </div>
            <br><br>

        <?php endforeach; ?>
        
    </div>
    

</body>
</html>