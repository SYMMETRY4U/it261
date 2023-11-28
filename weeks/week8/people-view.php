<?php

// do not call header yet
// this info is above doc type
include('config.php');

// is id set??

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
 
} else {
    header('location: people.php');
}

$sql = 'SELECT * FROM people WHERE people_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)) {
 $first_name = stripcslashes($row['first_name']);
 $last_name = stripcslashes($row['last_name']);
 $email = stripcslashes($row['email']);
 $birthdate = stripcslashes($row['birthdate']);
 $occupation = stripcslashes($row['occupation']);
 $blurb = stripcslashes($row['blurb']);
 $details = stripcslashes($row['details']);
// wiil add column

$feedback = '';


    }   //close while loop

}   else {
     $feedback = 'Houston, we have a problem';
}

include('./includes/header.php');

?>

    <main>
    <h1>Welcome to our People View Page</h1>
    <h2>Introducing: <?php echo $first_name;?></h2>
    
    <?php
    echo '
    <ul>
        <li><b>First Name: </b>'.$first_name.'</li>
        <li><b>Last Name: </b>'.$last_name.'</li>
        <li><b>Email: </b>'.$email.'</li>
        <li><b>Birth Date: </b>'.$birthdate.'</li>
        <li><b>Occupation: </b>'.$occupation.'</li>     
    ';
    ?>
    </ul>
   <p><?php echo $details;?></p>
   <p>Return to our <a href="people.php">People Page</a></p>


    </main>

    <aside>
    <h3>Here is their image!!</h3>
    <figure>
        <img src="./images/people<?php echo $id;?>.jpg" alt="<?php echo $first_name; ?>">
        
        <figcaption>
            <br>
            <?php echo $blurb;?>
        </figcaption>
    </figure>
</aside>


</div>
<!-- end wrapper -->


<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');

?>





