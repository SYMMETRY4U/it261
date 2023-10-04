<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Brian"> 
    <title>Home Page</title>
	<link href="css/portal.css" rel="stylesheet" type="text/css">
	
</head>

<body>
	<div id="wrapper">
	<header>
		     <h1>Brian's IT261 Portal Website</h1>
		<nav class="topnav" id="myTopnav">
		    <a href="">Link1</a>
			<a href="">Link2</a>
			<a href="">Link3</a>
			<a href="">Link4</a>
			<a href="">Link5</a>
			<a href="">Link6</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
		</nav>
	</header>
	
		<main>
		<h2>About</h2>
			<p>This is the content for  P Tag</p>
			<p>This is the content for  P Tag</p>
			<h3>This is the content for H3 Tag</h3>
			<img src="images/mamp1.png" alt="mamp screenshot">
					<br>
					<br>
			<img src="images/mamp2.png" alt="mamp screenshot">
		
		</main>
		<aside>
<h2>Weekly Class Exercises</h2>
<h3>Week 2</h3>
<ol>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
</ol>

<h3>Week 3</h3>
<ol>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
</ol>

<h3>Week 4</h3>
<ol>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
	<li><a href="">Link</a></li>
</ol>

</aside>

	<footer> <!--- this is not the way I will style the footer -->
		<ul>
	<li>Copyright &copy;    2023</li>
	<li>All Rights Reserved</li>
	<li><a href="index.html">Web Design by Brian</a></li> <!-- temp link -->
	<li><a id="html-checker" href="#">HTML Validation</a></li>
	<li><a id="css-checker" href="#">CSS Validation</a></li>
	</ul>

	<script>
			document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
			document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
	</script>
		
	</footer>
	
	</div>  <!-- end of wrapper -->
	
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