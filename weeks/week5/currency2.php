<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Brian"> 
    <title>Curenncy 2 php form with drop down</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
						
 <div id="wrapper">
 <div align="center"><h1>My Currency 2 php</h1></div>

 <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="post">
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
                <li><input type="radio" name="currency" value="0.80"> Canadian Dollars</li>
                <li><input type="radio" name="currency" value="1.37"> Pounds</li>
                <li><input type="radio" name="currency" value="1.14"> Euros</li>
                <li><input type="radio" name="currency" value="0.0087"> Yen</li>
            </ul>

            <label>Choose your banking institution</label><br>
    <select name="bank">
    <option value="" NULL>Select one!</option>
    <option value="boa">Bank of America</option>
    <option value="chase">Chase Bank</option>
    <option value="banner">Banner Bank</option>
    <option value="wells">Wells Fargo</option>
    <option value="becu">Boeing Credit Union</option>
    </select><br><br>

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

                    if(empty($_POST['name'])) {
                        echo '<p class="error">Please fill out your name!</p>';
                    }
                    if(empty($_POST['email'])) {
                        echo '<p class="error">Please fill out your email!</p>';
                    }
                    if(empty($_POST['amount'])) {
                        echo '<p class="error">Please fill out your amount!</p>';
                    }
                    if(empty($_POST['currency'])) {
                        echo '<p class="error">Please check your currency!</p>';
                    }               

                    if($_POST['bank'] == NULL) {
                        echo '<p class="error">Please choose your banking institution!</p>';
                    }


                    if (isset($_POST['name'], 
                    $_POST['email'], 
                    $_POST['amount'], 
                    $_POST['currency'],
                    $_POST['bank'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $amount = $_POST['amount'];
                    $currency = $_POST['currency'];
                    $bank = $_POST['bank'];
                    $dollars = $amount * $currency;
                
                    echo '
                    <div class="box"><h2>Hello ' . $name . '</h2>
                    <p>You now have <b>$' . floor($dollars) . ' American dollars</b> and we will be emailing you at <b>' . $email . '</b> with your information, as well as depositing your funds at <b>'.$bank.' bank!</b></p>
                    </div>
                    ';
                     } }
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

</div>     <!-- end wrapper  -->
</body>

</html>