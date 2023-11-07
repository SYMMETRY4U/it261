<?php

 ob_start();

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

    case 'contact2.php':
        $title = 'Contact page of our Website Project';
        $body = 'contact inner';
        break;

    case 'thx.php':
        $title = 'Thank You';
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

function make_links($nav){
	$my_return = '';
	foreach ($nav as $key => $value) {
		if(THIS_PAGE == $key) {
	$my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
	} else {
	$my_return .= '<li><a href="' .$key.'">'.$value.'</a></l1>';
	}

} //end foreach
return $my_return;

} // end function

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
$day = 'Tuesday\'s spotlight Randy McAllister';
$asideDay = 'Randy McAllister';
$details = 'Randy and Diane McAllister owned Aurora Suzuki and after 50 years in business on September 30, 2014 they decided to retire. I remember him telling me he was also going to take a break from racing, but a short time later I was reading an article about him in a national motorcycle magazine competing in vintage motocross racing and being at the top of the expert class. I also have another friend whom I ride motorcycles with, who is also in the music industry who said he met Randy at a venue where Randy\'s band was playing some really good music.';
$asideDetails = 'Randy McAllister racing at Wards Creek picture from from AHRMA MAG Vol. No. 3, Issue No. 8.';
$picture = 'images/randywardscreek-sm.jpg';
$altTag = 'Randy McAllister';
$background = 'background-color: #FFD9E7;';
$bodyBackground = 'background-color: #FFD9B7;';
$asideBackground = 'background-color: #D0E7D2;';
$footerBackground = 'background-color: #FFD9B7;';
$headerBackground = 'background-color: #A0C49D;';
break;

case 'Wednesday':
$actDay = 'orange';
$day = 'Wednesdays are restoration spotlight days';
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
$day = 'Fridays, get ready for the weekend!';
$asideDay = 'Pick up the grandkids on Fridays';
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

//  my forms php

$dirtbikes ='';
$dirtbikes_err ='';
$firstName  ='';
$firstName_err ='';
$lastName  ='';
$lastName_err ='';
$email  ='';
$email_err ='';
$phone  ='';
$phone_err ='';
$contact  ='';
$contact_err ='';
$riding  ='';
$riding_err ='';
$comments  ='';
$comments_err ='';
$privacy  ='';
$privacy_err ='';


if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['dirtbikes'])){
        $dirtbikes_err = 'What no favorite Dirtbikes?';
    }
    else{ 
        $dirtbikes = $_POST['dirtbikes'];
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['firstName'])){
        $firstName_err = 'Please fill out your first name';
    }
    else{ 
        $firstName = $_POST['firstName'];
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['lastName'])){
        $lastName_err = 'Please fill out your last name';
    }
    else{ 
        $lastName = $_POST['lastName'];
    }
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty($_POST['email'])) {
        $email_err = 'Please fill in your email';
    } 
    else { 
        $email = $_POST['email'];
        if (strpos($email, '@') === false) {
            $email_err = 'Email address is missing an "@" symbol.';
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = 'Invalid email format.';
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST['phone'])) {
        $phone_err = 'Please fill out your phone number';
    } 
    else { 
        $phone = trim($_POST['phone']); 
        $pattern = "/^(\d{3}-\d{3}-\d{4}|\d{3} \d{3} \d{4}|\d{10})$/";

        if (!preg_match($pattern, $phone)) {
            $phone_err = 'Invalid phone number format. Use numbers.';
        }
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['contact'])){
        $contact_err = 'Please select method of contact if any!';
    }
    else{ 
        $contact = $_POST['contact'];
    }
}


if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['riding'])){
        $riding_err = 'Choose your riding preference';
    }
    else{ 
        $riding = $_POST['riding'];
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['comments'])){
        $comments_err = 'We value your input';
    }
    else{ 
        $comments = $_POST['comments'];
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['privacy'])){
        $privacy_err = 'You must agree to our privacy statement';
    }
    else{ 
        $privacy = $_POST['privacy'];
    }
}

function my_dirtbikes ($dirtbikes) {
    $my_return= '';
    if(!empty($_POST['dirtbikes'] ) ) {
        $my_return = implode(',  ', $_POST['dirtbikes']);
    }
    return $my_return;
}
if(isset($_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['contact'],
        $_POST['phone'],
        $_POST['dirtbikes'],
        $_POST['riding'],
        $_POST['comments'],
        $_POST['privacy'] )){

            $to = 'admin@xyngular4u.com';
            date_default_timezone_set('America/Los_Angeles');
            $subject = 'Test email on  '.date('m/d/y, h:i A');
            $body = '
            First Name: '.$firstName.'  '.PHP_EOL.' 
            Last Name: '.$lastName.'  '.PHP_EOL.' 
            Email: '.$email.'  '.PHP_EOL.' 
            contact: '.$contact.'  '.PHP_EOL.' 
            Phone: '.$phone.'  '.PHP_EOL.' 
            dirtbikes: '.my_dirtbikes($dirtbikes).'  '.PHP_EOL.' 
            riding: '.$riding.'  '.PHP_EOL.'
            Comments: '.$comments.'  '.PHP_EOL.' 
            ';
            ob_end_flush();   
        $headers = array(
            'From' => 'noreply@xyngular4u.com'
            );

            if(!empty(
                $firstName &&
                $lastName &&
                $email &&
                $contact &&
                $phone &&
                $dirtbikes &&
                $riding &&
                $comments )) {

                   mail($to, $subject, $body, $headers);
                   header('Location:thx.php');
                   exit;
                }

        }

         
        
        
        


