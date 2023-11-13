
<?php

$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';


// people as our varible key            value
// $name                                image
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Week 7 Class exercise - pictures</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div>
            <h1>Our Pictures PHP page</h1>
            <br>

            <table>
            <?php foreach($people as $name => $image): ?>
<tr>
    <td><img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td> <!-- 1st td image -->
    <td><?php echo str_replace('_', ' ', $name); ?></td> <!-- name -->
    <td><?php echo substr($image, 6); ?></td> <!-- info -->
    <td><img src="images/<?php echo substr($image, 0, 6); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td> <!-- 4th td image -->
</tr>
<?php endforeach; ?>

            </table>
        </div>
    </div>
    <!-- end wrapper --> 
</body>
</html>
























