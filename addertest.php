<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/styles.css" type="text/css" rel="stylesheet">  
<title>My Adder Assignment</title>
</head>
<body>
<div id="wrapper">
	
<h1 style="text-align: center">Adder.php</h1> 

<form action="" method="post">
    <label>Enter the first number:</label>
    <input type="text" name="Num1"><br>
    <label>Enter the second number:</label>
    <input type="text" name="num2"><br>
    <input type="submit" value="Add Em!!">
</form>

<p><a href="">Reset</a></p>
<div class="box">
	<div align="center">
    
<?php

$num1 = $num2 = $myTotal = '';  // Initialize variables
$message = '';  // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['Num1'];
    $num2 = $_POST['num2'];

    if ($num1 === '' || $num2 === '') {
        $message = "Please input a number in each input area!";
    } else {
        $myTotal = $num1 + $num2;
        $message = "<h2>You added numbers " . $num1 . " and " . $num2 . "</h2>" . "<h3> and the answer is <br><span style='color:red;'>" . $myTotal . "!</span></h3>";
    }
}

echo $message;  // Display the message (either result or error)

?>

	</div> <!-- end centering div -->
</div> <!-- end box -->

<!-- end wrapper -->
</body>
</html>
