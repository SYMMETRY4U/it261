<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="author" content="Brian"> 
    <title><?php echo $title; ?></title>
	<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body style="<?php echo $bodyBackground; ?>" class="<?php echo $body; ?>">
<header style="<?php echo $headerBackground; ?>">
		<div class="inner-header">
			<a href="index.php">
				<img src="images/logo.png" alt="logo" width="100" id="logo">
				</a>	

		<nav>
			<ul>
			<?php
			echo make_links($nav);
			?>
			</ul>
		</nav>

		</div> <!-- end inner header -->
		
	</header>