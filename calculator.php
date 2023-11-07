<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Travel Calculator</title>
    <link href="weeks/week5/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div><h1>My Travel Calculator</h1></div>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <fieldset>
                <label>Name</label>
                <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
                <label>Total miles driving?</label>
                <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ?>">
                <label>How fast do you typically drive?</label>
                <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']); ?>">
                <label>How many hours per day do you plan on driving?</label>
                <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>">
                
                <label>Price of gas</label>
        <ul>
            <li><input type="radio" name="gas_price" value="3.00"<?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == '3.00') echo 'checked="checked"'; ?>> $3.00</li>
            <li><input type="radio" name="gas_price" value="3.50"<?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == '3.50') echo 'checked="checked"'; ?>> $3.50</li>
            <li><input type="radio" name="gas_price" value="4.00"<?php if(isset($_POST['gas_price']) && $_POST['gas_price'] == '4.00') echo 'checked="checked"'; ?>> $4.00</li>
        </ul>
                
        <label>Fuel efficiency</label>
        <select name="efficiency">
<option value="" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '') echo 'selected'; ?>>Select one!</option>
<option value="10" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10') echo 'selected'; ?>>Terrible @ 10mpg</option>
<option value="15" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '15') echo 'selected'; ?>>Average @ 15mpg</option>
<option value="20" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '20') echo 'selected'; ?>>Good @ 20mpg</option>
<option value="30" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30') echo 'selected'; ?>>Really Good @ 30mpg</option>
<option value="40" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '40') echo 'selected'; ?>>Great @ 40mpg</option>
</select>

<!-- <select name="efficiency">
 <option value="" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL ) echo 'selected = "unselected"' ; ?>>Select one!</option>
 <option value="10" <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 10) echo 'selected = "selected"' ; ?>>Terrible @ 10mpg</option>
 <option value="15"<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 15) echo 'selected = "selected"' ; ?>>Average @ 15mpg</option>
 <option value="20"<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 20) echo 'selected = "selected"' ; ?>>Good @ 20mpg</option> 
 <option value="30"<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 30) echo 'selected = "selected"' ; ?>>Really Good @ 30mpg</option> 
 <option value="40"<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 40) echo 'selected = "selected"' ; ?>>Great @ 40mpg</option>
</select>  -->

                
        <!-- <select name="efficiency">
                    <option value="" <?php if(isset($_POST['efficiency']) && empty($_POST['efficiency'])) echo 'selected = "unselected"' ; ?>>Select one!</option>
                    <option value="10">Terrible @ 10mpg</option>
                    <option value="15">Average @ 15mpg</option>
                    <option value="20">Good @ 20mpg</option>
                    <option value="30">Really Good @ 30mpg</option>
                    <option value="40">Great @ 40mpg</option>
                </select> -->

                <input type="submit" value="Calculate">
                <br>
                
                <p><a href="">Reset it</a></p>
            </fieldset>
        </form>
        <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check for empty fields and display appropriate error messages
    if (empty($_POST['name'])) echo '<p class="error">Please fill out your Name</p>';
    if (empty($_POST['miles'])) echo '<p class="error">Please fill out your total driving miles</p>';
    if (empty($_POST['speed'])) echo '<p class="error">Please fill out how fast you will be driving</p>';
    if (empty($_POST['hours'])) echo '<p class="error">How many hours per day would you like to drive?</p>';
    if (empty($_POST['gas_price'])) echo '<p class="error">Your cost of gas please!</p>';
    if (empty($_POST['efficiency'])) echo '<p class="error">Please select your cars efficiency</p>';
    // if (empty($_POST['efficiency']) || $_POST['efficiency'] == "") echo '<p class="error">Please select your cars efficiency</p>';


    // If all fields are filled out, perform calculations and display message
    if (!empty($_POST['name']) && !empty($_POST['miles']) && !empty($_POST['speed']) && !empty($_POST['hours']) && !empty($_POST['gas_price']) && !empty($_POST['efficiency']) && $_POST['efficiency'] != "") {
        $name = htmlspecialchars($_POST['name']);
        $totalHours = floatval($_POST['miles']) / floatval($_POST['speed']);
        $days = ceil($totalHours / floatval($_POST['hours']));
        $gasNeeded = floatval($_POST['miles']) / floatval($_POST['efficiency']);
        $cost = $gasNeeded * floatval($_POST['gas_price']);

        echo "<div class='box'>
            <h2>Hello {$name},</h2>
            <p>You will be traveling a total of " . number_format($totalHours, 2) . " hours, taking " . number_format($days, 2) . " days. And, you will be using " . number_format($gasNeeded, 2) . " gallons of gas, costing you \$" . number_format($cost, 2) . " dollars.</p>
        </div>";
    }
}
?>

<footer> 
	<ul>
	<li>Copyright &copy;    2023</li>
	<li>All Rights Reserved</li>
	<!-- <li><a href="index.html">Web Design by Brian</a></li> temp link -->
	<li><a href="#" target="_blank" id="html-checker">HTML Validation</a></li>
	<li><a href="#" target="_blank" id="css-checker">CSS Validation</a></li>
	</ul>
</footer> 
	<script>
			document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
			document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
	</script>

    </div> <!-- end wrapper -->
</body>
</html>
