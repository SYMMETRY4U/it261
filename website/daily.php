
<div id="wrapper">
<?php include('./includes/header.php'); ?>



		<div><h1 style="text-align: center">Motorcycle's of the Day!</h1></div>
			<main style="<?php echo $background; ?>">
				<div style="padding: 20px;">
				
				
				
				<h2 class="<?php echo $actDay ; ?> "><?php echo $day; ?></h2>
						<p><?php echo $details; ?></p>
						<h3>Motorcycle Spotlights</h3>
						<?php date_default_timezone_set('America/Los_Angeles'); ?>
						<p style="text-align: center;">The time is <?php echo date('l, F jS \a\t g:i A'); ?></p>


				<ul style="padding-left: 20px;">
	<li><a style="color:<?php if($today == 'Sunday') { echo 'orange'; } else { echo 'blue'; } ; ?>" href="daily.php?today=Sunday">Sunday</a></li>
	<li><a style="color:<?php if($today == 'Monday') { echo 'green'; } else { echo 'blue'; } ; ?>" href="daily.php?today=Monday">Monday</a></li>
	<li><a style="color:<?php if($today == 'Tuesday') { echo 'black'; } else { echo 'blue'; } ; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>
	<li><a style="color:<?php if($today == 'Wednesday') { echo 'green'; } else { echo 'blue'; } ; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>
	<li><a style="color:<?php if($today == 'Thursday') { echo 'orange'; } else { echo 'blue'; } ; ?>" href="daily.php?today=Thursday">Thursday</a></li>
	<li><a style="color:<?php if($today == 'Friday') { echo 'red'; } else { echo 'blue'; } ; ?>" href="daily.php?today=Friday">Friday</a></li>
	<li><a style="color:<?php if($today == 'Saturday') { echo 'green'; } else { echo 'blue'; } ; ?>" href="daily.php?today=Saturday">Saturday</a></li>

    </ul>

				</div>
					</main>
		
	<aside style="<?php echo $asideBackground; ?>">
    <h3><?php echo $asideDay; ?></h3>
    <img src="<?php echo $picture; ?>" alt="<?php echo $altTag; ?>">
    <p><?php echo $asideDetails; ?></p>
		</aside>


	
	</div>  <!-- end of wrapper -->

	<?php include('./includes/footer.php'); ?>


