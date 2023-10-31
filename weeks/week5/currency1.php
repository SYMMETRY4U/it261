<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Brian"> 
    <title>Curenncy 1 php form</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
						
 <div id="wrapper">
 <div><h1>My Currency 1 php</h1></div>
<form action="<?php echo $_SERVER['PHP_SELF'];?> " method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name">
        <label>EMAIL</label>
        <input type="email" name="email">
        <label>How much money do you have?</label>
        <input type="number" name="amount">
        <!-- time for our radio button that has an additional attribute of VALUE-->
        <label>Choose your currency</label>
            <ul>
                <li><input type="radio" name="currency" value="0.013"> Rubles</li>
                <li><input type="radio" name="currency" value="0.80"> Canadian Dollars<li>
                <li><input type="radio" name="currency" value="1.37"> Pounds</li>
                <li><input type="radio" name="currency" value="1.14"> Euros</li>
                <li><input type="radio" name="currency" value="0.0087"> Yen</li>
            </ul>
                <input type="submit" value="Convert it">
                <br>
                <p><a href="">Reset it</a></p>
            </fieldset>
        </form>

        <?php
                 // we will start with the server request method
                 // then, we will ask ourselves i f any fields are empty
                 // if the fields are not empty , we will elseif they are set
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (empty($_POST['name']) &&
                empty($_POST['email']) &&
                empty($_POST['amount']) &&
                empty($_POST['currency'])) {

                echo '<p class="error">Please fill out all of the fields</p>';
                     } elseif (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $amount = $_POST['amount'];
                    $currency = $_POST['currency'];
                    $dollars = $amount * $currency;

                    echo '<div class="box"><h2>Hello ' . $name . '</h2>
                    <p>You now have <b>$' . floor($dollars) . ' American dollars</b> and we will be emailing you at ' . $email . ' with your information!</p>
                    </div>
                    ';
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

	<script>
			document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
			document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
	</script>
</footer>

</div>
           
</body>

</html>