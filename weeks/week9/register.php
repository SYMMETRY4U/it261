<?php

include('server.php');
include('includes/header.php');
// 

?>

<div id="wrapper">

<h1 class="center">Register Today</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<!-- names and info needeed -->

<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
        
<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
        
<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
      
<label>Username</label>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']); ?>">
       
<label>Your Password</label>
        <input type="text" name="password1" value="<?php if(isset($_POST['password1'])) echo htmlspecialchars($_POST['password1']); ?>">
       
<label>Confirm Password</label>
        <input type="text" name="password2" value="<?php if(isset($_POST['password2'])) echo htmlspecialchars($_POST['password2']); ?>">
        
<button type="submit" name="reg_user" class="btn">Register</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>' ">Reset</button>

<?php include('errors.php'); ?>
    
</form>

<p class="center">Already a Member?</p> <p class="center"><a href="login.php">  Please Login!</a></p>

<div class="center">


</div>
</div> 
<!-- end wrapper -->
<?php include('includes/footer.php'); ?>

