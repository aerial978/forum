<?php require('actions/signinAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<body>
    <br><br>
    <form class="container" method="POST">
        <?php include('includes/messageFlash.php'); ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Sign in</button>     
        <br><br>
        <a href="signup.php"><p>No account ? Sign up</p></a>
    </form>
</body>
</html>