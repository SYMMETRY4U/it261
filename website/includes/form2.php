

<div><h2>We will Get back to you witn 24 hours</h2></div>

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
        
        
        <label>Gender</label>
        <ul>
        <li><input type="radio" name="gender" value="female"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked" '; ?>> Female</li>
        <li><input type="radio" name="gender" value="male"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked" '; ?>> Male</li>
        <li><input type="radio" name="gender" value="neither"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked="checked" '; ?>> Neither</li>
        </ul>
        <span><?php echo $gender_err ;?></span>

        <label>Phone</label>
        <input type="tel" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
        <span><?php echo $phone_err ;?></span>        

        <label>Favorite Wines</label><br>
            <ul>
                <li><input type="checkbox" name="wines[]" value="Cabernet" <?php if(isset($_POST['wines']) && in_array('Cabernet', $_POST['wines'])) echo 'checked="checked"'; ?>> Cabernet</li>
                <li><input type="checkbox" name="wines[]" value="Merlot" <?php if(isset($_POST['wines']) && in_array('Merlot', $_POST['wines'])) echo 'checked="checked"'; ?>> Merlot</li>
                <li><input type="checkbox" name="wines[]" value="Syrah" <?php if(isset($_POST['wines']) && in_array('Syrah', $_POST['wines'])) echo 'checked="checked"'; ?>> Syrah</li>
                <li><input type="checkbox" name="wines[]" value="Malbec" <?php if(isset($_POST['wines']) && in_array('Malbec', $_POST['wines'])) echo 'checked="checked"'; ?>> Malbec</li>
                <li><input type="checkbox" name="wines[]" value="Red Blend" <?php if(isset($_POST['wines']) && in_array('Red Blend', $_POST['wines'])) echo 'checked="checked"'; ?>> Red Blend</li>
            </ul>

</ul>
    <span><?php echo $wines_err ;?></span>
    <label>Regions</label>
    <select name="regions">
    <option value=""  <?php if(isset( $_POST['regions']) && is_null($_POST['regions'])) echo 'selected="unselected"'; ?>>Select one!</option>
    <option value="Northwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Northwest') echo 'selected = "selected"' ; ?>>Northwest</option>
    <option value="Southwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Southwest') echo 'selected = "selected"' ; ?>>Southwest</option>
    <option value="Midwest" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Midwest') echo 'selected = "selected"' ; ?>>Midwest</option>
    <option value="Northeast" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Northeast') echo 'selected = "selected"' ; ?>>Northeast</option>
    <option value="Southeast" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'Southeast') echo 'selected = "selected"' ; ?>>Southeast</option>
    </select>
    <span><?php echo $regions_err ;?></span>
<!-- change to upper because it looked beter in the emails -->
    <label>Comments</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
    <span><?php echo $comments_err ;?></span>

    <label>Privacy</label>
    <ul>
    <li><input type="radio" name="privacy" value="yes" <?php if ( isset ($_POST['privacy']) && $_POST ['privacy'] == "yes" ) echo 'checked = "checked"' ;?>> Yes</li>
    <span><?php echo $privacy_err ;?></span>
        </ul>
    <br>
        <input type="submit" value="Submit">
        <br>
        <p><a href="">Reset it</a></p>
        </fieldset>
        </form>