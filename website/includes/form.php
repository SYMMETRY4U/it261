

<div><h2>We will Get back to you within 24 hours</h2></div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
            <legend>Contact Brian</legend>
        <label>First Name</label>
        <input type="text" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>">
        <span><?php echo $firstName_err ;?></span>
        
        <label>Last Name</label>
        <input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>">
        <span><?php echo $lastName_err ;?></span>
        
        <label>Email</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <div class="error-message"><span><?php echo $email_err; ?></span></div>
        
        <label>Preferred Method of Contact</label>
        <ul>
        <li><input type="radio" name="contact" value="email"<?php if(isset($_POST['contact']) && $_POST['contact'] == 'email') echo 'checked="checked" '; ?>> Email</li>
        <li><input type="radio" name="contact" value="phone"<?php if(isset($_POST['contact']) && $_POST['contact'] == 'phone') echo 'checked="checked" '; ?>> Phone</li>
        <li><input type="radio" name="contact" value="no contact"<?php if(isset($_POST['contact']) && $_POST['contact'] == 'no contact') echo 'checked="checked" '; ?>> No Contact</li>
        </ul>
        <span><?php echo $contact_err ;?></span>

        <label>Phone</label>
        <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
        <span><?php echo $phone_err ;?></span>        

        <label>What are your Favorite Dirt Bikes Brands</label><br>
            <ul>
                <li><input type="checkbox" name="dirtbikes[]" value="Yamaha" <?php if(isset($_POST['dirtbikes']) && in_array('Yamaha', $_POST['dirtbikes'])) echo 'checked="checked"'; ?>> Yamaha</li>
                <li><input type="checkbox" name="dirtbikes[]" value="Honda" <?php if(isset($_POST['dirtbikes']) && in_array('Honda', $_POST['dirtbikes'])) echo 'checked="checked"'; ?>> Honda</li>
                <li><input type="checkbox" name="dirtbikes[]" value="Suzuki" <?php if(isset($_POST['dirtbikes']) && in_array('Suzuki', $_POST['dirtbikes'])) echo 'checked="checked"'; ?>> Suzuki</li>
                <li><input type="checkbox" name="dirtbikes[]" value="KTM" <?php if(isset($_POST['dirtbikes']) && in_array('KTM', $_POST['dirtbikes'])) echo 'checked="checked"'; ?>> KTM</li>
                <li><input type="checkbox" name="dirtbikes[]" value="Husky" <?php if(isset($_POST['dirtbikes']) && in_array('Husky', $_POST['dirtbikes'])) echo 'checked="checked"'; ?>> Husky</li>
            </ul>

       <span><?php echo $dirtbikes_err ;?></span>

    <label>Type of riding you are interested in?</label>
    <select name="riding">
    <option value=""  <?php if(isset( $_POST['riding']) && is_null($_POST['riding'])) echo 'selected="unselected"'; ?>>Please Select Type of Riding Info!</option>
    <option value="Singletrack riding" <?php if(isset($_POST['riding']) && $_POST['riding'] == 'Singletrack riding') echo 'selected = "selected"' ; ?>>Singletrack riding</option>
    <option value="Dual sport riding" <?php if(isset($_POST['riding']) && $_POST['riding'] == 'Dual sport riding') echo 'selected = "selected"' ; ?>>Dual sport riding</option>
    <option value="Motocross tracks" <?php if(isset($_POST['riding']) && $_POST['riding'] == 'Motocross tracks') echo 'selected = "selected"' ; ?>>Motocross tracks</option>
    <option value="Adventure rides" <?php if(isset($_POST['riding']) && $_POST['riding'] == 'Adventure rides') echo 'selected = "selected"' ; ?>>Adventure rides</option>
    <option value="Sport Touring" <?php if(isset($_POST['riding']) && $_POST['riding'] == 'Sport Touring') echo 'selected = "selected"' ; ?>>Sport Touring</option>
    </select>
    <span><?php echo $riding_err ;?></span>

    <label>Comments</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
    <span><?php echo $comments_err ;?></span>

    <label>Privacy</label>
    <ul>
    <li><input type="radio" name="privacy" value="yes" <?php if ( isset ($_POST['privacy']) && $_POST ['privacy'] == "yes" ) echo 'checked = "checked"' ;?>> Yes</li>
    
        </ul>
      <span><?php echo $privacy_err ;?></span>  
    <br>
        <input type="submit" value="Submit">
        <br>
        <br>
        <p><a href="">Reset it</a></p>
        </fieldset>
        </form>
