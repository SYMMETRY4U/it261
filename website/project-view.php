<?php

// do not call header yet
// this info is above doc type
include('config.php');

// is id set??

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
 
} else {
    header('location: project.php');
}

$sql = 'SELECT * FROM project WHERE project_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)) {
 $brand = stripcslashes($row['brand']);
 $model = stripcslashes($row['model']);
 $year = stripcslashes($row['year']);
 $purpose = stripcslashes($row['purpose']);
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
    <div id="wrapper">
    <main>
    <h1>Welcome to our Project View Page</h1>
    <h2>Introducing the: <?php echo $model;?></h2>
    
    <?php
    echo '
    <ul>
        <li><b>Brand: </b>' .$brand.'</li>
        <li><b>Model: </b>' .$model.'</li>
        <li><b>Year: </b>' .$year.'</li>
        <li><b>Purpose: </b>' .$purpose.'</li>  
    ';
    ?>
    </ul>
    <br>
   <p><?php echo $details;?></p>
   <br>
   <p>Return to our <a href="project.php">Project Page</a></p>


    </main>

    <aside>
    <h3>Images of my Motorcycles</h3>
    <figure>
        <img src="./images/project<?php echo $id;?>.jpg" alt="<?php echo $brand; ?>">
        <figcaption>
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





