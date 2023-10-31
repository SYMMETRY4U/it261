<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Brian"> 
    <title>Curenncy 4 Extra Credit</title>
	<link href="css/styles.css" rel="stylesheet" type="text/css">

</head>

<body>
						<!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php -->
 <div id="wrapper">
 <div><h1>My Currency 4 Extra Credit</h1></div>

 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <label>NAME</label>
        <input type="text" name="name" value="<?php if (isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
        <label>EMAIL</label>
        <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <label>How much money do you have?</label>
        <input type="number" name="amount" value="<?php if (isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']); ?>">

        <!-- time for our radio button that has an additional attribute of VALUE-->
        <label>Choose your currency</label>
        <ul>
            <li><input type="radio" name="currency" value="0.013"<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked="checked" '  ; ?>> Rubles</li>
            <li><input type="radio" name="currency" value="0.80"<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.80') echo 'checked="checked" '  ; ?>> Canadian Dollars</li>
            <li><input type="radio" name="currency" value="1.37"<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.37') echo 'checked="checked" '  ; ?>> Pounds</li>
            <li><input type="radio" name="currency" value="1.14"<?php if(isset($_POST['currency']) && $_POST['currency'] == '1.14') echo 'checked="checked" '  ; ?>> Euros</li>
            <li><input type="radio" name="currency" value="0.0087"<?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0087') echo 'checked="checked" '  ; ?>> Yen</li>
            </ul>

            <label>Choose your banking institution</label><br>
    <select name="bank">
    <!-- <option value="" NULL <?php if(isset( $_POST['bank']) && $_POST['bank'] == NULL) echo 'selected = "unselected"' ; ?>>Select one!</option> -->
    <option value=""  <?php if(isset( $_POST['bank']) && is_null($_POST['bank'])) echo 'selected = "unselected"' ; ?>>Select one!</option>
    <option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected = "selected"' ; ?>>Bank of America</option>
    <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected = "selected"' ; ?>>Chase Bank</option>
    <option value="banner" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'banner') echo 'selected = "selected"' ; ?>>Banner Bank</option>
    <option value="wells fargo" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'wells fargo') echo 'selected = "selected"' ; ?>>Wells Fargo</option>
    <option value="boeing credit union" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected = "selected"' ; ?>>Boeing Credit Union</option>

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
                        echo '<p class="error">Please choose your currency!</p>';
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
                    // $amount = intval($_POST['amount']);
                    $amount = floatval($_POST['amount']);
                    $currency = floatval($_POST['currency']);
                    $bank = $_POST['bank'];
                    $dollars = $amount * $currency;
                          //$dollars = (float)$amount * (float)$currency;//

                    // stops display when not selected
                    // if(!empty($name && $email && $amount && $currency && $bank)) {
                    if(!empty($name && $email && $amount && $currency) && ($bank != NULL)) {

                                 
                    echo '
                    <div class="box"><h2>Hello ' . $name .',</h2>
                    <p>You now have <b>$' .number_format($dollars, 2) . ' American dollars</b> and we will be emailing you at <b>' . $email . '</b> with your information, as well as depositing your funds at <b>'.$bank.' bank!</b></p>
                    </div>
                    ';


                    
                    
      // Adding the if - ifelse logic for videos and messages
      if ($dollars < 249) {
        $background_color = "#FFf";
        $message = "I am not happy, because I only have $".number_format($dollars, 2)." American dollars";
        $video_link = "https://www.youtube.com/embed/KtWGUCCXsAw?start=14&autoplay=1";
    } elseif ($dollars >= 250 && $dollars < 499) {
        $message = "I am happy because I have $".number_format($dollars, 2)." American dollars";
        $video_link = "https://www.youtube.com/embed/y6Sxv-sUYtM?start=14&autoplay=1"; 
    } elseif ($dollars >= 500 && $dollars < 749) {
        $message = "I am more happy because I have $".number_format($dollars, 2)." American dollars";
        $video_link = "https://www.youtube.com/embed/TTfYnRQgKgY?start=14&autoplay=1"; 
    } elseif ($dollars >= 750 && $dollars < 999) {
        $message = "I am happy because I have to spend on stuff $".number_format($dollars, 2)." American dollars";
        $video_link = "https://www.youtube.com/embed/q4M348VHFos?start=14&autoplay=1"; 
    } elseif ($dollars >= 1000 && $dollars < 1499) {
        $message = "I am thrilled because I get to spent on the grandkids $".number_format($dollars, 2)." American dollars";
        $video_link = "https://www.youtube.com/embed/Ae829mFAGGE?start=14&autoplay=1"; 
    } elseif ($dollars >= 1500 && $dollars < 1999) {
        $message = "I am ecstatic because I buy more parts with the $".number_format($dollars, 2)." American dollars";
        $video_link = "https://www.youtube.com/embed/41cFf9N5F-A?start=14&autoplay=1"; 
    } elseif ($dollars >= 2000) {
        $message = "Time to buy a Motorcycle because I have $".number_format($dollars, 2)." American dollars";
        $video_link = "https://www.youtube.com/embed/Dm48-k_XzBM?start=14&autoplay=1"; 
    }

    // Display video and message based on the conditions
    echo '
        <div><h2><b>'.$message.'</b></h2>
        <br>
        <div align="center">
        <div class="video">
        <iframe width="560" height="315"
        src="'.$video_link.'"
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
        clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </div>
        </div>
    ';

    echo '</div>';  // closing the "box" div
} }
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
</div>     <!-- end wrapper  -->


</body>

</html>