<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">  
    <title>Our Arithmetic Form</title>
</head>
<body>

<div id="wrapper">
<h1 style="text-align: center">Our Celcius Form Converter</h1>

<form action="<?php echo $_SERVER['PHP_SELF']   ;?> "method="post">
<fieldset>
<label>Enter your celcius value</label>
<input type="number" name="cel">
<input type="submit" value="Convert it!">

</fieldset>
<p><a href="">Reset</a></p>

</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['cel'])){
$cel = $_POST['cel'];
// new function
$cel_int = intval($cel);
$far = ($cel_int *9/5) +32;

// if user does not enter value, say somethhing

if($cel == NULL) {

 echo '<p class="error">Please fill out the Celcius Value!</p>';

    echo '<p>Please fill out the Celcius value</p>';
} elseif($far <= 32) {
    echo '<p> '.$cel_int.' degrees equals   '.$far. ' degrees <br> 
   and it is very cold out there </p>';
}

elseif($far <= 45) {
    echo '<p> '.$cel_int.' degrees equals   '.$far. ' degrees <br> 
   and it is getting warmer </p>';
}

elseif($far <= 60) {
    echo '<p> '.$cel_int.' degrees equals   '.$far. ' degrees <br> 
   and it is sweater weather </p>';
}
elseif($far <= 75) {
    echo '<p> '.$cel_int.' degrees equals   '.$far. ' degrees <br> 
   We\er going to the park </p>';
}

elseif($far <= 90) {
    echo '<p> '.$cel_int.' degrees equals   '.$far. ' degrees <br> 
   We may be going to the beach </p>';
}

else {
    echo '<p> '.$cel_int.' degrees equals   '.$far. ' degrees <br> 
    We are at the beach </p>';
}


}  //end isset


}  //end post

?>


</div>  
    <!-- end wrapper -->
</body>
</html>