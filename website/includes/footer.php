
<footer style="<?php echo $footerBackground; ?>">
		<ul>
	<li>Copyright &copy;    2023</li>
	<li>All Rights Reserved</li>
	<li><a href="https://xyngmetry.com/it261/index.php">Web Design by Brian</a></li> <!-- temp link -->
	<li><a id="html-checker" href="#">HTML Validation</a></li>
	<li><a id="css-checker" href="#">CSS Validation</a></li>
	</ul>

	<script>
			document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
			document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
	</script>
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
		
	</footer>
	
	
    
</body>
</html>