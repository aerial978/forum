<?php require('actions/signupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>
    <br><br>
    <form class="container" method="POST">
        <?php if(isset($errorMsg)) { echo '<p>'.$errorMsg.'</p>'; } ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
    </form>
</body>

</html>