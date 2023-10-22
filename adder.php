<?php 
//adder-wrong.php
//  Fatal error: Uncaught TypeError: Unsupported operand types: string + string in I:\MAMP\htdocs\it261\adder.php:10 Stack trace: #0 {main} thrown in I:\MAMP\htdocs\it261\adder.php on line 10  If I use no numbers
?>
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

if (isset($_POST['Num1'])) {
    $num1 = $_POST['Num1'];
    $num2 = $_POST['num2'];

    $myTotal = 0;    // Start
    $myTotal = $num1 + $num2;
}

    if ($num1 !== '' && $num2 !== '' && $myTotal !== '') {
        echo "<h2>You added numbers " . $num1 . " and " . $num2 . "</h2>";
        echo "<h3> and the answer is <br><span style='color:red;'>" . $myTotal . "</span></h3>";
    }
?>
	</div> <!-- end centering div -->
 

</div> <!-- end box -->

<!-- end wrapper -->
</body>
</html>

<!--
    

// repairs and adjustments assignment week 4
// removed ';?> after </html> origanally line 32
// Num2 should be num2 origanally line 6
// Initialize myTotal and put above the isset origanally line 6
// line 6 myTotal not correct in string
// Correct the string concatenation to h2 tag and moved to class.box origanally line 7
// added missing h2 close
// moved origanal lines 7,8,9,10, to class.box because it looks better
// after h2 tag line 8 style tag is mixed into the echo string, making it invalid syntax. line 7
// myTotal is not being correctly echoed inside the string,
// removed the - from -= mytotal  line 6
//  form field started with closing tag  line 21
//  added my html code to the head
//  used my css file instead of <style></style> line 16 - 18
// <label> missing before enter first number   origanally line 23
// </label> before enter second number was wrong, then missing the close tag  origanally line 24
// Fixed the closing double-quote to submit value  line 26
// added method="post in form origanally line 23
// removed the ! in the answer because I do not like the way it looks
// you did not ask for this code but it works
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

 -->

