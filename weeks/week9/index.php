<?php 
session_start();
include('config.php');
   
// if usename has not been set, you will not see the index.php file

if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    
}

// Logout logic
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');  
}

include('includes/header.php'); ?>
<header>

<!-- // Display success message if session is successful -->
<?php
if(isset($_SESSION['success'])) : ?>

<div class="success">
    <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']); ?>
    </h3>
</div>
<!-- end success -->
<?php endif;

// Display welcome message if user is logged in
if(isset($_SESSION['username'])) : ?>
<div class="welcome-logout">
    <h3> Hello <?php echo $_SESSION['username']; ?></h3>
    <a href="index.php?logout=1">Log out</a>
</div>
<!-- end logout -->
<?php endif; ?>
</header>
<div id="wrapper">
<h1>Welcome to the home page of our website!</h1>


</div>
<!-- end wrapper -->
<?php include('includes/footer.php'); ?>





