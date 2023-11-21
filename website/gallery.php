
<?php

$bike['Honda_Trail125'] = 'trail_A classic Retro Trail Bike';
$bike['Honda_CRF450'] = 'crf45_A very dependable motorcycle';
$bike['Honda_CRF350'] = 'crf35_A mid-sized dual purpose motorcycle';
$bike['Yamaha_XT250'] = 'xt250_The little modern brother to the Great XT550';
$bike['KTM_300XC'] = '300xc_The KTM 300XC-W Erzbergrodeo.';
$bike['KTM_KTMXC300'] = 'ktmxc_Tke KTM XC300 A great off road dirt bike .';
$bike['Yamaha_Yamaha-WR'] = 'yamah_The Yamaha WR 250 a great little dirt bike.';
$bike['Yamaha_XT550'] = 'xt550_This was my first bike after I got of the Navy.';



// bike as our varible key            value
// $name                                image
?>

<?php 
	include('config.php');
	include('./includes/header.php'); ?>
 

    <div id="wrapper">
        <div>
            <h1>Our Gallery page</h1>
            <br>

            <table>
            <?php foreach($bike as $name => $image): ?>
<tr>
    <td><img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td> <!-- 1st td image -->
    <td><?php echo str_replace('_', ' ', $name); ?></td> <!-- name -->
    <td><?php echo substr($image, 6); ?></td> <!-- info -->
    
    <!-- I took the easy way to do this -->
</tr>
<?php endforeach; ?>

            </table>
        </div>
    </div>


    
  <!-- end of wrapper -->

	<?php include('./includes/footer.php'); ?>
























