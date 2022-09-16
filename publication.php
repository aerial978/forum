<?php
require('actions/questions/publicationAction.php');
require('actions/users/securityAction.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>
<?php include 'includes/navbar.php'; ?>
<br><br>
    <form class="container" method="POST">
        <?php include('includes/messageFlash.php'); ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Content</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Published</button>
    </form>
</body>

</html>