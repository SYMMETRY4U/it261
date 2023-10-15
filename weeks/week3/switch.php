<?php

date_default_timezone_set('America/Los_Angeles'); // Set the time zone to Pacific Time (PT)

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}
switch ($today) {
    case 'Friday':
        $coffee = '<h2>Friday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = '<p>The moment fall hits, we rush to our local coffee shop and order a<b>pumpkin spice latte</b>. We love them so much, we took it upon ourselves to try making it at home. This recipe is easy and I bet you have most, if not everything, you need to make it at home right now. It also comes together in under 10 minutes!</p>';
        break;

    case 'Sunday':
        $coffee = '<h2>Sunday is our Regular Joe Day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Regular Coffee';
        $content = '<p><b>Regular</b> coffee made from roasted coffee beans, and the flavor and strength can vary depending on the type of coffee bean used, the roast level, and the brewing method. It is typically not flavored with additional ingredients </p>';
        break;

    case 'Monday':
        $coffee = '<h2>Monday is our Latte Day!</h2>';
        $pic = 'latte.jpg';
        $alt = 'Latte Day';
        $content = '<p><b>Latte</b> a smooth and creamy drink, made from the combination of espresso and steamed milk. A popular choice in coffee shops and cafes served in different sizes, such as small (cortado), medium (standard), or large (grande). Lattes can be served both hot and iced, enjoye a versatile coffee beverage.</p>';
        break;

    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Americano Day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = '<p>The <b>Americano</b> is a versatile beverage for those that appreciate the simplicity and balance of flavors served in various sizes, from small to large, depending on the amount of water added. It can also be served either hot or iced, making it suitable for different preferences and occasions.</p>';
        break;

    case 'Wednesday':
        $coffee = '<h2>Wednesday is our Cappuccino Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappuccino Time';
        $content = '<p><b>Cappuccino</b> is a espresso-based coffee beverage known for its rich and creamy texture. It is composed of three main components: espresso, steamed milk, and milk foam. The name "cappuccino" is derived from the Italian word "cappuccio," which means "hood" or "hood-like," referring to the frothy milk foam that covers the coffee\'s surface.</p>';
        break;

    case 'Thursday':
        $coffee = '<h2>Thursday is our Expresso Day!</h2>';
        $pic = 'expresso.jpg';
        $alt = 'Expresso';
        $content = '<p><b>Espresso</b> is popular for its strong caffeine content and concentrated coffee flavor. It is often enjoyed as a standalone shot or used as the base for a wide range of coffee beverages in cafes and coffee shops around the world.</p>';
        break;

    case 'Saturday':
        $coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
        $pic = 'greentea.jpg';
        $alt = 'Green Tea Latte';
        $content = '<p><b>Green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.</p>';
        break;






    }

?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="author" content="Brian"> 
<title>Switch Classwork Exercise</title>
<!-- <link href="css/styles.css" rel="stylesheet" type="text/css"> -->

<style>

* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}
#wrapper {
width:940px;
margin:20px auto;
}

h1, h2, img {
margin-bottom:10px;
}

p {
margin-bottom:20px;
}

</style>

</head>

<body>
    <div id="wrapper">
    <h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
    <?php echo $coffee;
     ?>
    <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    <?php echo $content; ?>

    <h2>Check out our Daily Specials</h2>
    <ul>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
    </ul>








    <!-- <p><a href="switch.php?today=Monday">Monday</a></p>
    <p><a href="switch.php?today=Tuesday">Tuesday</a></p>
    <p><a href="switch.php?today=Wednesday">Wednesday</a></p>
    <p><a href="switch.php?today=Thursday">Thursday</a></p>
    <p><a href="switch.php?today=Friday">Friday</a></p>
    <p><a href="switch.php?today=Saturday">Saturday</a></p>
    <p><a href="switch.php?today=Sunday">Sunday</a></p> -->


    
</div>  
<!-- end wrapper -->
</body>
</html>