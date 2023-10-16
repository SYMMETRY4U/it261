<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
	case 'index.php':
	$title = 'Home page of our Website Project';
	$body = 'home';
	break;

	case 'about.php':
	$title = 'About page of our Website Project';
	$body = 'about inner';
	break;

	case 'daily.php':
	$title = 'Daily page of our Website Project';
	$body = 'daily inner';
	break;

	case 'project.php':
	$title = 'Project page of our Website Project';
	$body = 'project inner';
	break;
	
	case 'contact.php':
	$title = 'Contact page of our Website Project';
	$body = 'contact inner';
	break;

	case 'gallery.php':
	$title = 'Gallery page of our Website Project';
	$body = 'gallery inner';
	break;	

} 
// nav array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

// this is the beginning of the switch for homework 3!!!!
if(isset($_GET[ 'today']) ) {
$today= $_GET['today'] ;
} else {
$today = date('l');
}
 switch($today) {
case 'Sunday':
$actDay = 'black';
$day = 'Sunday Motocross Day';
$asideDay = 'Yamaha 1974 YZ125';
$details = 'The Yamaha YZ125 two-stroke might be the number one motocross bike in the world. Actual production numbers are hard to estimate, but the YZ125 and 250 have had the longest production runs of any dedicated dirt bikes, starting in 1974 and continuing to this day. And in that time both sold well, making them the prime contenders for the title of earths biggest selling MX bikes.';
$asideDetails = 'This Yamaha YZ125 is Similar to the one that I rode for a local motorcycle shop from 1972 – 1974.';
$picture = 'images/1974n125.jpg';
$altTag = 'Yamaha 1974 YZ125';
$background = 'background-color: #C3EDC0;';
$bodyBackground = 'background-color: #FDFFAE;';
$asideBackground = 'background-color: #D0E7D2;';
$footerBackground = 'background-color: #FDFFAE;';
$headerBackground = 'background-color: #E9FFC2;';

break;

case 'Monday':
$actDay = 'green';
$day = 'Monday is a fun Riding Day!';
$asideDay = 'DR650 Dual Sport';
$details = 'Traditionally motorcycle shops have been historically closed on Sundays and Mondays. Partially because a lot of the the early motorcycle shops had mechanics and employees competing in motorcycle races during the weekends. Since many employees at motorcycle shops also enjoy riding in general, having Sunday off allows employees to get out for a ride with family and friends, and/or visit the track and even compete if that is the plan.';
$asideDetails = 'Monday, quite often is my day to get out and do some fun riding either on the trails or on dirt roads.';
$picture = 'images/dr650.jpg';
$altTag = 'DR650 Suzuki';
$background = 'background-color: #FAF1E4;';
$bodyBackground = 'background-color: #D0E7D2;';
$asideBackground = 'background-color: #CEDEBD;';
$footerBackground = 'background-color: #D0E7D2;';
$headerBackground = 'background-color: #FAF1E4;';
break;

case 'Tuesday':
$actDay = 'blue';
$day = 'Motorcycle racer, family man, Musician';
$asideDay = 'Randy McAllister';
$details = 'Randy and Diane McAllister owned Aurora Suzuki and after 50 years in business on September 30, 2014 they decided to retire. I remember him telling me he was also going to take a break from racing, but a short time later I was reading an article about him in a national motorcycle magazine competing in vintage motocross racing and being at the top of the expert class. I also have another friend whom I ride motorcycles with, who is also in the music industry who said he met Randy at a venue where Randy\'s band was playing some really good music.';
$asideDetails = 'Randy McAllister racing at Wards Creek picture from from AHRMA MAG Vol. No. 3, Issue No. 8.';
$picture = 'images/randywardscreek-sm.jpg';
$altTag = 'Taco Tuesday';
$background = 'background-color: #7EAA92;';
$bodyBackground = 'background-color: #FFD9B7;';
$asideBackground = 'background-color: #D0E7D2;';
$footerBackground = 'background-color: #FFD9B7;';
$headerBackground = 'background-color: #A0C49D;';
break;

case 'Wednesday':
$actDay = 'orange';
$day = 'Restored 1991 CR250';
$asideDay = 'Restored 1991 CR250';
$details = 'I bought this bike in 1990 from Lake City Honda. Convinced my wife I would lose some weight if she would start letting me race again. I raced mostly outdoor motocross and arena cross. For four years in a row I competed in the Seattle Supercross at the Kingdome. I rode the veteran senior class with the other amateurs at the time. I had some pretty good success, winning a couple arena cross series and one Friday night motocross series however I really didn\'t lose any weight. I also got three compression fractures in my neck and back along with four ruptured discs which led to a couple back surgeries. But that hasn\'t stopped me from riding.';
$asideDetails = 'After 17 years of this bike being in storage I completely restored it.';
$picture = 'images/cr250.jpg';
$altTag = 'Honda CR250';
$background = 'background-color: #CED5E1;';
$bodyBackground = 'background-color: #D0E7D2;';
$asideBackground = 'background-color: #D0E7D2;';
$footerBackground = 'background-color: #D0E7D2;';
$headerBackground = 'background-color: #B0D9B1;';
break;

case 'Thursday':
$actDay = 'purple';
$day = 'Taco Thursday City Hall Saloon';
$asideDay = 'City Hall Saloon & Eatery';
$details = 'Taco Thursday is a custom at the City Hall Saloon & Eatery. Check out the number of bikes on a good night there to eat tacos or in some cases select Mexican dishes typically served in a tortilla on Thursday nights.<br><br>My coworker told me the tacos were great and inexpensive, and the band that night was going to be good one of his friends was playing. But I gotta say I think I was the only one there that was on a dual sport bike. Everybody else was on cruisers or road bikes.';
$asideDetails = 'Taco Thursdays Full Taco Bar Live Music Starts at: 5:00pm Nightly Prizes & Give a ways.<br> 
Nestled in the breathtaking foothills of Cumberland Washington.';
$picture = 'images/cityhall.jpg';
$altTag = 'Thirsty Thursday';
$background = 'background-color: #CED5E6;';
$bodyBackground = 'background-color: #FBF0B2;';
$asideBackground = 'background-color: #D0E7D2;';
$footerBackground = 'background-color: #FBF0B2;';
$headerBackground = 'background-color: #B0D9B1;';
break;

case 'Friday':
$actDay = 'yellow';
$day = 'Time to get Ready for the weekend!';
$asideDay = 'Time to Pick up the grandkids';
$details = 'This summer I was finally able to get my grandkids parents to agree to let me get them started on learning how to ride motorcycles. I got them their helmets, boots, and all the other riding gear they needed to ride safely. I took them to a local company called Dirtbiketraining LLC a great local company based out of Marysville Washington. <br><br>They have several nationally recognized riders and trainers that regularly provide training from beginner to those that compete professionally. <br><br>I hope to get them some bike soon.';
$asideDetails = 'This picture is from Lake Coeur d\'Alene .';
$picture = 'images/grandkids.jpg';
$altTag = 'The Kids';
$background = 'background-color: #CED5E6;';
$bodyBackground = 'background-color: #D0E7D2;';
$asideBackground = 'background-color: #D0E7D2;';
$footerBackground = 'background-color: #D0E7D2;';
$headerBackground = 'background-color: #DBF0B2;';
break;

case 'Saturday':
$actDay = 'red';
$day = 'Saturday is time to hit the trails';
$asideDay = 'KTM 250 Freeride';
$details = 'As I have gotten older, I have found that this KTM 250 freeride is much more enjoyable to ride on the trails than my Suzuki DR 650. It is also about 200 pounds lighter and easier to load and unload. This bike is also one of the very few KTM 250 Freerides that is street legal. It took a lot of effort to find the parts to make it street legal and get it inspected by the Department of Motor Vehicles. <br><br>I do not ride it on the street very frequently just from one trail to the next. I have found that over by the mad River ORV Park if the park rangers or the deputy sheriffs are not in a good mood, or if you are doing something stupid with the bike on the roads, they will give you a ticket and those are not cheap.';
$asideDetails = 'The KTM Freeride is a cross between a trials bike and a Enduro bike';
$picture = 'images/ktmfreeride.jpg';
$altTag = 'Saturday Night Fever';
$background = 'background-color: #CCD6A6;';
$bodyBackground = 'background-color: #DAE2B6;';
$asideBackground = 'background-color: #D0E7D2;';
$footerBackground = 'background-color: #DAE2B6;';
$headerBackground = 'background-color: #DAD2A1;';
break;
}
// end of switch for homework 3!!!!

?>

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
	<!--	<nav>
				<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Daily</a></li>
				<li><a href="">Project</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Gallery</a></li>
				</ul>
		</nav> -->

		<nav>
			<ul>
			<?php
			foreach($nav as $key => $value) {
				if(THIS_PAGE == $key){
					echo '<li><a style="color:red;" href="'.$key.' "> '.$value.'</a></li>';
				}else{
					echo '<li><a style="color:green;" href="'.$key.' "> '.$value.'</a></li>';
				}
		
			}
			?>
			</ul>
		</nav>


		</div> <!-- end inner header -->
		
	</header>