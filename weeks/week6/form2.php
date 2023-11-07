<?php

$wines ='';
$wines_err ='';
$firstName  ='';
$firstName_err ='';
$lastName  ='';
$lastName_err ='';
$email  ='';
$email_err ='';
$phone  ='';
$phone_err ='';
$gender  ='';
$gender_err ='';
$regions  ='';
$regions_err ='';
$comments  ='';
$comments_err ='';
$privacy  ='';
$privacy_err ='';

if($_SERVER['REQUEST_METHOD'] == "POST"){

        if(empty($_POST['wines'])){
            $wines_err = 'What... no wines?';
        }
        else{ 
            $wines = $_POST['wines'];
        }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['firstName'])){
        $firstName_err = 'Please fill out your first name';
    }
    else{ 
        $firstName = $_POST['firstName'];
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['lastName'])){
        $lastName_err = 'Please fill out your last name';
    }
    else{ 
        $lastName = $_POST['lastName'];
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['email'])){
        $email_err = 'Please fill in your email';
    }
    else{ 
        $email = $_POST['email'];
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['phone'])){
        $phone_err = 'Please fill out your phone number';
    }
    else{ 
        $phone = $_POST['phone'];
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['gender'])){
        $gender_err = 'Please check your gender';
    }
    else{ 
        $gender = $_POST['gender'];
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['regions'])){
        $regions_err = 'Please choose your region';
    }
    else{ 
        $regions = $_POST['regions'];
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['comments'])){
        $comments_err = 'We value your input';
    }
    else{ 
        $comments = $_POST['comments'];
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['privacy'])){
        $privacy_err = 'You must agree to receive spam email!';
    }
    else{ 
        $privacy = $_POST['privacy'];
    }
}

function my_wines ($wines) {
    $my_return= '';
    if(!empty($_POST['wines'] ) ) {
        $my_return = implode(',  ', $_POST['wines']);
    }
    return $my_return;
}  //end my wines function

if(isset($_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['phone'],
        $_POST['wines'],
        $_POST['regions'],
        $_POST['comments'],
        $_POST['privacy'] )){

            $to = 'admin@xyngular4u.com';
            $subject = 'Test email on  '.date('m/d/y, h:i A');
            $body = '
            First Name: '.$firstName.'  '.PHP_EOL.' 
            Last Name: '.$lastName.'  '.PHP_EOL.' 
            Email: '.$email.'  '.PHP_EOL.' 
            Gender: '.$gender.'  '.PHP_EOL.' 
            Phone: '.$phone.'  '.PHP_EOL.' 
            Wines: '.my_wines($wines).'  '.PHP_EOL.' 
            Region: '.$regions.'  '.PHP_EOL.'
            Comments: '.$comments.'  '.PHP_EOL.' 
            ';
            
        $headers = array(
            'From' => 'noreply@xyngular4u.com'
            );

            if(!empty(
                $firstName &&
                $lastName &&
                $email &&
                $gender &&
                $phone &&
                $wines &&
                $regions &&
                $comments )) {

                   mail($to, $subject, $body, $headers);
                   header ('Location:thx.php');
                }

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our second form week 6</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div><h1>Form 2 in Week 6</h1></div>
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
        <span><?php echo $email_err ;?></span>
        
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

</div>
<!-- end wrapper -->
    
</body>
</html>