<?php
include('server.php');
include('includes/header.php');
?>

<div id="wrapper">
    <h1 class="center">Login Page</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label>Username</label>
            <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
            
            <label>Password</label>
            <input type="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']); ?>">
            
            <button type="submit" name="login_user" class="btn">Login</button>
            <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'">Reset</button>
        </fieldset>
    </form>
    <h3>Not a member yet?</h3>
    <h3><a href="register.php">Register Here</a></h3>

    <?php include('errors.php'); ?>
</div>

<?php include('includes/footer.php'); ?>
