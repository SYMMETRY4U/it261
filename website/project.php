<?php

include('config.php');
include('./includes/header.php');?>
<div id="wrapper">

<main style="align-self: center;">
    <h1>Welecome to our Project Page</h1>

<?php


$sql = 'SELECT *FROM project';

// now we need to connect to the database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we have a row, which translates into an array
// if iur result is greater than 0 we are happy

if(mysqli_num_rows($result) > 0){

// we are going to add a while loop

while($row = mysqli_fetch_assoc($result)) {
 
    echo '
    <h2 style="text-align: left">Information about: '.$row['brand'].' '.$row['model'].'</h2>
    <ul>

    <li>Year: '.$row['year'].'</li>
    <li>Purpose: '.$row['purpose'].'</li>
    </ul>

    <p>For more information about the '.$row['model'].'. click <a href="project-view.php?id='.$row['project_id'].' "> here</a></p><br><br>
    ';
    
    

}   // end while loop


}   else{
    echo 'Nobody Home';


}

// we are going to release server
 
@mysqli_free_result($result);

@mysqli_close($iConn);


?>

</main>

<!-- <aside>


</aside> -->


</div><!-- end wrapper -->


<?php

include('./includes/footer.php');

?>





