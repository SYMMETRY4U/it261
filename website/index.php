<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Brian"> 
    <title>Brian' Portal Page</title>
	<link href="../css/portal.css" rel="stylesheet" type="text/css">
	
</head>

<body>
						<!-- <h1><a href="index.php">Brian's Portal Page</a></h1> -->
						<!-- <h2>The navigation below represents our BIG Assignments. </h2> -->
 <div id="wrapper">
 <nav class="topnav" id="myTopnav">
<ul>
<li><a href="daily.php">Switch</a></li>
<li><a href="../default.htm">Troubleshoot</a></li>
<li><a href="../default.htm">Calculator</a></li>
<li><a href="../default.htm">Email</a></li>
<li><a href="../default.htm">Database</a></li>
<li><a href="../default.htm">Gallery</a></li>
						<!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> -->
</ul>

</nav>
<main>
<h2>About Me</h2>
<img class="right" src="../images/BrianOnBike.jpg" alt="Brian">
<p>My name is Brian St Louis, I am transitioning into a new career due to multiple work injuries
that forced me to retire. During my working career I regularly attended work-related classes, seminars, and personal development classes at local community colleges. My goal is to do remote web development.
</p>

<p>For 38 years I was employed by the State of Washington as a boiler operator, facilities maintenance mechanic, and served as the asbestos abatement supervisor for the facility I worked at. I started a couple of businesses during this time to supplement my income while still working. I started Symmetry Health Care Services LLC with the goal to provide in home health care services I do the paperwork and facility maintenance.</p>
	

<p>My hobby since a very young age was riding motorcycles which evolved into competing in motocross and other types of racing for the motorcycle shop; I was working for during my high school years. I took up racing motocross and arena cross again in the early 90s. I still do a lot of riding but it is mostly with guys my own age doing mostly dual sport and single-track riding.</p>


<h3>MAMP Screenshots</h3>

<img src="../images/mampscreen.jpg" alt="mamp screenshot">
<br>
<br>
<img src="../images/mamperror.png" alt="mamp screenshot">

</main>
	 
	
<aside>
<h2>Weekly Class Exercises</h2>
<h3>Week 2</h3>
<ol>
<li><a href="../weeks/week2/var.php">var.php</a></li>
<li><a href="../weeks/week2/vars2.php">vars2.php</a></li>
<li><a href="../weeks/week2/currency-logic.php">currency-logic.php</a></li>
<li><a href="../weeks/week2/currency.php">currency.php</a></li>
<li><a href="../weeks/week2/heredoc.php">heredoc.php</a></li>
</ol>

<h3>Week 3</h3>
<ol>
<li><a href="../weeks/week3/if.php">if.php</a></li>
<li><a href="../weeks/week3/date.php">date.php</a></li>
<li><a href="../weeks/week3/for-each.php">for-each.php</a></li>
<li><a href="../weeks/week3/for-loop.php">for-loop.php</a></li>
<li><a href="../weeks/week3/switch.php">switch.php</a></li>
<li><a href="index.php">index.php</a></li>
</ol>

<h3>Week 4</h3>
<ol>
<li><a href="../weeks/week4/form-get.php">form-get.php</a></li>
<li><a href="../weeks/week4/form1.php">form1.php</a></li>
<li><a href="../weeks/week4/form2.php">form2.php</a></li>
<li><a href="../weeks/week4/form3.php">form3.php</a></li>
<li><a href="../weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
<li><a href="../weeks/week4/celcius.php">celcius.php</a></li>
</ol>




</aside>

<footer> <!--- this is not the way I will style the footer -->
	<ul>
	<li>Copyright &copy;    2023</li>
	<li>All Rights Reserved</li>
	<li><a href="../index.html">Web Design by Brian</a></li> <!-- temp link -->
	<li><a href="#" target="_blank" id="html-checker">HTML Validation</a></li>
	<li><a href="#" target="_blank" id="css-checker">CSS Validation</a></li>
	</ul>

	<script>
			document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
			document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
	</script>
</footer>
		
	
</div> <!-- close wrapper -->
	
	
	
			<script>
			    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }  
		</script>
    
</body>
</html>